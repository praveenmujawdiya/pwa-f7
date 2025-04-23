<?php

namespace Symfony\Config\Pwa\Serviceworker\Workbox;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GoogleFontsConfig 
{
    private $enabled;
    private $cachePrefix;
    private $maxAge;
    private $maxEntries;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * The cache prefix for the Google fonts.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePrefix($value): static
    {
        $this->_usedProperties['cachePrefix'] = true;
        $this->cachePrefix = $value;

        return $this;
    }

    /**
     * The maximum age of the Google fonts cache (in seconds).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxAge($value): static
    {
        $this->_usedProperties['maxAge'] = true;
        $this->maxAge = $value;

        return $this;
    }

    /**
     * The maximum number of entries in the Google fonts cache.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxEntries($value): static
    {
        $this->_usedProperties['maxEntries'] = true;
        $this->maxEntries = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('cache_prefix', $value)) {
            $this->_usedProperties['cachePrefix'] = true;
            $this->cachePrefix = $value['cache_prefix'];
            unset($value['cache_prefix']);
        }

        if (array_key_exists('max_age', $value)) {
            $this->_usedProperties['maxAge'] = true;
            $this->maxAge = $value['max_age'];
            unset($value['max_age']);
        }

        if (array_key_exists('max_entries', $value)) {
            $this->_usedProperties['maxEntries'] = true;
            $this->maxEntries = $value['max_entries'];
            unset($value['max_entries']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['cachePrefix'])) {
            $output['cache_prefix'] = $this->cachePrefix;
        }
        if (isset($this->_usedProperties['maxAge'])) {
            $output['max_age'] = $this->maxAge;
        }
        if (isset($this->_usedProperties['maxEntries'])) {
            $output['max_entries'] = $this->maxEntries;
        }

        return $output;
    }

}
