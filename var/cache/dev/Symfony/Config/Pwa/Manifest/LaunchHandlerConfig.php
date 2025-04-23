<?php

namespace Symfony\Config\Pwa\Manifest;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LaunchHandlerConfig 
{
    private $clientMode;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function clientMode(mixed $value): static
    {
        $this->_usedProperties['clientMode'] = true;
        $this->clientMode = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client_mode', $value)) {
            $this->_usedProperties['clientMode'] = true;
            $this->clientMode = $value['client_mode'];
            unset($value['client_mode']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['clientMode'])) {
            $output['client_mode'] = $this->clientMode;
        }

        return $output;
    }

}
