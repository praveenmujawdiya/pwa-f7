<?php

namespace Symfony\Config\Pwa\Manifest\WidgetsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ScreenshotsConfig 
{
    private $src;
    private $height;
    private $width;
    private $formFactor;
    private $label;
    private $platform;
    private $format;
    private $reference;
    private $_usedProperties = [];

    /**
     * The path to the screenshot. Can be served by Asset Mapper.
     * @example screenshot/lowres.webp
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function src($value): static
    {
        $this->_usedProperties['src'] = true;
        $this->src = $value;

        return $this;
    }

    /**
     * @example 1080
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function height($value): static
    {
        $this->_usedProperties['height'] = true;
        $this->height = $value;

        return $this;
    }

    /**
     * @example 1080
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function width($value): static
    {
        $this->_usedProperties['width'] = true;
        $this->width = $value;

        return $this;
    }

    /**
     * The form factor of the screenshot. Will guess the form factor if not set.
     * @example wide
     * @example narrow
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formFactor($value): static
    {
        $this->_usedProperties['formFactor'] = true;
        $this->formFactor = $value;

        return $this;
    }

    /**
     * The label of the screenshot.
     * @example Homescreen of Awesome App
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): static
    {
        $this->_usedProperties['label'] = true;
        $this->label = $value;

        return $this;
    }

    /**
     * The platform of the screenshot.
     * @example android
     * @example windows
     * @example chromeos
     * @example ipados
     * @example ios
     * @example kaios
     * @example macos
     * @example windows
     * @example xbox
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
     * The format of the screenshot. Will convert the file if set.
     * @example jpg
     * @example png
     * @example webp
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function format($value): static
    {
        $this->_usedProperties['format'] = true;
        $this->format = $value;

        return $this;
    }

    /**
     * The URL of the screenshot. Only for reference and not used by the bundle.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function reference($value): static
    {
        $this->_usedProperties['reference'] = true;
        $this->reference = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('src', $value)) {
            $this->_usedProperties['src'] = true;
            $this->src = $value['src'];
            unset($value['src']);
        }

        if (array_key_exists('height', $value)) {
            $this->_usedProperties['height'] = true;
            $this->height = $value['height'];
            unset($value['height']);
        }

        if (array_key_exists('width', $value)) {
            $this->_usedProperties['width'] = true;
            $this->width = $value['width'];
            unset($value['width']);
        }

        if (array_key_exists('form_factor', $value)) {
            $this->_usedProperties['formFactor'] = true;
            $this->formFactor = $value['form_factor'];
            unset($value['form_factor']);
        }

        if (array_key_exists('label', $value)) {
            $this->_usedProperties['label'] = true;
            $this->label = $value['label'];
            unset($value['label']);
        }

        if (array_key_exists('platform', $value)) {
            $this->_usedProperties['platform'] = true;
            $this->platform = $value['platform'];
            unset($value['platform']);
        }

        if (array_key_exists('format', $value)) {
            $this->_usedProperties['format'] = true;
            $this->format = $value['format'];
            unset($value['format']);
        }

        if (array_key_exists('reference', $value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = $value['reference'];
            unset($value['reference']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['src'])) {
            $output['src'] = $this->src;
        }
        if (isset($this->_usedProperties['height'])) {
            $output['height'] = $this->height;
        }
        if (isset($this->_usedProperties['width'])) {
            $output['width'] = $this->width;
        }
        if (isset($this->_usedProperties['formFactor'])) {
            $output['form_factor'] = $this->formFactor;
        }
        if (isset($this->_usedProperties['label'])) {
            $output['label'] = $this->label;
        }
        if (isset($this->_usedProperties['platform'])) {
            $output['platform'] = $this->platform;
        }
        if (isset($this->_usedProperties['format'])) {
            $output['format'] = $this->format;
        }
        if (isset($this->_usedProperties['reference'])) {
            $output['reference'] = $this->reference;
        }

        return $output;
    }

}
