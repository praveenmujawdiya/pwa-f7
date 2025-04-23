<?php

namespace Symfony\Config\Pwa\Serviceworker\Workbox;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OfflineFallback'.\DIRECTORY_SEPARATOR.'PageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OfflineFallback'.\DIRECTORY_SEPARATOR.'ImageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OfflineFallback'.\DIRECTORY_SEPARATOR.'FontConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OfflineFallbackConfig 
{
    private $page;
    private $image;
    private $font;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the offline page fallback.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig : static)
     */
    public function page(string|array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['page'] = true;
            $this->page = $value;

            return $this;
        }

        if (!$this->page instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig) {
            $this->_usedProperties['page'] = true;
            $this->page = new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "page()" has already been initialized. You cannot pass values the second time you call page().');
        }

        return $this->page;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the offline image fallback.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig : static)
     */
    public function image(string|array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['image'] = true;
            $this->image = $value;

            return $this;
        }

        if (!$this->image instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig) {
            $this->_usedProperties['image'] = true;
            $this->image = new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "image()" has already been initialized. You cannot pass values the second time you call image().');
        }

        return $this->image;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the offline font fallback.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig : static)
     */
    public function font(string|array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['font'] = true;
            $this->font = $value;

            return $this;
        }

        if (!$this->font instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig) {
            $this->_usedProperties['font'] = true;
            $this->font = new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "font()" has already been initialized. You cannot pass values the second time you call font().');
        }

        return $this->font;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('page', $value)) {
            $this->_usedProperties['page'] = true;
            $this->page = \is_array($value['page']) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig($value['page']) : $value['page'];
            unset($value['page']);
        }

        if (array_key_exists('image', $value)) {
            $this->_usedProperties['image'] = true;
            $this->image = \is_array($value['image']) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig($value['image']) : $value['image'];
            unset($value['image']);
        }

        if (array_key_exists('font', $value)) {
            $this->_usedProperties['font'] = true;
            $this->font = \is_array($value['font']) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig($value['font']) : $value['font'];
            unset($value['font']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['page'])) {
            $output['page'] = $this->page instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\PageConfig ? $this->page->toArray() : $this->page;
        }
        if (isset($this->_usedProperties['image'])) {
            $output['image'] = $this->image instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\ImageConfig ? $this->image->toArray() : $this->image;
        }
        if (isset($this->_usedProperties['font'])) {
            $output['font'] = $this->font instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallback\FontConfig ? $this->font->toArray() : $this->font;
        }

        return $output;
    }

}
