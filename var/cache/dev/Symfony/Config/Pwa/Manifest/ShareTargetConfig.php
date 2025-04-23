<?php

namespace Symfony\Config\Pwa\Manifest;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ShareTarget'.\DIRECTORY_SEPARATOR.'ActionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ShareTarget'.\DIRECTORY_SEPARATOR.'ParamsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ShareTargetConfig 
{
    private $action;
    private $method;
    private $enctype;
    private $params;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * The action of the share target.
     * @return \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig : static)
     */
    public function action(string|array $value = []): \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['action'] = true;
            $this->action = $value;

            return $this;
        }

        if (!$this->action instanceof \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig) {
            $this->_usedProperties['action'] = true;
            $this->action = new \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "action()" has already been initialized. You cannot pass values the second time you call action().');
        }

        return $this->action;
    }

    /**
     * The method of the share target.
     * @example GET
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function method($value): static
    {
        $this->_usedProperties['method'] = true;
        $this->method = $value;

        return $this;
    }

    /**
     * The enctype of the share target. Ignored if method is GET.
     * @example multipart/form-data
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enctype($value): static
    {
        $this->_usedProperties['enctype'] = true;
        $this->enctype = $value;

        return $this;
    }

    /**
     * The parameters of the share target.
    */
    public function params(array $value = []): \Symfony\Config\Pwa\Manifest\ShareTarget\ParamsConfig
    {
        if (null === $this->params) {
            $this->_usedProperties['params'] = true;
            $this->params = new \Symfony\Config\Pwa\Manifest\ShareTarget\ParamsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "params()" has already been initialized. You cannot pass values the second time you call params().');
        }

        return $this->params;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('action', $value)) {
            $this->_usedProperties['action'] = true;
            $this->action = \is_array($value['action']) ? new \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig($value['action']) : $value['action'];
            unset($value['action']);
        }

        if (array_key_exists('method', $value)) {
            $this->_usedProperties['method'] = true;
            $this->method = $value['method'];
            unset($value['method']);
        }

        if (array_key_exists('enctype', $value)) {
            $this->_usedProperties['enctype'] = true;
            $this->enctype = $value['enctype'];
            unset($value['enctype']);
        }

        if (array_key_exists('params', $value)) {
            $this->_usedProperties['params'] = true;
            $this->params = new \Symfony\Config\Pwa\Manifest\ShareTarget\ParamsConfig($value['params']);
            unset($value['params']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['action'])) {
            $output['action'] = $this->action instanceof \Symfony\Config\Pwa\Manifest\ShareTarget\ActionConfig ? $this->action->toArray() : $this->action;
        }
        if (isset($this->_usedProperties['method'])) {
            $output['method'] = $this->method;
        }
        if (isset($this->_usedProperties['enctype'])) {
            $output['enctype'] = $this->enctype;
        }
        if (isset($this->_usedProperties['params'])) {
            $output['params'] = $this->params->toArray();
        }

        return $output;
    }

}
