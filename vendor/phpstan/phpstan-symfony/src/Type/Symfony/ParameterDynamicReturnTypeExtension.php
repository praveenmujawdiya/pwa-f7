<?php declare(strict_types = 1);

namespace PHPStan\Type\Symfony;

use PhpParser\Node\Expr\MethodCall;
use PHPStan\Analyser\Scope;
use PHPStan\PhpDoc\TypeStringResolver;
use PHPStan\Reflection\MethodReflection;
use PHPStan\ShouldNotHappenException;
use PHPStan\Symfony\ParameterMap;
use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\Constant\ConstantArrayType;
use PHPStan\Type\Constant\ConstantArrayTypeBuilder;
use PHPStan\Type\Constant\ConstantBooleanType;
use PHPStan\Type\DynamicMethodReturnTypeExtension;
use PHPStan\Type\FloatType;
use PHPStan\Type\GeneralizePrecision;
use PHPStan\Type\IntegerType;
use PHPStan\Type\MixedType;
use PHPStan\Type\NullType;
use PHPStan\Type\StringType;
use PHPStan\Type\Type;
use PHPStan\Type\TypeCombinator;
use PHPStan\Type\TypeTraverser;
use PHPStan\Type\UnionType;
use Symfony\Component\DependencyInjection\EnvVarProcessor;
use function array_filter;
use function array_keys;
use function array_map;
use function array_values;
use function class_exists;
use function count;
use function in_array;
use function is_array;
use function is_int;
use function is_string;
use function preg_match;
use function strlen;

final class ParameterDynamicReturnTypeExtension implements DynamicMethodReturnTypeExtension
{

	/** @var class-string */
	private string $className;

	private ?string $methodGet = null;

	private ?string $methodHas = null;

	private bool $constantHassers;

	private ParameterMap $parameterMap;

	private TypeStringResolver $typeStringResolver;

	/**
	 * @param class-string $className
	 */
	public function __construct(
		string $className,
		?string $methodGet,
		?string $methodHas,
		bool $constantHassers,
		ParameterMap $symfonyParameterMap,
		TypeStringResolver $typeStringResolver
	)
	{
		$this->className = $className;
		$this->methodGet = $methodGet;
		$this->methodHas = $methodHas;
		$this->constantHassers = $constantHassers;
		$this->parameterMap = $symfonyParameterMap;
		$this->typeStringResolver = $typeStringResolver;
	}

	public function getClass(): string
	{
		return $this->className;
	}

	public function isMethodSupported(MethodReflection $methodReflection): bool
	{
		$methods = array_filter([$this->methodGet, $this->methodHas], static fn (?string $method): bool => $method !== null);

		return in_array($methodReflection->getName(), $methods, true);
	}

	public function getTypeFromMethodCall(MethodReflection $methodReflection, MethodCall $methodCall, Scope $scope): ?Type
	{
		switch ($methodReflection->getName()) {
			case $this->methodGet:
				return $this->getGetTypeFromMethodCall($methodReflection, $methodCall, $scope);
			case $this->methodHas:
				return $this->getHasTypeFromMethodCall($methodReflection, $methodCall, $scope);
		}
		throw new ShouldNotHappenException();
	}

	private function getGetTypeFromMethodCall(
		MethodReflection $methodReflection,
		MethodCall $methodCall,
		Scope $scope
	): Type
	{
		// We don't use the method's return type because this won't work properly with lowest and
		// highest versions of Symfony ("mixed" for lowest, "array|bool|float|integer|string|null" for highest).
		$defaultReturnType = new UnionType([
			new ArrayType(new MixedType(), new MixedType()),
			new BooleanType(),
			new FloatType(),
			new IntegerType(),
			new StringType(),
			new NullType(),
		]);
		if (!isset($methodCall->getArgs()[0])) {
			return $defaultReturnType;
		}

		$parameterKeys = $this->parameterMap::getParameterKeysFromNode($methodCall->getArgs()[0]->value, $scope);
		if ($parameterKeys === []) {
			return $defaultReturnType;
		}

		$returnTypes = [];
		foreach ($parameterKeys as $parameterKey) {
			$parameter = $this->parameterMap->getParameter($parameterKey);
			if ($parameter === null) {
				return $defaultReturnType;
			}

			$returnTypes[] = $this->generalizeTypeFromValue($scope, $parameter->getValue());
		}

		return TypeCombinator::union(...$returnTypes);
	}

	/**
	 * @param array<mixed>|bool|float|int|string $value
	 */
	private function generalizeTypeFromValue(Scope $scope, $value): Type
	{
		if (is_array($value) && $value !== []) {
			$hasOnlyStringKey = true;
			foreach (array_keys($value) as $key) {
				if (is_int($key)) {
					$hasOnlyStringKey = false;
					break;
				}
			}

			if ($hasOnlyStringKey) {
				$keyTypes = [];
				$valueTypes = [];
				foreach ($value as $key => $element) {
					$keyType = $scope->getTypeFromValue($key);
					$keyStringTypes = $keyType->getConstantStrings();
					if (count($keyStringTypes) !== 1) {
						throw new ShouldNotHappenException();
					}
					$keyTypes[] = $keyStringTypes[0];
					$valueTypes[] = $this->generalizeTypeFromValue($scope, $element);
				}

				return ConstantArrayTypeBuilder::createFromConstantArray(
					new ConstantArrayType($keyTypes, $valueTypes),
				)->getArray();
			}

			return new ArrayType(
				TypeCombinator::union(...array_map(fn ($item): Type => $this->generalizeTypeFromValue($scope, $item), array_keys($value))),
				TypeCombinator::union(...array_map(fn ($item): Type => $this->generalizeTypeFromValue($scope, $item), array_values($value))),
			);
		}

		if (
			class_exists(EnvVarProcessor::class)
			&& is_string($value)
			&& preg_match('/%env\((.*)\:.*\)%/U', $value, $matches) === 1
			&& strlen($matches[0]) === strlen($value)
		) {
			$providedTypes = EnvVarProcessor::getProvidedTypes();

			return $this->typeStringResolver->resolve($providedTypes[$matches[1]] ?? 'bool|int|float|string|array');
		}

		return $this->generalizeType($scope->getTypeFromValue($value));
	}

	private function generalizeType(Type $type): Type
	{
		return TypeTraverser::map($type, function (Type $type, callable $traverse): Type {
			if ($type instanceof ConstantArrayType) {
				if (count($type->getValueTypes()) === 0) {
					return new ArrayType(new MixedType(), new MixedType());
				}
				return new ArrayType($this->generalizeType($type->getKeyType()), $this->generalizeType($type->getItemType()));
			}
			if ($type->isConstantValue()->yes()) {
				return $type->generalize(GeneralizePrecision::lessSpecific());
			}
			return $traverse($type);
		});
	}

	private function getHasTypeFromMethodCall(
		MethodReflection $methodReflection,
		MethodCall $methodCall,
		Scope $scope
	): ?Type
	{
		if (!isset($methodCall->getArgs()[0]) || !$this->constantHassers) {
			return null;
		}

		$parameterKeys = $this->parameterMap::getParameterKeysFromNode($methodCall->getArgs()[0]->value, $scope);
		if ($parameterKeys === []) {
			return null;
		}

		$has = null;
		foreach ($parameterKeys as $parameterKey) {
			$parameter = $this->parameterMap->getParameter($parameterKey);

			if ($has === null) {
				$has = $parameter !== null;
			} elseif (
				($has === true && $parameter === null)
				|| ($has === false && $parameter !== null)
			) {
				return null;
			}
		}

		return new ConstantBooleanType($has);
	}

}
