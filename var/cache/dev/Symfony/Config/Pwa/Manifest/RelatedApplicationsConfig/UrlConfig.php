<?php

namespace Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UrlConfig 
{
    private $path;
    private $pathTypeReference;
    private $params;
    private $_usedProperties = [];

    /**
     * The URL or route name.
     * @example https://play.google.com/store/apps/details?id=com.example.app1
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     * The path type reference to generate paths/URLs. See https://symfony.com/doc/current/routing.html#generating-urls-in-controllers for more information.
     * @example 1
     * @example 0
     * @example 3
     * @example 2
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pathTypeReference($value): static
    {
        $this->_usedProperties['pathTypeReference'] = true;
        $this->pathTypeReference = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function params(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['params'] = true;
        $this->params = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('path_type_reference', $value)) {
            $this->_usedProperties['pathTypeReference'] = true;
            $this->pathTypeReference = $value['path_type_reference'];
            unset($value['path_type_reference']);
        }

        if (array_key_exists('params', $value)) {
            $this->_usedProperties['params'] = true;
            $this->params = $value['params'];
            unset($value['params']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['pathTypeReference'])) {
            $output['path_type_reference'] = $this->pathTypeReference;
        }
        if (isset($this->_usedProperties['params'])) {
            $output['params'] = $this->params;
        }

        return $output;
    }

}
