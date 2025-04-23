<?php

namespace Symfony\Config\Pwa;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'EdgeSidePanelConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'ScopeExtensionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'IconsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'ScreenshotsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'FileHandlersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'LaunchHandlerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'ProtocolHandlersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'RelatedApplicationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'ShortcutsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'ShareTargetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Manifest'.\DIRECTORY_SEPARATOR.'WidgetsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ManifestConfig 
{
    private $enabled;
    private $publicUrl;
    private $useCredentials;
    private $backgroundColor;
    private $categories;
    private $description;
    private $display;
    private $displayOverride;
    private $id;
    private $orientation;
    private $dir;
    private $lang;
    private $name;
    private $shortName;
    private $scope;
    private $startUrl;
    private $themeColor;
    private $darkThemeColor;
    private $edgeSidePanel;
    private $iarcRatingId;
    private $scopeExtensions;
    private $handleLinks;
    private $icons;
    private $screenshots;
    private $fileHandlers;
    private $launchHandler;
    private $protocolHandlers;
    private $preferRelatedApplications;
    private $relatedApplications;
    private $shortcuts;
    private $shareTarget;
    private $widgets;
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
     * The public URL of the manifest file.
     * @example /site.manifest
     * @example /site.{locale}.webmanifest
     * @default '/site.webmanifest'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function publicUrl($value): static
    {
        $this->_usedProperties['publicUrl'] = true;
        $this->publicUrl = $value;

        return $this;
    }

    /**
     * Indicates whether the manifest should be fetched with credentials.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useCredentials($value): static
    {
        $this->_usedProperties['useCredentials'] = true;
        $this->useCredentials = $value;

        return $this;
    }

    /**
     * The background color of the application. It  should match the background-color CSS property in the sites stylesheet for a smooth transition between launching the web application and loading the site's content.
     * @example red
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function backgroundColor($value): static
    {
        $this->_usedProperties['backgroundColor'] = true;
        $this->backgroundColor = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function categories(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['categories'] = true;
        $this->categories = $value;

        return $this;
    }

    /**
     * The description of the application.
     * @example My awesome application
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
     * The display mode of the application.
     * @example standalone
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function display($value): static
    {
        $this->_usedProperties['display'] = true;
        $this->display = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function displayOverride(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['displayOverride'] = true;
        $this->displayOverride = $value;

        return $this;
    }

    /**
     * A string that represents the identity of the web application.
     * @example ?homescreen=1
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    /**
     * The orientation of the application.
     * @example portrait-primary
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function orientation($value): static
    {
        $this->_usedProperties['orientation'] = true;
        $this->orientation = $value;

        return $this;
    }

    /**
     * The direction of the application.
     * @example rtl
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dir($value): static
    {
        $this->_usedProperties['dir'] = true;
        $this->dir = $value;

        return $this;
    }

    /**
     * The language of the application.
     * @example ar
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lang($value): static
    {
        $this->_usedProperties['lang'] = true;
        $this->lang = $value;

        return $this;
    }

    /**
     * The name of the application.
     * @example My awesome application
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
     * The short name of the application.
     * @example awesome_app
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
     * The scope of the application.
     * @example /app/
     * @default null
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
     * The start URL of the application.
     * @example https://example.com
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function startUrl($value): static
    {
        $this->_usedProperties['startUrl'] = true;
        $this->startUrl = $value;

        return $this;
    }

    /**
     * The theme color of the application. If a dark theme color is specified, the theme color will be used for the light theme.
     * @example red
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function themeColor($value): static
    {
        $this->_usedProperties['themeColor'] = true;
        $this->themeColor = $value;

        return $this;
    }

    /**
     * The dark theme color of the application.
     * @example red
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function darkThemeColor($value): static
    {
        $this->_usedProperties['darkThemeColor'] = true;
        $this->darkThemeColor = $value;

        return $this;
    }

    /**
     * Specifies whether or not your app supports the side panel view in Microsoft Edge.
    */
    public function edgeSidePanel(array $value = []): \Symfony\Config\Pwa\Manifest\EdgeSidePanelConfig
    {
        if (null === $this->edgeSidePanel) {
            $this->_usedProperties['edgeSidePanel'] = true;
            $this->edgeSidePanel = new \Symfony\Config\Pwa\Manifest\EdgeSidePanelConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "edgeSidePanel()" has already been initialized. You cannot pass values the second time you call edgeSidePanel().');
        }

        return $this->edgeSidePanel;
    }

    /**
     * Specifies the International Age Rating Coalition (IARC) rating ID for the app. See https://www.globalratings.com/how-iarc-works.aspx for more information.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iarcRatingId($value): static
    {
        $this->_usedProperties['iarcRatingId'] = true;
        $this->iarcRatingId = $value;

        return $this;
    }

    /**
     * Specifies a list of origin patterns to associate with. This allows for your app to control multiple subdomains and top-level domains as a single entity.
    */
    public function scopeExtensions(array $value = []): \Symfony\Config\Pwa\Manifest\ScopeExtensionsConfig
    {
        $this->_usedProperties['scopeExtensions'] = true;

        return $this->scopeExtensions[] = new \Symfony\Config\Pwa\Manifest\ScopeExtensionsConfig($value);
    }

    /**
     * Specifies the default link handling for the web app.
     * @example auto
     * @example preferred
     * @example not-preferred
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function handleLinks($value): static
    {
        $this->_usedProperties['handleLinks'] = true;
        $this->handleLinks = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The icons of the application.
     * @return \Symfony\Config\Pwa\Manifest\IconsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\IconsConfig : static)
     */
    public function icons(array $value = []): \Symfony\Config\Pwa\Manifest\IconsConfig|static
    {
        $this->_usedProperties['icons'] = true;
        if (!\is_array($value)) {
            $this->icons[] = $value;

            return $this;
        }

        return $this->icons[] = new \Symfony\Config\Pwa\Manifest\IconsConfig($value);
    }

    /**
     * @template TValue
     * @param TValue $value
     * The screenshots of the application.
     * @return \Symfony\Config\Pwa\Manifest\ScreenshotsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\ScreenshotsConfig : static)
     */
    public function screenshots(array $value = []): \Symfony\Config\Pwa\Manifest\ScreenshotsConfig|static
    {
        $this->_usedProperties['screenshots'] = true;
        if (!\is_array($value)) {
            $this->screenshots[] = $value;

            return $this;
        }

        return $this->screenshots[] = new \Symfony\Config\Pwa\Manifest\ScreenshotsConfig($value);
    }

    /**
     * It specifies an array of objects representing the types of files an installed progressive web app (PWA) can handle.
    */
    public function fileHandlers(array $value = []): \Symfony\Config\Pwa\Manifest\FileHandlersConfig
    {
        $this->_usedProperties['fileHandlers'] = true;

        return $this->fileHandlers[] = new \Symfony\Config\Pwa\Manifest\FileHandlersConfig($value);
    }

    /**
     * The launch handler of the application.
    */
    public function launchHandler(array $value = []): \Symfony\Config\Pwa\Manifest\LaunchHandlerConfig
    {
        if (null === $this->launchHandler) {
            $this->_usedProperties['launchHandler'] = true;
            $this->launchHandler = new \Symfony\Config\Pwa\Manifest\LaunchHandlerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "launchHandler()" has already been initialized. You cannot pass values the second time you call launchHandler().');
        }

        return $this->launchHandler;
    }

    /**
     * The protocol handlers of the application.
    */
    public function protocolHandlers(array $value = []): \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig
    {
        $this->_usedProperties['protocolHandlers'] = true;

        return $this->protocolHandlers[] = new \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig($value);
    }

    /**
     * prefer related native applications (instead of this application)
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function preferRelatedApplications($value): static
    {
        $this->_usedProperties['preferRelatedApplications'] = true;
        $this->preferRelatedApplications = $value;

        return $this;
    }

    /**
     * The related applications of the application.
    */
    public function relatedApplications(array $value = []): \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig
    {
        $this->_usedProperties['relatedApplications'] = true;

        return $this->relatedApplications[] = new \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig($value);
    }

    /**
     * @template TValue
     * @param TValue $value
     * The shortcuts of the application.
     * @return \Symfony\Config\Pwa\Manifest\ShortcutsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Manifest\ShortcutsConfig : static)
     */
    public function shortcuts(array $value = []): \Symfony\Config\Pwa\Manifest\ShortcutsConfig|static
    {
        $this->_usedProperties['shortcuts'] = true;
        if (!\is_array($value)) {
            $this->shortcuts[] = $value;

            return $this;
        }

        return $this->shortcuts[] = new \Symfony\Config\Pwa\Manifest\ShortcutsConfig($value);
    }

    /**
     * The share target of the application.
    */
    public function shareTarget(array $value = []): \Symfony\Config\Pwa\Manifest\ShareTargetConfig
    {
        if (null === $this->shareTarget) {
            $this->_usedProperties['shareTarget'] = true;
            $this->shareTarget = new \Symfony\Config\Pwa\Manifest\ShareTargetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shareTarget()" has already been initialized. You cannot pass values the second time you call shareTarget().');
        }

        return $this->shareTarget;
    }

    /**
     * EXPERIMENTAL. Specifies PWA-driven widgets. See https://learn.microsoft.com/en-us/microsoft-edge/progressive-web-apps-chromium/how-to/widgets for more information
    */
    public function widgets(array $value = []): \Symfony\Config\Pwa\Manifest\WidgetsConfig
    {
        $this->_usedProperties['widgets'] = true;

        return $this->widgets[] = new \Symfony\Config\Pwa\Manifest\WidgetsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('public_url', $value)) {
            $this->_usedProperties['publicUrl'] = true;
            $this->publicUrl = $value['public_url'];
            unset($value['public_url']);
        }

        if (array_key_exists('use_credentials', $value)) {
            $this->_usedProperties['useCredentials'] = true;
            $this->useCredentials = $value['use_credentials'];
            unset($value['use_credentials']);
        }

        if (array_key_exists('background_color', $value)) {
            $this->_usedProperties['backgroundColor'] = true;
            $this->backgroundColor = $value['background_color'];
            unset($value['background_color']);
        }

        if (array_key_exists('categories', $value)) {
            $this->_usedProperties['categories'] = true;
            $this->categories = $value['categories'];
            unset($value['categories']);
        }

        if (array_key_exists('description', $value)) {
            $this->_usedProperties['description'] = true;
            $this->description = $value['description'];
            unset($value['description']);
        }

        if (array_key_exists('display', $value)) {
            $this->_usedProperties['display'] = true;
            $this->display = $value['display'];
            unset($value['display']);
        }

        if (array_key_exists('display_override', $value)) {
            $this->_usedProperties['displayOverride'] = true;
            $this->displayOverride = $value['display_override'];
            unset($value['display_override']);
        }

        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if (array_key_exists('orientation', $value)) {
            $this->_usedProperties['orientation'] = true;
            $this->orientation = $value['orientation'];
            unset($value['orientation']);
        }

        if (array_key_exists('dir', $value)) {
            $this->_usedProperties['dir'] = true;
            $this->dir = $value['dir'];
            unset($value['dir']);
        }

        if (array_key_exists('lang', $value)) {
            $this->_usedProperties['lang'] = true;
            $this->lang = $value['lang'];
            unset($value['lang']);
        }

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

        if (array_key_exists('scope', $value)) {
            $this->_usedProperties['scope'] = true;
            $this->scope = $value['scope'];
            unset($value['scope']);
        }

        if (array_key_exists('start_url', $value)) {
            $this->_usedProperties['startUrl'] = true;
            $this->startUrl = $value['start_url'];
            unset($value['start_url']);
        }

        if (array_key_exists('theme_color', $value)) {
            $this->_usedProperties['themeColor'] = true;
            $this->themeColor = $value['theme_color'];
            unset($value['theme_color']);
        }

        if (array_key_exists('dark_theme_color', $value)) {
            $this->_usedProperties['darkThemeColor'] = true;
            $this->darkThemeColor = $value['dark_theme_color'];
            unset($value['dark_theme_color']);
        }

        if (array_key_exists('edge_side_panel', $value)) {
            $this->_usedProperties['edgeSidePanel'] = true;
            $this->edgeSidePanel = new \Symfony\Config\Pwa\Manifest\EdgeSidePanelConfig($value['edge_side_panel']);
            unset($value['edge_side_panel']);
        }

        if (array_key_exists('iarc_rating_id', $value)) {
            $this->_usedProperties['iarcRatingId'] = true;
            $this->iarcRatingId = $value['iarc_rating_id'];
            unset($value['iarc_rating_id']);
        }

        if (array_key_exists('scope_extensions', $value)) {
            $this->_usedProperties['scopeExtensions'] = true;
            $this->scopeExtensions = array_map(fn ($v) => new \Symfony\Config\Pwa\Manifest\ScopeExtensionsConfig($v), $value['scope_extensions']);
            unset($value['scope_extensions']);
        }

        if (array_key_exists('handle_links', $value)) {
            $this->_usedProperties['handleLinks'] = true;
            $this->handleLinks = $value['handle_links'];
            unset($value['handle_links']);
        }

        if (array_key_exists('icons', $value)) {
            $this->_usedProperties['icons'] = true;
            $this->icons = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Manifest\IconsConfig($v) : $v, $value['icons']);
            unset($value['icons']);
        }

        if (array_key_exists('screenshots', $value)) {
            $this->_usedProperties['screenshots'] = true;
            $this->screenshots = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Manifest\ScreenshotsConfig($v) : $v, $value['screenshots']);
            unset($value['screenshots']);
        }

        if (array_key_exists('file_handlers', $value)) {
            $this->_usedProperties['fileHandlers'] = true;
            $this->fileHandlers = array_map(fn ($v) => new \Symfony\Config\Pwa\Manifest\FileHandlersConfig($v), $value['file_handlers']);
            unset($value['file_handlers']);
        }

        if (array_key_exists('launch_handler', $value)) {
            $this->_usedProperties['launchHandler'] = true;
            $this->launchHandler = new \Symfony\Config\Pwa\Manifest\LaunchHandlerConfig($value['launch_handler']);
            unset($value['launch_handler']);
        }

        if (array_key_exists('protocol_handlers', $value)) {
            $this->_usedProperties['protocolHandlers'] = true;
            $this->protocolHandlers = array_map(fn ($v) => new \Symfony\Config\Pwa\Manifest\ProtocolHandlersConfig($v), $value['protocol_handlers']);
            unset($value['protocol_handlers']);
        }

        if (array_key_exists('prefer_related_applications', $value)) {
            $this->_usedProperties['preferRelatedApplications'] = true;
            $this->preferRelatedApplications = $value['prefer_related_applications'];
            unset($value['prefer_related_applications']);
        }

        if (array_key_exists('related_applications', $value)) {
            $this->_usedProperties['relatedApplications'] = true;
            $this->relatedApplications = array_map(fn ($v) => new \Symfony\Config\Pwa\Manifest\RelatedApplicationsConfig($v), $value['related_applications']);
            unset($value['related_applications']);
        }

        if (array_key_exists('shortcuts', $value)) {
            $this->_usedProperties['shortcuts'] = true;
            $this->shortcuts = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Manifest\ShortcutsConfig($v) : $v, $value['shortcuts']);
            unset($value['shortcuts']);
        }

        if (array_key_exists('share_target', $value)) {
            $this->_usedProperties['shareTarget'] = true;
            $this->shareTarget = new \Symfony\Config\Pwa\Manifest\ShareTargetConfig($value['share_target']);
            unset($value['share_target']);
        }

        if (array_key_exists('widgets', $value)) {
            $this->_usedProperties['widgets'] = true;
            $this->widgets = array_map(fn ($v) => new \Symfony\Config\Pwa\Manifest\WidgetsConfig($v), $value['widgets']);
            unset($value['widgets']);
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
        if (isset($this->_usedProperties['publicUrl'])) {
            $output['public_url'] = $this->publicUrl;
        }
        if (isset($this->_usedProperties['useCredentials'])) {
            $output['use_credentials'] = $this->useCredentials;
        }
        if (isset($this->_usedProperties['backgroundColor'])) {
            $output['background_color'] = $this->backgroundColor;
        }
        if (isset($this->_usedProperties['categories'])) {
            $output['categories'] = $this->categories;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['display'])) {
            $output['display'] = $this->display;
        }
        if (isset($this->_usedProperties['displayOverride'])) {
            $output['display_override'] = $this->displayOverride;
        }
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['orientation'])) {
            $output['orientation'] = $this->orientation;
        }
        if (isset($this->_usedProperties['dir'])) {
            $output['dir'] = $this->dir;
        }
        if (isset($this->_usedProperties['lang'])) {
            $output['lang'] = $this->lang;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['shortName'])) {
            $output['short_name'] = $this->shortName;
        }
        if (isset($this->_usedProperties['scope'])) {
            $output['scope'] = $this->scope;
        }
        if (isset($this->_usedProperties['startUrl'])) {
            $output['start_url'] = $this->startUrl;
        }
        if (isset($this->_usedProperties['themeColor'])) {
            $output['theme_color'] = $this->themeColor;
        }
        if (isset($this->_usedProperties['darkThemeColor'])) {
            $output['dark_theme_color'] = $this->darkThemeColor;
        }
        if (isset($this->_usedProperties['edgeSidePanel'])) {
            $output['edge_side_panel'] = $this->edgeSidePanel->toArray();
        }
        if (isset($this->_usedProperties['iarcRatingId'])) {
            $output['iarc_rating_id'] = $this->iarcRatingId;
        }
        if (isset($this->_usedProperties['scopeExtensions'])) {
            $output['scope_extensions'] = array_map(fn ($v) => $v->toArray(), $this->scopeExtensions);
        }
        if (isset($this->_usedProperties['handleLinks'])) {
            $output['handle_links'] = $this->handleLinks;
        }
        if (isset($this->_usedProperties['icons'])) {
            $output['icons'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Manifest\IconsConfig ? $v->toArray() : $v, $this->icons);
        }
        if (isset($this->_usedProperties['screenshots'])) {
            $output['screenshots'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Manifest\ScreenshotsConfig ? $v->toArray() : $v, $this->screenshots);
        }
        if (isset($this->_usedProperties['fileHandlers'])) {
            $output['file_handlers'] = array_map(fn ($v) => $v->toArray(), $this->fileHandlers);
        }
        if (isset($this->_usedProperties['launchHandler'])) {
            $output['launch_handler'] = $this->launchHandler->toArray();
        }
        if (isset($this->_usedProperties['protocolHandlers'])) {
            $output['protocol_handlers'] = array_map(fn ($v) => $v->toArray(), $this->protocolHandlers);
        }
        if (isset($this->_usedProperties['preferRelatedApplications'])) {
            $output['prefer_related_applications'] = $this->preferRelatedApplications;
        }
        if (isset($this->_usedProperties['relatedApplications'])) {
            $output['related_applications'] = array_map(fn ($v) => $v->toArray(), $this->relatedApplications);
        }
        if (isset($this->_usedProperties['shortcuts'])) {
            $output['shortcuts'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Manifest\ShortcutsConfig ? $v->toArray() : $v, $this->shortcuts);
        }
        if (isset($this->_usedProperties['shareTarget'])) {
            $output['share_target'] = $this->shareTarget->toArray();
        }
        if (isset($this->_usedProperties['widgets'])) {
            $output['widgets'] = array_map(fn ($v) => $v->toArray(), $this->widgets);
        }

        return $output;
    }

}
