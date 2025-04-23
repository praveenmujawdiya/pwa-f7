<?php

namespace Symfony\Config\Pwa;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Serviceworker'.\DIRECTORY_SEPARATOR.'WorkboxConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ServiceworkerConfig 
{
    private $enabled;
    private $src;
    private $dest;
    private $skipWaiting;
    private $scope;
    private $useCache;
    private $workbox;
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
     * The path to the service worker source file. Can be served by Asset Mapper.
     * @example script/sw.js
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
     * The public URL to the service worker.
     * @example /sw.js
     * @default '/sw.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dest($value): static
    {
        $this->_usedProperties['dest'] = true;
        $this->dest = $value;

        return $this;
    }

    /**
     * Whether to skip waiting for the service worker to be activated.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function skipWaiting($value): static
    {
        $this->_usedProperties['skipWaiting'] = true;
        $this->skipWaiting = $value;

        return $this;
    }

    /**
     * The scope of the service worker.
     * @example /app/
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function scope($value): static
    {
        $this->_usedProperties['scope'] = true;
        $this->scope = $value;

        return $this;
    }

    /**
     * Whether the service worker should use the cache.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useCache($value): static
    {
        $this->_usedProperties['useCache'] = true;
        $this->useCache = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The configuration of the workbox.
     * @default {"enabled":true,"use_cdn":false,"google_fonts":{"enabled":true,"cache_prefix":null,"max_age":null,"max_entries":null},"cache_manifest":true,"version":"7.0.0","workbox_public_url":"\/workbox","workbox_import_placeholder":"\/\/WORKBOX_IMPORT_PLACEHOLDER","standard_rules_placeholder":"\/\/STANDARD_RULES_PLACEHOLDER","offline_fallback_placeholder":"\/\/OFFLINE_FALLBACK_PLACEHOLDER","widgets_placeholder":"\/\/WIDGETS_PLACEHOLDER","clear_cache":true,"image_cache":{"enabled":true,"cache_name":"images","regex":"\/\\.(ico|png|jpe?g|gif|svg|webp|bmp)$\/","max_entries":60,"max_age":31536000},"asset_cache":{"enabled":true,"cache_name":"assets","regex":"\/\\.(css|js|json|xml|txt|map|ico|png|jpe?g|gif|svg|webp|bmp)$\/","max_age":31536000},"font_cache":{"enabled":true,"cache_name":"fonts","regex":"\/\\.(ttf|eot|otf|woff2)$\/","max_entries":60,"max_age":31536000},"resource_caches":[],"background_sync":[],"image_cache_name":"images","font_cache_name":"fonts","page_cache_name":"pages","asset_cache_name":"assets","image_regex":"\/\\.(ico|png|jpe?g|gif|svg|webp|bmp)$\/","static_regex":"\/\\.(css|js|json|xml|txt|map)$\/","font_regex":"\/\\.(ttf|eot|otf|woff2)$\/","max_image_cache_entries":60,"max_image_age":31536000,"max_font_cache_entries":30,"max_font_age":31536000,"network_timeout_seconds":3,"warm_cache_urls":[]}
     * @return \Symfony\Config\Pwa\Serviceworker\WorkboxConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\WorkboxConfig : static)
     */
    public function workbox(mixed $value = []): \Symfony\Config\Pwa\Serviceworker\WorkboxConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['workbox'] = true;
            $this->workbox = $value;

            return $this;
        }

        if (!$this->workbox instanceof \Symfony\Config\Pwa\Serviceworker\WorkboxConfig) {
            $this->_usedProperties['workbox'] = true;
            $this->workbox = new \Symfony\Config\Pwa\Serviceworker\WorkboxConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "workbox()" has already been initialized. You cannot pass values the second time you call workbox().');
        }

        return $this->workbox;
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

        if (array_key_exists('dest', $value)) {
            $this->_usedProperties['dest'] = true;
            $this->dest = $value['dest'];
            unset($value['dest']);
        }

        if (array_key_exists('skip_waiting', $value)) {
            $this->_usedProperties['skipWaiting'] = true;
            $this->skipWaiting = $value['skip_waiting'];
            unset($value['skip_waiting']);
        }

        if (array_key_exists('scope', $value)) {
            $this->_usedProperties['scope'] = true;
            $this->scope = $value['scope'];
            unset($value['scope']);
        }

        if (array_key_exists('use_cache', $value)) {
            $this->_usedProperties['useCache'] = true;
            $this->useCache = $value['use_cache'];
            unset($value['use_cache']);
        }

        if (array_key_exists('workbox', $value)) {
            $this->_usedProperties['workbox'] = true;
            $this->workbox = \is_array($value['workbox']) ? new \Symfony\Config\Pwa\Serviceworker\WorkboxConfig($value['workbox']) : $value['workbox'];
            unset($value['workbox']);
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
        if (isset($this->_usedProperties['dest'])) {
            $output['dest'] = $this->dest;
        }
        if (isset($this->_usedProperties['skipWaiting'])) {
            $output['skip_waiting'] = $this->skipWaiting;
        }
        if (isset($this->_usedProperties['scope'])) {
            $output['scope'] = $this->scope;
        }
        if (isset($this->_usedProperties['useCache'])) {
            $output['use_cache'] = $this->useCache;
        }
        if (isset($this->_usedProperties['workbox'])) {
            $output['workbox'] = $this->workbox instanceof \Symfony\Config\Pwa\Serviceworker\WorkboxConfig ? $this->workbox->toArray() : $this->workbox;
        }

        return $output;
    }

}
