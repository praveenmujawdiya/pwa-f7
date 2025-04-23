<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class InspectorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabled;
    private $url;
    private $ingestionKey;
    private $unhandledExceptions;
    private $messenger;
    private $query;
    private $queryBindings;
    private $templates;
    private $user;
    private $transport;
    private $ignoreRoutes;
    private $ignoreCommands;
    private $ignoreMessages;
    private $_usedProperties = [];

    /**
     * @default true
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
     * @default 'https://ingest.inspector.dev'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): static
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ingestionKey($value): static
    {
        $this->_usedProperties['ingestionKey'] = true;
        $this->ingestionKey = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function unhandledExceptions($value): static
    {
        $this->_usedProperties['unhandledExceptions'] = true;
        $this->unhandledExceptions = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function messenger($value): static
    {
        $this->_usedProperties['messenger'] = true;
        $this->messenger = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function query($value): static
    {
        $this->_usedProperties['query'] = true;
        $this->query = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function queryBindings($value): static
    {
        $this->_usedProperties['queryBindings'] = true;
        $this->queryBindings = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function templates($value): static
    {
        $this->_usedProperties['templates'] = true;
        $this->templates = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function user($value): static
    {
        $this->_usedProperties['user'] = true;
        $this->user = $value;

        return $this;
    }

    /**
     * @default 'async'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function transport($value): static
    {
        $this->_usedProperties['transport'] = true;
        $this->transport = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoreRoutes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoreRoutes'] = true;
        $this->ignoreRoutes = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoreCommands(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoreCommands'] = true;
        $this->ignoreCommands = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoreMessages(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoreMessages'] = true;
        $this->ignoreMessages = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'inspector';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('ingestion_key', $value)) {
            $this->_usedProperties['ingestionKey'] = true;
            $this->ingestionKey = $value['ingestion_key'];
            unset($value['ingestion_key']);
        }

        if (array_key_exists('unhandled_exceptions', $value)) {
            $this->_usedProperties['unhandledExceptions'] = true;
            $this->unhandledExceptions = $value['unhandled_exceptions'];
            unset($value['unhandled_exceptions']);
        }

        if (array_key_exists('messenger', $value)) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = $value['messenger'];
            unset($value['messenger']);
        }

        if (array_key_exists('query', $value)) {
            $this->_usedProperties['query'] = true;
            $this->query = $value['query'];
            unset($value['query']);
        }

        if (array_key_exists('query_bindings', $value)) {
            $this->_usedProperties['queryBindings'] = true;
            $this->queryBindings = $value['query_bindings'];
            unset($value['query_bindings']);
        }

        if (array_key_exists('templates', $value)) {
            $this->_usedProperties['templates'] = true;
            $this->templates = $value['templates'];
            unset($value['templates']);
        }

        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = $value['user'];
            unset($value['user']);
        }

        if (array_key_exists('transport', $value)) {
            $this->_usedProperties['transport'] = true;
            $this->transport = $value['transport'];
            unset($value['transport']);
        }

        if (array_key_exists('ignore_routes', $value)) {
            $this->_usedProperties['ignoreRoutes'] = true;
            $this->ignoreRoutes = $value['ignore_routes'];
            unset($value['ignore_routes']);
        }

        if (array_key_exists('ignore_commands', $value)) {
            $this->_usedProperties['ignoreCommands'] = true;
            $this->ignoreCommands = $value['ignore_commands'];
            unset($value['ignore_commands']);
        }

        if (array_key_exists('ignore_messages', $value)) {
            $this->_usedProperties['ignoreMessages'] = true;
            $this->ignoreMessages = $value['ignore_messages'];
            unset($value['ignore_messages']);
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
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['ingestionKey'])) {
            $output['ingestion_key'] = $this->ingestionKey;
        }
        if (isset($this->_usedProperties['unhandledExceptions'])) {
            $output['unhandled_exceptions'] = $this->unhandledExceptions;
        }
        if (isset($this->_usedProperties['messenger'])) {
            $output['messenger'] = $this->messenger;
        }
        if (isset($this->_usedProperties['query'])) {
            $output['query'] = $this->query;
        }
        if (isset($this->_usedProperties['queryBindings'])) {
            $output['query_bindings'] = $this->queryBindings;
        }
        if (isset($this->_usedProperties['templates'])) {
            $output['templates'] = $this->templates;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user;
        }
        if (isset($this->_usedProperties['transport'])) {
            $output['transport'] = $this->transport;
        }
        if (isset($this->_usedProperties['ignoreRoutes'])) {
            $output['ignore_routes'] = $this->ignoreRoutes;
        }
        if (isset($this->_usedProperties['ignoreCommands'])) {
            $output['ignore_commands'] = $this->ignoreCommands;
        }
        if (isset($this->_usedProperties['ignoreMessages'])) {
            $output['ignore_messages'] = $this->ignoreMessages;
        }

        return $output;
    }

}
