<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\GraphQl\Serializer;

use ApiPlatform\GraphQl\State\Provider\NoopProvider;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\GraphQl\Query;
use ApiPlatform\Metadata\IdentifiersExtractorInterface;
use ApiPlatform\Metadata\IriConverterInterface;
use ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface;
use ApiPlatform\Metadata\Property\Factory\PropertyNameCollectionFactoryInterface;
use ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface;
use ApiPlatform\Metadata\ResourceAccessCheckerInterface;
use ApiPlatform\Metadata\ResourceClassResolverInterface;
use ApiPlatform\Metadata\Util\ClassInfoTrait;
use ApiPlatform\Serializer\CacheKeyTrait;
use ApiPlatform\Serializer\ItemNormalizer as BaseItemNormalizer;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

/**
 * GraphQL normalizer.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class ItemNormalizer extends BaseItemNormalizer
{
    use CacheKeyTrait;
    use ClassInfoTrait;

    public const FORMAT = 'graphql';
    public const ITEM_RESOURCE_CLASS_KEY = '#itemResourceClass';
    public const ITEM_IDENTIFIERS_KEY = '#itemIdentifiers';

    private array $safeCacheKeysCache = [];

    public function __construct(PropertyNameCollectionFactoryInterface $propertyNameCollectionFactory, PropertyMetadataFactoryInterface $propertyMetadataFactory, IriConverterInterface $iriConverter, private readonly IdentifiersExtractorInterface $identifiersExtractor, ResourceClassResolverInterface $resourceClassResolver, ?PropertyAccessorInterface $propertyAccessor = null, ?NameConverterInterface $nameConverter = null, ?ClassMetadataFactoryInterface $classMetadataFactory = null, ?LoggerInterface $logger = null, ?ResourceMetadataCollectionFactoryInterface $resourceMetadataCollectionFactory = null, ?ResourceAccessCheckerInterface $resourceAccessChecker = null)
    {
        parent::__construct($propertyNameCollectionFactory, $propertyMetadataFactory, $iriConverter, $resourceClassResolver, $propertyAccessor, $nameConverter, $classMetadataFactory, $logger ?: new NullLogger(), $resourceMetadataCollectionFactory, $resourceAccessChecker);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return self::FORMAT === $format && parent::supportsNormalization($data, $format, $context);
    }

    public function getSupportedTypes($format): array
    {
        return self::FORMAT === $format ? parent::getSupportedTypes($format) : [];
    }

    /**
     * {@inheritdoc}
     *
     * @param array<string, mixed> $context
     *
     * @throws UnexpectedValueException
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $resourceClass = $this->getObjectClass($object);

        if ($this->getOutputClass($context)) {
            $context['graphql_identifiers'] = [
                self::ITEM_RESOURCE_CLASS_KEY => $context['operation']->getClass(),
                self::ITEM_IDENTIFIERS_KEY => $this->identifiersExtractor->getIdentifiersFromItem($object, $context['operation'] ?? null),
            ];

            return parent::normalize($object, $format, $context);
        }

        if ($this->isCacheKeySafe($context)) {
            $context['cache_key'] = $this->getCacheKey($format, $context);
        } else {
            $context['cache_key'] = false;
        }

        unset($context['operation_name'], $context['operation']); // Remove operation and operation_name only when cache key has been created
        $data = parent::normalize($object, $format, $context);
        if (!\is_array($data)) {
            throw new UnexpectedValueException('Expected data to be an array.');
        }

        if (isset($context['graphql_identifiers'])) {
            $data += $context['graphql_identifiers'];
        } elseif (!($context['no_resolver_data'] ?? false)) {
            $data[self::ITEM_RESOURCE_CLASS_KEY] = $resourceClass;
            $data[self::ITEM_IDENTIFIERS_KEY] = $this->identifiersExtractor->getIdentifiersFromItem($object, $context['operation'] ?? null);
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    protected function normalizeCollectionOfRelations(ApiProperty $propertyMetadata, iterable $attributeValue, string $resourceClass, ?string $format, array $context): array
    {
        // check for nested collection
        $operation = $this->resourceMetadataCollectionFactory?->create($resourceClass)->getOperation(forceCollection: true, forceGraphQl: true);
        if ($operation instanceof Query && $operation->getNested() && !$operation->getResolver() && (!$operation->getProvider() || NoopProvider::class === $operation->getProvider())) {
            return [...$attributeValue];
        }

        // to-many are handled directly by the GraphQL resolver
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return self::FORMAT === $format && parent::supportsDenormalization($data, $type, $format, $context);
    }

    /**
     * {@inheritdoc}
     */
    protected function getAllowedAttributes(string|object $classOrObject, array $context, bool $attributesAsString = false): array|bool
    {
        $allowedAttributes = parent::getAllowedAttributes($classOrObject, $context, $attributesAsString);

        if (($context['api_denormalize'] ?? false) && \is_array($allowedAttributes) && false !== ($indexId = array_search('id', $allowedAttributes, true))) {
            $allowedAttributes[] = '_id';
            array_splice($allowedAttributes, (int) $indexId, 1);
        }

        return $allowedAttributes;
    }

    /**
     * {@inheritdoc}
     */
    protected function setAttributeValue($object, $attribute, $value, $format = null, array $context = []): void
    {
        if ('_id' === $attribute) {
            $attribute = 'id';
        }

        parent::setAttributeValue($object, $attribute, $value, $format, $context);
    }

    /**
     * Check if any property contains a security grants, which makes the cache key not safe,
     * as allowed_properties can differ for 2 instances of the same object.
     */
    private function isCacheKeySafe(array $context): bool
    {
        if (!isset($context['resource_class']) || !$this->resourceClassResolver->isResourceClass($context['resource_class'])) {
            return false;
        }
        $resourceClass = $this->resourceClassResolver->getResourceClass(null, $context['resource_class']);
        if (isset($this->safeCacheKeysCache[$resourceClass])) {
            return $this->safeCacheKeysCache[$resourceClass];
        }
        $options = $this->getFactoryOptions($context);
        $propertyNames = $this->propertyNameCollectionFactory->create($resourceClass, $options);

        $this->safeCacheKeysCache[$resourceClass] = true;
        foreach ($propertyNames as $propertyName) {
            $propertyMetadata = $this->propertyMetadataFactory->create($resourceClass, $propertyName, $options);
            if (null !== $propertyMetadata->getSecurity()) {
                $this->safeCacheKeysCache[$resourceClass] = false;
                break;
            }
        }

        return $this->safeCacheKeysCache[$resourceClass];
    }
}
