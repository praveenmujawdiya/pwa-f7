<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BizkitVersioning'.\DIRECTORY_SEPARATOR.'VcsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BizkitVersioningConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $parameterPrefix;
    private $strategy;
    private $filename;
    private $filepath;
    private $format;
    private $vcs;
    private $_usedProperties = [];

    /**
     * The prefix added to the version parameters.
     * @example my_app
     * @default 'application'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parameterPrefix($value): static
    {
        $this->_usedProperties['parameterPrefix'] = true;
        $this->parameterPrefix = $value;

        return $this;
    }

    /**
     * The versioning strategy used.
     * @default 'incrementing'
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
     * The name of the file containing the version information.
     * @default 'version'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filename($value): static
    {
        $this->_usedProperties['filename'] = true;
        $this->filename = $value;

        return $this;
    }

    /**
     * The path to the file containing the version information.
     * @default '%kernel.project_dir%/config'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filepath($value): static
    {
        $this->_usedProperties['filepath'] = true;
        $this->filepath = $value;

        return $this;
    }

    /**
     * The format used for the version file.
     * @default 'yaml'
     * @param ParamConfigurator|'yaml'|'xml' $value
     * @return $this
     */
    public function format($value): static
    {
        $this->_usedProperties['format'] = true;
        $this->format = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Configuration for the VCS integration,
    set to false to disable the integration.
     * @default {"handler":"git","commit_message":"Update application version to %s","tagging_mode":"ask","tag_message":"Update application version to %s","name":null,"email":null,"path_to_executable":null}
     * @return \Symfony\Config\BizkitVersioning\VcsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\BizkitVersioning\VcsConfig : static)
     */
    public function vcs(mixed $value = []): \Symfony\Config\BizkitVersioning\VcsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['vcs'] = true;
            $this->vcs = $value;

            return $this;
        }

        if (!$this->vcs instanceof \Symfony\Config\BizkitVersioning\VcsConfig) {
            $this->_usedProperties['vcs'] = true;
            $this->vcs = new \Symfony\Config\BizkitVersioning\VcsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "vcs()" has already been initialized. You cannot pass values the second time you call vcs().');
        }

        return $this->vcs;
    }

    public function getExtensionAlias(): string
    {
        return 'bizkit_versioning';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('parameter_prefix', $value)) {
            $this->_usedProperties['parameterPrefix'] = true;
            $this->parameterPrefix = $value['parameter_prefix'];
            unset($value['parameter_prefix']);
        }

        if (array_key_exists('strategy', $value)) {
            $this->_usedProperties['strategy'] = true;
            $this->strategy = $value['strategy'];
            unset($value['strategy']);
        }

        if (array_key_exists('filename', $value)) {
            $this->_usedProperties['filename'] = true;
            $this->filename = $value['filename'];
            unset($value['filename']);
        }

        if (array_key_exists('filepath', $value)) {
            $this->_usedProperties['filepath'] = true;
            $this->filepath = $value['filepath'];
            unset($value['filepath']);
        }

        if (array_key_exists('format', $value)) {
            $this->_usedProperties['format'] = true;
            $this->format = $value['format'];
            unset($value['format']);
        }

        if (array_key_exists('vcs', $value)) {
            $this->_usedProperties['vcs'] = true;
            $this->vcs = \is_array($value['vcs']) ? new \Symfony\Config\BizkitVersioning\VcsConfig($value['vcs']) : $value['vcs'];
            unset($value['vcs']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['parameterPrefix'])) {
            $output['parameter_prefix'] = $this->parameterPrefix;
        }
        if (isset($this->_usedProperties['strategy'])) {
            $output['strategy'] = $this->strategy;
        }
        if (isset($this->_usedProperties['filename'])) {
            $output['filename'] = $this->filename;
        }
        if (isset($this->_usedProperties['filepath'])) {
            $output['filepath'] = $this->filepath;
        }
        if (isset($this->_usedProperties['format'])) {
            $output['format'] = $this->format;
        }
        if (isset($this->_usedProperties['vcs'])) {
            $output['vcs'] = $this->vcs instanceof \Symfony\Config\BizkitVersioning\VcsConfig ? $this->vcs->toArray() : $this->vcs;
        }

        return $output;
    }

}
