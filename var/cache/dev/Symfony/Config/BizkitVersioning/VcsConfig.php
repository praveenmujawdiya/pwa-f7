<?php

namespace Symfony\Config\BizkitVersioning;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VcsConfig 
{
    private $handler;
    private $commitMessage;
    private $taggingMode;
    private $tagMessage;
    private $name;
    private $email;
    private $pathToExecutable;
    private $_usedProperties = [];

    /**
     * The handler used for the VCS integration,
    set to null to disable the integration.
     * @default 'git'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function handler($value): static
    {
        $this->_usedProperties['handler'] = true;
        $this->handler = $value;

        return $this;
    }

    /**
     * The message to use for the VCS commit.
     * @default 'Update application version to %s'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function commitMessage($value): static
    {
        $this->_usedProperties['commitMessage'] = true;
        $this->commitMessage = $value;

        return $this;
    }

    /**
     * The mode for applying tags to version commits:
    - 'always': automatically add a tag without prompting
    - 'never': do not add a tag
    - 'ask': prompt before tagging when incrementing versions
     * @default 'ask'
     * @param ParamConfigurator|'always'|'never'|'ask' $value
     * @return $this
     */
    public function taggingMode($value): static
    {
        $this->_usedProperties['taggingMode'] = true;
        $this->taggingMode = $value;

        return $this;
    }

    /**
     * The message to use for the VCS tag.
     * @default 'Update application version to %s'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tagMessage($value): static
    {
        $this->_usedProperties['tagMessage'] = true;
        $this->tagMessage = $value;

        return $this;
    }

    /**
     * The name used for the VCS commit information,
    set to null to use the default VCS configuration.
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
     * The email used for the VCS commit information,
    set to null to use the default VCS configuration.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function email($value): static
    {
        $this->_usedProperties['email'] = true;
        $this->email = $value;

        return $this;
    }

    /**
     * The path to the VCS executable,
    set to null for autodiscovery.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathToExecutable($value): static
    {
        $this->_usedProperties['pathToExecutable'] = true;
        $this->pathToExecutable = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('handler', $value)) {
            $this->_usedProperties['handler'] = true;
            $this->handler = $value['handler'];
            unset($value['handler']);
        }

        if (array_key_exists('commit_message', $value)) {
            $this->_usedProperties['commitMessage'] = true;
            $this->commitMessage = $value['commit_message'];
            unset($value['commit_message']);
        }

        if (array_key_exists('tagging_mode', $value)) {
            $this->_usedProperties['taggingMode'] = true;
            $this->taggingMode = $value['tagging_mode'];
            unset($value['tagging_mode']);
        }

        if (array_key_exists('tag_message', $value)) {
            $this->_usedProperties['tagMessage'] = true;
            $this->tagMessage = $value['tag_message'];
            unset($value['tag_message']);
        }

        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('email', $value)) {
            $this->_usedProperties['email'] = true;
            $this->email = $value['email'];
            unset($value['email']);
        }

        if (array_key_exists('path_to_executable', $value)) {
            $this->_usedProperties['pathToExecutable'] = true;
            $this->pathToExecutable = $value['path_to_executable'];
            unset($value['path_to_executable']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['handler'])) {
            $output['handler'] = $this->handler;
        }
        if (isset($this->_usedProperties['commitMessage'])) {
            $output['commit_message'] = $this->commitMessage;
        }
        if (isset($this->_usedProperties['taggingMode'])) {
            $output['tagging_mode'] = $this->taggingMode;
        }
        if (isset($this->_usedProperties['tagMessage'])) {
            $output['tag_message'] = $this->tagMessage;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email;
        }
        if (isset($this->_usedProperties['pathToExecutable'])) {
            $output['path_to_executable'] = $this->pathToExecutable;
        }

        return $output;
    }

}
