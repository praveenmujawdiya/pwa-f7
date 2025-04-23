<?php

namespace Symfony\Config\Pwa\Manifest;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ShortcutsConfig'.\DIRECTORY_SEPARATOR.'UrlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ShortcutsConfig'.\DIRECTORY_SEPARATOR.'IconsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ShortcutsConfig 
{
    private $name;
    private $shortName;
    private $description;
    private $url;
    private $icons;
    private $_usedProperties = [];

    /**
     * The name of the shortcut.
     * @example Awesome shortcut
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): static
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * The short name of the shortcut.
     * @example shortcut
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function shortName($value): static
    {
        $this->_usedProperties['shortName'] = true;
        $this->shortName = $value;

        return $this;
    }

    /**
     * The description of the shortcut.
     * @example This is an awesome shortcut
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): static
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the shortcut.
     * @return \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig : static)
     */
    public function url(string|array $value = []): \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value;

            return $this;
        }

        if (!$this->url instanceof \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig) {
            $this->_usedProperties['url'] = true;
            $this->url = new \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "url()" has already been initialized. You cannot pass values the second time you call url().');
        }

        return $this->url;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The icons of the shortcut.
     * @return \Symfony\Config\Pwa\Manifest\ShortcutsConfig\IconsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\ShortcutsConfig\IconsConfig : static)
     */
    public function icons(array $value = []): \Symfony\Config\Pwa\Manifest\ShortcutsConfig\IconsConfig|static
    {
        $this->_usedProperties['icons'] = true;
        if (!\is_array($value)) {
            $this->icons[] = $value;

            return $this;
        }

        return $this->icons[] = new \Symfony\Config\Pwa\Manifest\ShortcutsConfig\IconsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('short_name', $value)) {
            $this->_usedProperties['shortName'] = true;
            $this->shortName = $value['short_name'];
            unset($value['short_name']);
        }

        if (array_key_exists('description', $value)) {
            $this->_usedProperties['description'] = true;
            $this->description = $value['description'];
            unset($value['description']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = \is_array($value['url']) ? new \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig($value['url']) : $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('icons', $value)) {
            $this->_usedProperties['icons'] = true;
            $this->icons = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Manifest\ShortcutsConfig\IconsConfig($v) : $v, $value['icons']);
            unset($value['icons']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['shortName'])) {
            $output['short_name'] = $this->shortName;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url instanceof \Symfony\Config\Pwa\Manifest\ShortcutsConfig\UrlConfig ? $this->url->toArray() : $this->url;
        }
        if (isset($this->_usedProperties['icons'])) {
            $output['icons'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Manifest\ShortcutsConfig\IconsConfig ? $v->toArray() : $v, $this->icons);
        }

        return $output;
    }

}
