<?php

namespace Symfony\Config\Pwa\Manifest;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProtocolHandlersConfig'.\DIRECTORY_SEPARATOR.'UrlConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProtocolHandlersConfig 
{
    private $protocol;
    private $placeholder;
    private $url;
    private $_usedProperties = [];

    /**
     * The protocol of the handler.
     * @example web+jngl
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function protocol($value): static
    {
        $this->_usedProperties['protocol'] = true;
        $this->protocol = $value;

        return $this;
    }

    /**
     * The placeholder of the handler. Will be replaced by "xxx=%s".
     * @example type
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function placeholder($value): static
    {
        $this->_usedProperties['placeholder'] = true;
        $this->placeholder = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the handler.
     * @return \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig : static)
     */
    public function url(string|array $value = []): \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value;

            return $this;
        }

        if (!$this->url instanceof \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig) {
            $this->_usedProperties['url'] = true;
            $this->url = new \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "url()" has already been initialized. You cannot pass values the second time you call url().');
        }

        return $this->url;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('protocol', $value)) {
            $this->_usedProperties['protocol'] = true;
            $this->protocol = $value['protocol'];
            unset($value['protocol']);
        }

        if (array_key_exists('placeholder', $value)) {
            $this->_usedProperties['placeholder'] = true;
            $this->placeholder = $value['placeholder'];
            unset($value['placeholder']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = \is_array($value['url']) ? new \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig($value['url']) : $value['url'];
            unset($value['url']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['protocol'])) {
            $output['protocol'] = $this->protocol;
        }
        if (isset($this->_usedProperties['placeholder'])) {
            $output['placeholder'] = $this->placeholder;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url instanceof \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig\UrlConfig ? $this->url->toArray() : $this->url;
        }

        return $output;
    }

}
