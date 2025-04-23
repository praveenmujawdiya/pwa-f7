<?php

namespace Symfony\Config\Pwa\Manifest;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FileHandlersConfig'.\DIRECTORY_SEPARATOR.'ActionConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class FileHandlersConfig 
{
    private $action;
    private $accept;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * The action to take.
     * @return \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig : static)
     */
    public function action(string|array $value = []): \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['action'] = true;
            $this->action = $value;

            return $this;
        }

        if (!$this->action instanceof \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig) {
            $this->_usedProperties['action'] = true;
            $this->action = new \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "action()" has already been initialized. You cannot pass values the second time you call action().');
        }

        return $this->action;
    }

    /**
     * @return $this
     */
    public function accept(string $name, ParamConfigurator|array $value): static
    {
        $this->_usedProperties['accept'] = true;
        $this->accept[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('action', $value)) {
            $this->_usedProperties['action'] = true;
            $this->action = \is_array($value['action']) ? new \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig($value['action']) : $value['action'];
            unset($value['action']);
        }

        if (array_key_exists('accept', $value)) {
            $this->_usedProperties['accept'] = true;
            $this->accept = $value['accept'];
            unset($value['accept']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['action'])) {
            $output['action'] = $this->action instanceof \Symfony\Config\Pwa\Manifest\FileHandlersConfig\ActionConfig ? $this->action->toArray() : $this->action;
        }
        if (isset($this->_usedProperties['accept'])) {
            $output['accept'] = $this->accept;
        }

        return $output;
    }

}
