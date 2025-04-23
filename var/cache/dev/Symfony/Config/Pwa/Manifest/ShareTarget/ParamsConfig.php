<?php

namespace Symfony\Config\Pwa\Manifest\ShareTarget;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ParamsConfig 
{
    private $title;
    private $text;
    private $url;
    private $files;
    private $_usedProperties = [];

    /**
     * The title of the share target.
     * @example name
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): static
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;

        return $this;
    }

    /**
     * The text of the share target.
     * @example description
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function text($value): static
    {
        $this->_usedProperties['text'] = true;
        $this->text = $value;

        return $this;
    }

    /**
     * The URL of the share target.
     * @example link
     * @default null
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
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function files(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['files'] = true;
        $this->files = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }

        if (array_key_exists('text', $value)) {
            $this->_usedProperties['text'] = true;
            $this->text = $value['text'];
            unset($value['text']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('files', $value)) {
            $this->_usedProperties['files'] = true;
            $this->files = $value['files'];
            unset($value['files']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['text'])) {
            $output['text'] = $this->text;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['files'])) {
            $output['files'] = $this->files;
        }

        return $output;
    }

}
