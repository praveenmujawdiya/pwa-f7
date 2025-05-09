<?php

declare(strict_types=1);

namespace Sfp\PHPStan\Psr\Log\Rules;

use PhpParser\Node;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\IdentifierRuleError;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleError;
use PHPStan\Rules\RuleErrorBuilder;
use PHPStan\ShouldNotHappenException;
use PHPStan\Type\ObjectType;

use function count;
use function implode;
use function in_array;
use function preg_match;
use function preg_match_all;
use function sprintf;

/**
 * @implements Rule<Node\Expr\MethodCall>
 */
final class PlaceholderCharactersRule implements Rule
{
    private const ERROR_DOUBLE_BRACES = 'Parameter $message of logger method Psr\Log\LoggerInterface::%s() should not includes double braces. - %s';
    private const ERROR_INVALID_CHAR  = 'Parameter $message of logger method Psr\Log\LoggerInterface::%s() has braces. But it includes invalid characters for placeholder. - %s';

    public function getNodeType(): string
    {
        return Node\Expr\MethodCall::class;
    }

    /**
     * @throws ShouldNotHappenException
     */
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier) {
            // @codeCoverageIgnoreStart
            return []; // @codeCoverageIgnoreEnd
        }

        $calledOnType = $scope->getType($node->var);
        if (! (new ObjectType('Psr\Log\LoggerInterface'))->isSuperTypeOf($calledOnType)->yes()) {
            // @codeCoverageIgnoreStart
            return []; // @codeCoverageIgnoreEnd
        }

        /** @var Node\Arg[] $args */
        $args = $node->getArgs();
        if (count($args) === 0) {
            // @codeCoverageIgnoreStart
            return []; // @codeCoverageIgnoreEnd
        }

        $methodName = $node->name->toLowerString();

        $messageArgumentNo = 0;
        if ($methodName === 'log') {
            if (
                count($args) < 2
                || ! $args[0]->value instanceof Node\Scalar\String_
            ) {
                // @codeCoverageIgnoreStart
                return []; // @codeCoverageIgnoreEnd
            }

            $messageArgumentNo = 1;
        } elseif (! in_array($methodName, LogLevelListInterface::LOGGER_LEVEL_METHODS, true)) {
            // @codeCoverageIgnoreStart
            return []; // @codeCoverageIgnoreEnd
        }

        $message = $args[$messageArgumentNo];

        $strings = $scope->getType($message->value)->getConstantStrings();

        if (count($strings) === 0) {
            return [];
        }

        $errors = [];
        foreach ($strings as $constantStringType) {
            $message = $constantStringType->getValue();

            $doubleBraceError = self::checkDoubleBrace($message, $methodName);
            if ($doubleBraceError instanceof RuleError) {
                $errors[] = $doubleBraceError;
                continue;
            }

            $invalidCharError = self::checkInvalidChar($message, $methodName);
            if ($invalidCharError instanceof RuleError) {
                $errors[] = $invalidCharError;
            }
        }

        return $errors;
    }

    private static function checkDoubleBrace(string $message, string $methodName): ?IdentifierRuleError
    {
        $matched = preg_match_all('#{{(.+?)}}#', $message, $matches);

        if ($matched === 0 || $matched === false) {
            return null;
        }

        return RuleErrorBuilder::message(
            sprintf(self::ERROR_DOUBLE_BRACES, $methodName, implode(',', $matches[0]))
        )
            ->identifier('sfpPsrLog.placeholderCharactersDoubleBraces')
            ->tip('See https://www.php-fig.org/psr/psr-3/#12-message')
            ->build();
    }

    private static function checkInvalidChar(string $message, string $methodName): ?IdentifierRuleError
    {
        $matched = preg_match_all('#{(.+?)}#', $message, $matches);

        if ($matched === 0 || $matched === false) {
            return null;
        }

        $invalidPlaceHolders = [];
        foreach ($matches[1] as $i => $placeholderCandidate) {
            if (preg_match('#\A[A-Za-z0-9_\.]+\z#', $placeholderCandidate) !== 1) {
                $invalidPlaceHolders[$i] = $matches[0][$i];
            }
        }

        if (count($invalidPlaceHolders) === 0) {
            return null;
        }

        return RuleErrorBuilder::message(
            sprintf(self::ERROR_INVALID_CHAR, $methodName, implode(',', $invalidPlaceHolders))
        )
            ->identifier('sfpPsrLog.placeholderCharactersInvalidChar')
            ->tip('See https://www.php-fig.org/psr/psr-3/#12-message')
            ->build();
    }
}
