<?php

namespace Symfony\Config\Pwa;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FaviconsConfig 
{
    private $enabled;
    private $src;
    private $backgroundColor;
    private $safariPinnedTabColor;
    private $tileColor;
    private $borderRadius;
    private $imageScale;
    private $lowResolution;
    private $useSilhouette;
    private $useStartImage;
    private $monochrome;
    private $potrace;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * The source of the favicon. Shall be a SVG or large PNG.
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
     * The color of the Safari pinned tab. Requires "use_silhouette" to be set to "true".
     * @example red
     * @example #f5ef06
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function safariPinnedTabColor($value): static
    {
        $this->_usedProperties['safariPinnedTabColor'] = true;
        $this->safariPinnedTabColor = $value;

        return $this;
    }

    /**
     * The color of the tile for Windows 8+.
     * @example red
     * @example #f5ef06
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tileColor($value): static
    {
        $this->_usedProperties['tileColor'] = true;
        $this->tileColor = $value;

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
     * Include low resolution icons.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lowResolution($value): static
    {
        $this->_usedProperties['lowResolution'] = true;
        $this->lowResolution = $value;

        return $this;
    }

    /**
     * Use only the silhouette of the icon. Applicable for macOS Safari and Windows 8+. Requires potrace to be installed.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useSilhouette($value): static
    {
        $this->_usedProperties['useSilhouette'] = true;
        $this->useSilhouette = $value;

        return $this;
    }

    /**
     * Use the icon as a start image for the iOS splash screen.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useStartImage($value): static
    {
        $this->_usedProperties['useStartImage'] = true;
        $this->useStartImage = $value;

        return $this;
    }

    /**
     * Use a monochrome icon.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function monochrome($value): static
    {
        $this->_usedProperties['monochrome'] = true;
        $this->monochrome = $value;

        return $this;
    }

    /**
     * The path to the potrace binary.
     * @default 'potrace'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function potrace($value): static
    {
        $this->_usedProperties['potrace'] = true;
        $this->potrace = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('src', $value)) {
            $this->_usedProperties['src'] = true;
            $this->src = $value['src'];
            unset($value['src']);
        }

        if (array_key_exists('background_color', $value)) {
            $this->_usedProperties['backgroundColor'] = true;
            $this->backgroundColor = $value['background_color'];
            unset($value['background_color']);
        }

        if (array_key_exists('safari_pinned_tab_color', $value)) {
            $this->_usedProperties['safariPinnedTabColor'] = true;
            $this->safariPinnedTabColor = $value['safari_pinned_tab_color'];
            unset($value['safari_pinned_tab_color']);
        }

        if (array_key_exists('tile_color', $value)) {
            $this->_usedProperties['tileColor'] = true;
            $this->tileColor = $value['tile_color'];
            unset($value['tile_color']);
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

        if (array_key_exists('low_resolution', $value)) {
            $this->_usedProperties['lowResolution'] = true;
            $this->lowResolution = $value['low_resolution'];
            unset($value['low_resolution']);
        }

        if (array_key_exists('use_silhouette', $value)) {
            $this->_usedProperties['useSilhouette'] = true;
            $this->useSilhouette = $value['use_silhouette'];
            unset($value['use_silhouette']);
        }

        if (array_key_exists('use_start_image', $value)) {
            $this->_usedProperties['useStartImage'] = true;
            $this->useStartImage = $value['use_start_image'];
            unset($value['use_start_image']);
        }

        if (array_key_exists('monochrome', $value)) {
            $this->_usedProperties['monochrome'] = true;
            $this->monochrome = $value['monochrome'];
            unset($value['monochrome']);
        }

        if (array_key_exists('potrace', $value)) {
            $this->_usedProperties['potrace'] = true;
            $this->potrace = $value['potrace'];
            unset($value['potrace']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['src'])) {
            $output['src'] = $this->src;
        }
        if (isset($this->_usedProperties['backgroundColor'])) {
            $output['background_color'] = $this->backgroundColor;
        }
        if (isset($this->_usedProperties['safariPinnedTabColor'])) {
            $output['safari_pinned_tab_color'] = $this->safariPinnedTabColor;
        }
        if (isset($this->_usedProperties['tileColor'])) {
            $output['tile_color'] = $this->tileColor;
        }
        if (isset($this->_usedProperties['borderRadius'])) {
            $output['border_radius'] = $this->borderRadius;
        }
        if (isset($this->_usedProperties['imageScale'])) {
            $output['image_scale'] = $this->imageScale;
        }
        if (isset($this->_usedProperties['lowResolution'])) {
            $output['low_resolution'] = $this->lowResolution;
        }
        if (isset($this->_usedProperties['useSilhouette'])) {
            $output['use_silhouette'] = $this->useSilhouette;
        }
        if (isset($this->_usedProperties['useStartImage'])) {
            $output['use_start_image'] = $this->useStartImage;
        }
        if (isset($this->_usedProperties['monochrome'])) {
            $output['monochrome'] = $this->monochrome;
        }
        if (isset($this->_usedProperties['potrace'])) {
            $output['potrace'] = $this->potrace;
        }

        return $output;
    }

}
