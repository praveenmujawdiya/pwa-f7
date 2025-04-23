<?php

namespace Symfony\Config\Pwa\Manifest;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EdgeSidePanelConfig 
{
    private $preferredWidth;
    private $_usedProperties = [];

    /**
     * Specifies the preferred width of the side panel view in Microsoft Edge.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function preferredWidth($value): static
    {
        $this->_usedProperties['preferredWidth'] = true;
        $this->preferredWidth = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('preferred_width', $value)) {
            $this->_usedProperties['preferredWidth'] = true;
            $this->preferredWidth = $value['preferred_width'];
            unset($value['preferred_width']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['preferredWidth'])) {
            $output['preferred_width'] = $this->preferredWidth;
        }

        return $output;
    }

}
