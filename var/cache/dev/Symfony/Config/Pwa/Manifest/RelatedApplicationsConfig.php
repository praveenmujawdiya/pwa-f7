<?php

namespace Symfony\Config\Pwa\Manifest;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RelatedApplicationsConfig'.\DIRECTORY_SEPARATOR.'UrlConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RelatedApplicationsConfig 
{
    private $platform;
    private $url;
    private $id;
    private $_usedProperties = [];

    /**
     * The platform of the application.
     * @example play
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function platform($value): static
    {
        $this->_usedProperties['platform'] = true;
        $this->platform = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the application.
     * @return \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig : static)
     */
    public function url(string|array $value = []): \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value;

            return $this;
        }

        if (!$this->url instanceof \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig) {
            $this->_usedProperties['url'] = true;
            $this->url = new \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "url()" has already been initialized. You cannot pass values the second time you call url().');
        }

        return $this->url;
    }

    /**
     * The ID of the application.
     * @example com.example.app1
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('platform', $value)) {
            $this->_usedProperties['platform'] = true;
            $this->platform = $value['platform'];
            unset($value['platform']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = \is_array($value['url']) ? new \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig($value['url']) : $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['platform'])) {
            $output['platform'] = $this->platform;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url instanceof \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig\UrlConfig ? $this->url->toArray() : $this->url;
        }
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }

        return $output;
    }

}
