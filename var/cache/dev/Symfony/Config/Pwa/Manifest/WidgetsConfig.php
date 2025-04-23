<?php

namespace Symfony\Config\Pwa\Manifest;

require_once __DIR__.\DIRECTORY_SEPARATOR.'WidgetsConfig'.\DIRECTORY_SEPARATOR.'IconsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WidgetsConfig'.\DIRECTORY_SEPARATOR.'ScreenshotsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WidgetsConfig'.\DIRECTORY_SEPARATOR.'MsAcTemplateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WidgetsConfig'.\DIRECTORY_SEPARATOR.'DataConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WidgetsConfig 
{
    private $name;
    private $shortName;
    private $description;
    private $icons;
    private $screenshots;
    private $tag;
    private $template;
    private $msAcTemplate;
    private $data;
    private $type;
    private $auth;
    private $update;
    private $multiple;
    private $_usedProperties = [];

    /**
     * The title of the widget, presented to users.
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
     * An alternative short version of the name.
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
     * The description of the widget.
     * @example My awesome widget
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
     * An array of icons to be used for the widget. If missing, the icons manifest member is used instead. Icons larger than 1024x1024 are ignored.
     * @return \Symfony\Config\Pwa\Manifest\WidgetsConfig\IconsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\WidgetsConfig\IconsConfig : static)
     */
    public function icons(array $value = []): \Symfony\Config\Pwa\Manifest\WidgetsConfig\IconsConfig|static
    {
        $this->_usedProperties['icons'] = true;
        if (!\is_array($value)) {
            $this->icons[] = $value;

            return $this;
        }

        return $this->icons[] = new \Symfony\Config\Pwa\Manifest\WidgetsConfig\IconsConfig($value);
    }

    /**
     * @template TValue
     * @param TValue $value
     * The screenshots of the widget
     * @return \Symfony\Config\Pwa\Manifest\WidgetsConfig\ScreenshotsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\WidgetsConfig\ScreenshotsConfig : static)
     */
    public function screenshots(array $value = []): \Symfony\Config\Pwa\Manifest\WidgetsConfig\ScreenshotsConfig|static
    {
        $this->_usedProperties['screenshots'] = true;
        if (!\is_array($value)) {
            $this->screenshots[] = $value;

            return $this;
        }

        return $this->screenshots[] = new \Symfony\Config\Pwa\Manifest\WidgetsConfig\ScreenshotsConfig($value);
    }

    /**
     * A string used to reference the widget in the PWA service worker.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tag($value): static
    {
        $this->_usedProperties['tag'] = true;
        $this->tag = $value;

        return $this;
    }

    /**
     * The template to use to display the widget in the operating system widgets dashboard. Note: this property is currently only informational and not used. See ms_ac_template below.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): static
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the custom Adaptive Cards template to use to display the widget in the operating system widgets dashboard.
     * @return \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig : static)
     */
    public function msAcTemplate(string|array $value = []): \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['msAcTemplate'] = true;
            $this->msAcTemplate = $value;

            return $this;
        }

        if (!$this->msAcTemplate instanceof \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig) {
            $this->_usedProperties['msAcTemplate'] = true;
            $this->msAcTemplate = new \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "msAcTemplate()" has already been initialized. You cannot pass values the second time you call msAcTemplate().');
        }

        return $this->msAcTemplate;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL where the data to fill the template with can be found. If present, this URL is required to return valid JSON.
     * @return \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig : static)
     */
    public function data(string|array $value = []): \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['data'] = true;
            $this->data = $value;

            return $this;
        }

        if (!$this->data instanceof \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig) {
            $this->_usedProperties['data'] = true;
            $this->data = new \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "data()" has already been initialized. You cannot pass values the second time you call data().');
        }

        return $this->data;
    }

    /**
     * The MIME type for the widget data.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * A boolean indicating if the widget requires authentication.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function auth($value): static
    {
        $this->_usedProperties['auth'] = true;
        $this->auth = $value;

        return $this;
    }

    /**
     * The frequency, in seconds, at which the widget will be updated. Code in your service worker must perform the updating; the widget is not updated automatically. See Access widget instances at runtime.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function update($value): static
    {
        $this->_usedProperties['update'] = true;
        $this->update = $value;

        return $this;
    }

    /**
     * A boolean indicating whether to allow multiple instances of the widget. Defaults to true.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function multiple($value): static
    {
        $this->_usedProperties['multiple'] = true;
        $this->multiple = $value;

        return $this;
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

        if (array_key_exists('icons', $value)) {
            $this->_usedProperties['icons'] = true;
            $this->icons = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Manifest\WidgetsConfig\IconsConfig($v) : $v, $value['icons']);
            unset($value['icons']);
        }

        if (array_key_exists('screenshots', $value)) {
            $this->_usedProperties['screenshots'] = true;
            $this->screenshots = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Manifest\WidgetsConfig\ScreenshotsConfig($v) : $v, $value['screenshots']);
            unset($value['screenshots']);
        }

        if (array_key_exists('tag', $value)) {
            $this->_usedProperties['tag'] = true;
            $this->tag = $value['tag'];
            unset($value['tag']);
        }

        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = $value['template'];
            unset($value['template']);
        }

        if (array_key_exists('ms_ac_template', $value)) {
            $this->_usedProperties['msAcTemplate'] = true;
            $this->msAcTemplate = \is_array($value['ms_ac_template']) ? new \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig($value['ms_ac_template']) : $value['ms_ac_template'];
            unset($value['ms_ac_template']);
        }

        if (array_key_exists('data', $value)) {
            $this->_usedProperties['data'] = true;
            $this->data = \is_array($value['data']) ? new \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig($value['data']) : $value['data'];
            unset($value['data']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('auth', $value)) {
            $this->_usedProperties['auth'] = true;
            $this->auth = $value['auth'];
            unset($value['auth']);
        }

        if (array_key_exists('update', $value)) {
            $this->_usedProperties['update'] = true;
            $this->update = $value['update'];
            unset($value['update']);
        }

        if (array_key_exists('multiple', $value)) {
            $this->_usedProperties['multiple'] = true;
            $this->multiple = $value['multiple'];
            unset($value['multiple']);
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
        if (isset($this->_usedProperties['icons'])) {
            $output['icons'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Manifest\WidgetsConfig\IconsConfig ? $v->toArray() : $v, $this->icons);
        }
        if (isset($this->_usedProperties['screenshots'])) {
            $output['screenshots'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Manifest\WidgetsConfig\ScreenshotsConfig ? $v->toArray() : $v, $this->screenshots);
        }
        if (isset($this->_usedProperties['tag'])) {
            $output['tag'] = $this->tag;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }
        if (isset($this->_usedProperties['msAcTemplate'])) {
            $output['ms_ac_template'] = $this->msAcTemplate instanceof \Symfony\Config\Pwa\Manifest\WidgetsConfig\MsAcTemplateConfig ? $this->msAcTemplate->toArray() : $this->msAcTemplate;
        }
        if (isset($this->_usedProperties['data'])) {
            $output['data'] = $this->data instanceof \Symfony\Config\Pwa\Manifest\WidgetsConfig\DataConfig ? $this->data->toArray() : $this->data;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['auth'])) {
            $output['auth'] = $this->auth;
        }
        if (isset($this->_usedProperties['update'])) {
            $output['update'] = $this->update;
        }
        if (isset($this->_usedProperties['multiple'])) {
            $output['multiple'] = $this->multiple;
        }

        return $output;
    }

}
