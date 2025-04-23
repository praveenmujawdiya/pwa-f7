<?php

namespace Symfony\Config\Pwa\Serviceworker\Workbox;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FontCacheConfig 
{
    private $enabled;
    private $cacheName;
    private $regex;
    private $maxEntries;
    private $maxAge;
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
     * The name of the font cache.
     * @default 'fonts'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheName($value): static
    {
        $this->_usedProperties['cacheName'] = true;
        $this->cacheName = $value;

        return $this;
    }

    /**
     * The regex to match the fonts.
     * @example /\.(ttf|eot|otf|woff2)$/
     * @default '/\\.(ttf|eot|otf|woff2)$/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function regex($value): static
    {
        $this->_usedProperties['regex'] = true;
        $this->regex = $value;

        return $this;
    }

    /**
     * The maximum number of entries in the image cache.
     * @example 50
     * @example 100
     * @example 200
     * @default 60
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxEntries($value): static
    {
        $this->_usedProperties['maxEntries'] = true;
        $this->maxEntries = $value;

        return $this;
    }

    /**
     * The maximum number of seconds before the font cache is invalidated.
     * @example 31536000
     * @example 2592000
     * @example 604800
     * @default 31536000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxAge($value): static
    {
        $this->_usedProperties['maxAge'] = true;
        $this->maxAge = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('cache_name', $value)) {
            $this->_usedProperties['cacheName'] = true;
            $this->cacheName = $value['cache_name'];
            unset($value['cache_name']);
        }

        if (array_key_exists('regex', $value)) {
            $this->_usedProperties['regex'] = true;
            $this->regex = $value['regex'];
            unset($value['regex']);
        }

        if (array_key_exists('max_entries', $value)) {
            $this->_usedProperties['maxEntries'] = true;
            $this->maxEntries = $value['max_entries'];
            unset($value['max_entries']);
        }

        if (array_key_exists('max_age', $value)) {
            $this->_usedProperties['maxAge'] = true;
            $this->maxAge = $value['max_age'];
            unset($value['max_age']);
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
        if (isset($this->_usedProperties['cacheName'])) {
            $output['cache_name'] = $this->cacheName;
        }
        if (isset($this->_usedProperties['regex'])) {
            $output['regex'] = $this->regex;
        }
        if (isset($this->_usedProperties['maxEntries'])) {
            $output['max_entries'] = $this->maxEntries;
        }
        if (isset($this->_usedProperties['maxAge'])) {
            $output['max_age'] = $this->maxAge;
        }

        return $output;
    }

}
