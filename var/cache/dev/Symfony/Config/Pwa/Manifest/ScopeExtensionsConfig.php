<?php

namespace Symfony\Config\Pwa\Manifest;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ScopeExtensionsConfig 
{
    private $origin;
    private $_usedProperties = [];

    /**
     * Specifies the origin pattern to associate with.
     * @example *.foo.com
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function origin($value): static
    {
        $this->_usedProperties['origin'] = true;
        $this->origin = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('origin', $value)) {
            $this->_usedProperties['origin'] = true;
            $this->origin = $value['origin'];
            unset($value['origin']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['origin'])) {
            $output['origin'] = $this->origin;
        }

        return $output;
    }

}
