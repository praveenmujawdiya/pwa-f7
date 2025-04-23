<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Pwa'.\DIRECTORY_SEPARATOR.'FaviconsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pwa'.\DIRECTORY_SEPARATOR.'ManifestConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pwa'.\DIRECTORY_SEPARATOR.'ServiceworkerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class PwaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $favicons;
    private $imageProcessor;
    private $logger;
    private $manifest;
    private $pathTypeReference;
    private $serviceworker;
    private $webClient;
    private $userAgent;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"background_color":null,"safari_pinned_tab_color":null,"tile_color":null,"border_radius":null,"image_scale":null,"low_resolution":false,"use_silhouette":null,"use_start_image":true,"monochrome":false,"potrace":"potrace"}
     * @return \Symfony\Config\Pwa\FaviconsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\FaviconsConfig : static)
     */
    public function favicons(array $value = []): \Symfony\Config\Pwa\FaviconsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['favicons'] = true;
            $this->favicons = $value;

            return $this;
        }

        if (!$this->favicons instanceof \Symfony\Config\Pwa\FaviconsConfig) {
            $this->_usedProperties['favicons'] = true;
            $this->favicons = new \Symfony\Config\Pwa\FaviconsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "favicons()" has already been initialized. You cannot pass values the second time you call favicons().');
        }

        return $this->favicons;
    }

    /**
     * The image processor to use to generate the icons of different sizes.
     * @example SpomkyLabs\PwaBundle\ImageProcessor\GDImageProcessor
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function imageProcessor($value): static
    {
        $this->_usedProperties['imageProcessor'] = true;
        $this->imageProcessor = $value;

        return $this;
    }

    /**
     * The logger service to use. If not set, the default logger will be used.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): static
    {
        $this->_usedProperties['logger'] = true;
        $this->logger = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"public_url":"\/site.webmanifest","use_credentials":true,"categories":[],"display_override":[],"scope_extensions":[],"icons":[],"screenshots":[],"file_handlers":[],"protocol_handlers":[],"prefer_related_applications":false,"related_applications":[],"shortcuts":[],"widgets":[]}
     * @return \Symfony\Config\Pwa\ManifestConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\ManifestConfig : static)
     */
    public function manifest(mixed $value = []): \Symfony\Config\Pwa\ManifestConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['manifest'] = true;
            $this->manifest = $value;

            return $this;
        }

        if (!$this->manifest instanceof \Symfony\Config\Pwa\ManifestConfig) {
            $this->_usedProperties['manifest'] = true;
            $this->manifest = new \Symfony\Config\Pwa\ManifestConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "manifest()" has already been initialized. You cannot pass values the second time you call manifest().');
        }

        return $this->manifest;
    }

    /**
     * The path type reference to generate paths/URLs. See https://symfony.com/doc/current/routing.html#generating-urls-in-controllers for more information.
     * @example 1
     * @example 0
     * @example 3
     * @example 2
     * @default 1
     * @param ParamConfigurator|int $value
     * @deprecated The "path_type_reference" configuration key is deprecated. Use the "path_type_reference" of URL nodes instead.
     * @return $this
     */
    public function pathTypeReference($value): static
    {
        $this->_usedProperties['pathTypeReference'] = true;
        $this->pathTypeReference = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"dest":"\/sw.js","skip_waiting":false,"scope":"\/","use_cache":true,"workbox":{"enabled":true,"use_cdn":false,"google_fonts":{"enabled":true,"cache_prefix":null,"max_age":null,"max_entries":null},"cache_manifest":true,"version":"7.0.0","workbox_public_url":"\/workbox","workbox_import_placeholder":"\/\/WORKBOX_IMPORT_PLACEHOLDER","standard_rules_placeholder":"\/\/STANDARD_RULES_PLACEHOLDER","offline_fallback_placeholder":"\/\/OFFLINE_FALLBACK_PLACEHOLDER","widgets_placeholder":"\/\/WIDGETS_PLACEHOLDER","clear_cache":true,"image_cache":{"enabled":true,"cache_name":"images","regex":"\/\\.(ico|png|jpe?g|gif|svg|webp|bmp)$\/","max_entries":60,"max_age":31536000},"asset_cache":{"enabled":true,"cache_name":"assets","regex":"\/\\.(css|js|json|xml|txt|map|ico|png|jpe?g|gif|svg|webp|bmp)$\/","max_age":31536000},"font_cache":{"enabled":true,"cache_name":"fonts","regex":"\/\\.(ttf|eot|otf|woff2)$\/","max_entries":60,"max_age":31536000},"resource_caches":[],"background_sync":[],"image_cache_name":"images","font_cache_name":"fonts","page_cache_name":"pages","asset_cache_name":"assets","image_regex":"\/\\.(ico|png|jpe?g|gif|svg|webp|bmp)$\/","static_regex":"\/\\.(css|js|json|xml|txt|map)$\/","font_regex":"\/\\.(ttf|eot|otf|woff2)$\/","max_image_cache_entries":60,"max_image_age":31536000,"max_font_cache_entries":30,"max_font_age":31536000,"network_timeout_seconds":3,"warm_cache_urls":[]}}
     * @return \Symfony\Config\Pwa\ServiceworkerConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\ServiceworkerConfig : static)
     */
    public function serviceworker(string|array $value = []): \Symfony\Config\Pwa\ServiceworkerConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['serviceworker'] = true;
            $this->serviceworker = $value;

            return $this;
        }

        if (!$this->serviceworker instanceof \Symfony\Config\Pwa\ServiceworkerConfig) {
            $this->_usedProperties['serviceworker'] = true;
            $this->serviceworker = new \Symfony\Config\Pwa\ServiceworkerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "serviceworker()" has already been initialized. You cannot pass values the second time you call serviceworker().');
        }

        return $this->serviceworker;
    }

    /**
     * The Panther Client for generating screenshots. If not set, the default client will be used.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function webClient($value): static
    {
        $this->_usedProperties['webClient'] = true;
        $this->webClient = $value;

        return $this;
    }

    /**
     * The user agent to use when generating screenshots. If not set, the default user agent will be used. When requesting the current application in an environment other than "prod", the profiler will be disabled.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userAgent($value): static
    {
        $this->_usedProperties['userAgent'] = true;
        $this->userAgent = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'pwa';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('favicons', $value)) {
            $this->_usedProperties['favicons'] = true;
            $this->favicons = \is_array($value['favicons']) ? new \Symfony\Config\Pwa\FaviconsConfig($value['favicons']) : $value['favicons'];
            unset($value['favicons']);
        }

        if (array_key_exists('image_processor', $value)) {
            $this->_usedProperties['imageProcessor'] = true;
            $this->imageProcessor = $value['image_processor'];
            unset($value['image_processor']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('manifest', $value)) {
            $this->_usedProperties['manifest'] = true;
            $this->manifest = \is_array($value['manifest']) ? new \Symfony\Config\Pwa\ManifestConfig($value['manifest']) : $value['manifest'];
            unset($value['manifest']);
        }

        if (array_key_exists('path_type_reference', $value)) {
            $this->_usedProperties['pathTypeReference'] = true;
            $this->pathTypeReference = $value['path_type_reference'];
            unset($value['path_type_reference']);
        }

        if (array_key_exists('serviceworker', $value)) {
            $this->_usedProperties['serviceworker'] = true;
            $this->serviceworker = \is_array($value['serviceworker']) ? new \Symfony\Config\Pwa\ServiceworkerConfig($value['serviceworker']) : $value['serviceworker'];
            unset($value['serviceworker']);
        }

        if (array_key_exists('web_client', $value)) {
            $this->_usedProperties['webClient'] = true;
            $this->webClient = $value['web_client'];
            unset($value['web_client']);
        }

        if (array_key_exists('user_agent', $value)) {
            $this->_usedProperties['userAgent'] = true;
            $this->userAgent = $value['user_agent'];
            unset($value['user_agent']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['favicons'])) {
            $output['favicons'] = $this->favicons instanceof \Symfony\Config\Pwa\FaviconsConfig ? $this->favicons->toArray() : $this->favicons;
        }
        if (isset($this->_usedProperties['imageProcessor'])) {
            $output['image_processor'] = $this->imageProcessor;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }
        if (isset($this->_usedProperties['manifest'])) {
            $output['manifest'] = $this->manifest instanceof \Symfony\Config\Pwa\ManifestConfig ? $this->manifest->toArray() : $this->manifest;
        }
        if (isset($this->_usedProperties['pathTypeReference'])) {
            $output['path_type_reference'] = $this->pathTypeReference;
        }
        if (isset($this->_usedProperties['serviceworker'])) {
            $output['serviceworker'] = $this->serviceworker instanceof \Symfony\Config\Pwa\ServiceworkerConfig ? $this->serviceworker->toArray() : $this->serviceworker;
        }
        if (isset($this->_usedProperties['webClient'])) {
            $output['web_client'] = $this->webClient;
        }
        if (isset($this->_usedProperties['userAgent'])) {
            $output['user_agent'] = $this->userAgent;
        }

        return $output;
    }

}
