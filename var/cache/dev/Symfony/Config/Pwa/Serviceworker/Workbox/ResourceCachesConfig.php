<?php

namespace Symfony\Config\Pwa\Serviceworker\Workbox;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ResourceCachesConfig'.\DIRECTORY_SEPARATOR.'PreloadUrlsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResourceCachesConfig 
{
    private $matchCallback;
    private $cacheName;
    private $networkTimeout;
    private $strategy;
    private $maxEntries;
    private $maxAge;
    private $broadcast;
    private $rangeRequests;
    private $cacheableResponseHeaders;
    private $cacheableResponseStatuses;
    private $broadcastHeaders;
    private $preloadUrls;
    private $_usedProperties = [];

    /**
     * The regex or callback function to match the URLs.
     * @example /^\/api\//
     * @example ({url}) url.pathname === "/api/"
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function matchCallback($value): static
    {
        $this->_usedProperties['matchCallback'] = true;
        $this->matchCallback = $value;

        return $this;
    }

    /**
     * The name of the page cache.
     * @example pages
     * @example api
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheName($value): static
    {
        $this->_usedProperties['cacheName'] = true;
        $this->cacheName = $value;

        return $this;
    }

    /**
     * The network timeout in seconds before cache is called (for "NetworkFirst" and "NetworkOnly" strategies).
     * @example 1
     * @example 2
     * @example 5
     * @default 3
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function networkTimeout($value): static
    {
        $this->_usedProperties['networkTimeout'] = true;
        $this->networkTimeout = $value;

        return $this;
    }

    /**
     * The caching strategy. Only "NetworkFirst", "CacheFirst" and "StaleWhileRevalidate" are supported.
     * @example NetworkFirst
     * @example StaleWhileRevalidate
     * @example CacheFirst
     * @default 'NetworkFirst'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function strategy($value): static
    {
        $this->_usedProperties['strategy'] = true;
        $this->strategy = $value;

        return $this;
    }

    /**
     * The maximum number of entries in the cache (for "CacheFirst" and "NetworkFirst" strategy only).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxEntries($value): static
    {
        $this->_usedProperties['maxEntries'] = true;
        $this->maxEntries = $value;

        return $this;
    }

    /**
     * The maximum number of seconds before the cache is invalidated (for "CacheFirst" and "NetWorkFirst" strategy only).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxAge($value): static
    {
        $this->_usedProperties['maxAge'] = true;
        $this->maxAge = $value;

        return $this;
    }

    /**
     * Whether to broadcast the cache update events (for "StaleWhileRevalidate" strategy only).
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function broadcast($value): static
    {
        $this->_usedProperties['broadcast'] = true;
        $this->broadcast = $value;

        return $this;
    }

    /**
     * Whether to support range requests (for "CacheFirst" strategy only).
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rangeRequests($value): static
    {
        $this->_usedProperties['rangeRequests'] = true;
        $this->rangeRequests = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function cacheableResponseHeaders(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['cacheableResponseHeaders'] = true;
        $this->cacheableResponseHeaders = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|int> $value
     *
     * @return $this
     */
    public function cacheableResponseStatuses(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['cacheableResponseStatuses'] = true;
        $this->cacheableResponseStatuses = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function broadcastHeaders(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['broadcastHeaders'] = true;
        $this->broadcastHeaders = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URLs to warm the cache. The URLs shall be served by the application.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig\PreloadUrlsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig\PreloadUrlsConfig : static)
     */
    public function preloadUrls(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig\PreloadUrlsConfig|static
    {
        $this->_usedProperties['preloadUrls'] = true;
        if (!\is_array($value)) {
            $this->preloadUrls[] = $value;

            return $this;
        }

        return $this->preloadUrls[] = new \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig\PreloadUrlsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('match_callback', $value)) {
            $this->_usedProperties['matchCallback'] = true;
            $this->matchCallback = $value['match_callback'];
            unset($value['match_callback']);
        }

        if (array_key_exists('cache_name', $value)) {
            $this->_usedProperties['cacheName'] = true;
            $this->cacheName = $value['cache_name'];
            unset($value['cache_name']);
        }

        if (array_key_exists('network_timeout', $value)) {
            $this->_usedProperties['networkTimeout'] = true;
            $this->networkTimeout = $value['network_timeout'];
            unset($value['network_timeout']);
        }

        if (array_key_exists('strategy', $value)) {
            $this->_usedProperties['strategy'] = true;
            $this->strategy = $value['strategy'];
            unset($value['strategy']);
        }

        if (array_key_exists('max_entries', $value)) {
            $this->_usedProperties['maxEntries'] = true;
            $this->maxEntries = $value['max_entries'];
            unset($value['max_entries']);
        }

        if (array_key_exists('max_age', $value)) {
            $this->_usedProperties['maxAge'] = true;
            $this->maxAge = $value['max_age'];
            unset($value['max_age']);
        }

        if (array_key_exists('broadcast', $value)) {
            $this->_usedProperties['broadcast'] = true;
            $this->broadcast = $value['broadcast'];
            unset($value['broadcast']);
        }

        if (array_key_exists('range_requests', $value)) {
            $this->_usedProperties['rangeRequests'] = true;
            $this->rangeRequests = $value['range_requests'];
            unset($value['range_requests']);
        }

        if (array_key_exists('cacheable_response_headers', $value)) {
            $this->_usedProperties['cacheableResponseHeaders'] = true;
            $this->cacheableResponseHeaders = $value['cacheable_response_headers'];
            unset($value['cacheable_response_headers']);
        }

        if (array_key_exists('cacheable_response_statuses', $value)) {
            $this->_usedProperties['cacheableResponseStatuses'] = true;
            $this->cacheableResponseStatuses = $value['cacheable_response_statuses'];
            unset($value['cacheable_response_statuses']);
        }

        if (array_key_exists('broadcast_headers', $value)) {
            $this->_usedProperties['broadcastHeaders'] = true;
            $this->broadcastHeaders = $value['broadcast_headers'];
            unset($value['broadcast_headers']);
        }

        if (array_key_exists('preload_urls', $value)) {
            $this->_usedProperties['preloadUrls'] = true;
            $this->preloadUrls = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig\PreloadUrlsConfig($v) : $v, $value['preload_urls']);
            unset($value['preload_urls']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['matchCallback'])) {
            $output['match_callback'] = $this->matchCallback;
        }
        if (isset($this->_usedProperties['cacheName'])) {
            $output['cache_name'] = $this->cacheName;
        }
        if (isset($this->_usedProperties['networkTimeout'])) {
            $output['network_timeout'] = $this->networkTimeout;
        }
        if (isset($this->_usedProperties['strategy'])) {
            $output['strategy'] = $this->strategy;
        }
        if (isset($this->_usedProperties['maxEntries'])) {
            $output['max_entries'] = $this->maxEntries;
        }
        if (isset($this->_usedProperties['maxAge'])) {
            $output['max_age'] = $this->maxAge;
        }
        if (isset($this->_usedProperties['broadcast'])) {
            $output['broadcast'] = $this->broadcast;
        }
        if (isset($this->_usedProperties['rangeRequests'])) {
            $output['range_requests'] = $this->rangeRequests;
        }
        if (isset($this->_usedProperties['cacheableResponseHeaders'])) {
            $output['cacheable_response_headers'] = $this->cacheableResponseHeaders;
        }
        if (isset($this->_usedProperties['cacheableResponseStatuses'])) {
            $output['cacheable_response_statuses'] = $this->cacheableResponseStatuses;
        }
        if (isset($this->_usedProperties['broadcastHeaders'])) {
            $output['broadcast_headers'] = $this->broadcastHeaders;
        }
        if (isset($this->_usedProperties['preloadUrls'])) {
            $output['preload_urls'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig\PreloadUrlsConfig ? $v->toArray() : $v, $this->preloadUrls);
        }

        return $output;
    }

}
