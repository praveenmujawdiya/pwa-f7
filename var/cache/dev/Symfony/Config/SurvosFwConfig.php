<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosFwConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $theme;
    private $enabled;
    private $_usedProperties = [];

    /**
     * @default 'pagestack'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function theme($value): static
    {
        $this->_usedProperties['theme'] = true;
        $this->theme = $value;

        return $this;
    }

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

    public function getExtensionAlias(): string
    {
        return 'survos_fw';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = $value['theme'];
            unset($value['theme']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }

        return $output;
    }

}
