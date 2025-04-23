<?php

namespace Symfony\Config\Pwa\Serviceworker\Workbox;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WarmCacheUrlsConfig 
{
    private $path;
    private $params;
    private $_usedProperties = [];

    /**
     * The URL of the shortcut.
     * @example app_homepage
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
        if (isset($this->_usedProperties['params'])) {
            $output['params'] = $this->params;
        }

        return $output;
    }

}
