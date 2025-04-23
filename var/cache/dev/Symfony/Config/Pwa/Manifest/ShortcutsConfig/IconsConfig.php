<?php

namespace Symfony\Config\Pwa\Manifest\ShortcutsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IconsConfig 
{
    private $src;
    private $sizes;
    private $backgroundColor;
    private $borderRadius;
    private $imageScale;
    private $type;
    private $format;
    private $purpose;
    private $_usedProperties = [];

    /**
     * The path to the icon. Can be served by Asset Mapper.
     * @example icon/logo.svg
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
     * @param ParamConfigurator|list<ParamConfigurator|int>|mixed $value
     *
     * @return $this
     */
    public function sizes(mixed $value): static
    {
        $this->_usedProperties['sizes'] = true;
        $this->sizes = $value;

        return $this;
    }

    /**
     * The background color of the application. If this value is not defined and that of the Manifest section is, the value of the latter will be used.
     * @example red
     * @example #f5ef06
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function backgroundColor($value): static
    {
        $this->_usedProperties['backgroundColor'] = true;
        $this->backgroundColor = $value;

        return $this;
    }

    /**
     * The border radius of the icon.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function borderRadius($value): static
    {
        $this->_usedProperties['borderRadius'] = true;
        $this->borderRadius = $value;

        return $this;
    }

    /**
     * The scale of the icon.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function imageScale($value): static
    {
        $this->_usedProperties['imageScale'] = true;
        $this->imageScale = $value;

        return $this;
    }

    /**
     * The icon mime type.
     * @example image/webp
     * @example image/png
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * The icon format. When set, the "type" option is ignored and the image will be converted.
     * @example image/webp
     * @example image/png
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
     * The purpose of the icon.
     * @example any
     * @example maskable
     * @example monochrome
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function purpose($value): static
    {
        $this->_usedProperties['purpose'] = true;
        $this->purpose = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('src', $value)) {
            $this->_usedProperties['src'] = true;
            $this->src = $value['src'];
            unset($value['src']);
        }

        if (array_key_exists('sizes', $value)) {
            $this->_usedProperties['sizes'] = true;
            $this->sizes = $value['sizes'];
            unset($value['sizes']);
        }

        if (array_key_exists('background_color', $value)) {
            $this->_usedProperties['backgroundColor'] = true;
            $this->backgroundColor = $value['background_color'];
            unset($value['background_color']);
        }

        if (array_key_exists('border_radius', $value)) {
            $this->_usedProperties['borderRadius'] = true;
            $this->borderRadius = $value['border_radius'];
            unset($value['border_radius']);
        }

        if (array_key_exists('image_scale', $value)) {
            $this->_usedProperties['imageScale'] = true;
            $this->imageScale = $value['image_scale'];
            unset($value['image_scale']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('format', $value)) {
            $this->_usedProperties['format'] = true;
            $this->format = $value['format'];
            unset($value['format']);
        }

        if (array_key_exists('purpose', $value)) {
            $this->_usedProperties['purpose'] = true;
            $this->purpose = $value['purpose'];
            unset($value['purpose']);
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
        if (isset($this->_usedProperties['sizes'])) {
            $output['sizes'] = $this->sizes;
        }
        if (isset($this->_usedProperties['backgroundColor'])) {
            $output['background_color'] = $this->backgroundColor;
        }
        if (isset($this->_usedProperties['borderRadius'])) {
            $output['border_radius'] = $this->borderRadius;
        }
        if (isset($this->_usedProperties['imageScale'])) {
            $output['image_scale'] = $this->imageScale;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['format'])) {
            $output['format'] = $this->format;
        }
        if (isset($this->_usedProperties['purpose'])) {
            $output['purpose'] = $this->purpose;
        }

        return $output;
    }

}
