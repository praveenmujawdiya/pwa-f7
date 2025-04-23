<?php

namespace Symfony\Config\Pwa\Serviceworker\Workbox;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BackgroundSyncConfig 
{
    private $queueName;
    private $matchCallback;
    private $errorOn4xx;
    private $errorOn5xx;
    private $expectedStatusCodes;
    private $expectRedirect;
    private $method;
    private $broadcastChannel;
    private $maxRetentionTime;
    private $forceSyncFallback;
    private $_usedProperties = [];

    /**
     * The name of the queue.
     * @example api-requests
     * @example image-uploads
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function queueName($value): static
    {
        $this->_usedProperties['queueName'] = true;
        $this->queueName = $value;

        return $this;
    }

    /**
     * The regex or callback function to match the URLs.
     * @example /\/api\//
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
     * Whether to retry the request on 4xx errors.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function errorOn4xx($value): static
    {
        $this->_usedProperties['errorOn4xx'] = true;
        $this->errorOn4xx = $value;

        return $this;
    }

    /**
     * Whether to retry the request on 5xx errors.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function errorOn5xx($value): static
    {
        $this->_usedProperties['errorOn5xx'] = true;
        $this->errorOn5xx = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|int> $value
     *
     * @return $this
     */
    public function expectedStatusCodes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['expectedStatusCodes'] = true;
        $this->expectedStatusCodes = $value;

        return $this;
    }

    /**
     * Whether to expect a redirect (JS response type should be "opaqueredirect" or the "redirected" property is "true").
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function expectRedirect($value): static
    {
        $this->_usedProperties['expectRedirect'] = true;
        $this->expectRedirect = $value;

        return $this;
    }

    /**
     * The HTTP method.
     * @example POST
     * @example PUT
     * @example PATCH
     * @example DELETE
     * @default 'POST'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function method($value): static
    {
        $this->_usedProperties['method'] = true;
        $this->method = $value;

        return $this;
    }

    /**
     * The broadcast channel. Set null to disable.
     * @example channel-1
     * @example background-sync-events
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function broadcastChannel($value): static
    {
        $this->_usedProperties['broadcastChannel'] = true;
        $this->broadcastChannel = $value;

        return $this;
    }

    /**
     * The maximum retention time in minutes.
     * @default 1440
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxRetentionTime($value): static
    {
        $this->_usedProperties['maxRetentionTime'] = true;
        $this->maxRetentionTime = $value;

        return $this;
    }

    /**
     * If `true`, instead of attempting to use background sync events, always attempt to replay queued request at service worker startup. Most folks will not need this, unless you explicitly target a runtime like Electron that exposes the interfaces for background sync, but does not have a working implementation.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function forceSyncFallback($value): static
    {
        $this->_usedProperties['forceSyncFallback'] = true;
        $this->forceSyncFallback = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('queue_name', $value)) {
            $this->_usedProperties['queueName'] = true;
            $this->queueName = $value['queue_name'];
            unset($value['queue_name']);
        }

        if (array_key_exists('match_callback', $value)) {
            $this->_usedProperties['matchCallback'] = true;
            $this->matchCallback = $value['match_callback'];
            unset($value['match_callback']);
        }

        if (array_key_exists('error_on_4xx', $value)) {
            $this->_usedProperties['errorOn4xx'] = true;
            $this->errorOn4xx = $value['error_on_4xx'];
            unset($value['error_on_4xx']);
        }

        if (array_key_exists('error_on_5xx', $value)) {
            $this->_usedProperties['errorOn5xx'] = true;
            $this->errorOn5xx = $value['error_on_5xx'];
            unset($value['error_on_5xx']);
        }

        if (array_key_exists('expected_status_codes', $value)) {
            $this->_usedProperties['expectedStatusCodes'] = true;
            $this->expectedStatusCodes = $value['expected_status_codes'];
            unset($value['expected_status_codes']);
        }

        if (array_key_exists('expect_redirect', $value)) {
            $this->_usedProperties['expectRedirect'] = true;
            $this->expectRedirect = $value['expect_redirect'];
            unset($value['expect_redirect']);
        }

        if (array_key_exists('method', $value)) {
            $this->_usedProperties['method'] = true;
            $this->method = $value['method'];
            unset($value['method']);
        }

        if (array_key_exists('broadcast_channel', $value)) {
            $this->_usedProperties['broadcastChannel'] = true;
            $this->broadcastChannel = $value['broadcast_channel'];
            unset($value['broadcast_channel']);
        }

        if (array_key_exists('max_retention_time', $value)) {
            $this->_usedProperties['maxRetentionTime'] = true;
            $this->maxRetentionTime = $value['max_retention_time'];
            unset($value['max_retention_time']);
        }

        if (array_key_exists('force_sync_fallback', $value)) {
            $this->_usedProperties['forceSyncFallback'] = true;
            $this->forceSyncFallback = $value['force_sync_fallback'];
            unset($value['force_sync_fallback']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['queueName'])) {
            $output['queue_name'] = $this->queueName;
        }
        if (isset($this->_usedProperties['matchCallback'])) {
            $output['match_callback'] = $this->matchCallback;
        }
        if (isset($this->_usedProperties['errorOn4xx'])) {
            $output['error_on_4xx'] = $this->errorOn4xx;
        }
        if (isset($this->_usedProperties['errorOn5xx'])) {
            $output['error_on_5xx'] = $this->errorOn5xx;
        }
        if (isset($this->_usedProperties['expectedStatusCodes'])) {
            $output['expected_status_codes'] = $this->expectedStatusCodes;
        }
        if (isset($this->_usedProperties['expectRedirect'])) {
            $output['expect_redirect'] = $this->expectRedirect;
        }
        if (isset($this->_usedProperties['method'])) {
            $output['method'] = $this->method;
        }
        if (isset($this->_usedProperties['broadcastChannel'])) {
            $output['broadcast_channel'] = $this->broadcastChannel;
        }
        if (isset($this->_usedProperties['maxRetentionTime'])) {
            $output['max_retention_time'] = $this->maxRetentionTime;
        }
        if (isset($this->_usedProperties['forceSyncFallback'])) {
            $output['force_sync_fallback'] = $this->forceSyncFallback;
        }

        return $output;
    }

}
