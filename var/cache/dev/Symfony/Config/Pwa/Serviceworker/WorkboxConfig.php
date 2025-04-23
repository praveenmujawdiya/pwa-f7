<?php

namespace Symfony\Config\Pwa\Serviceworker;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'GoogleFontsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'OfflineFallbackConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'ImageCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'AssetCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'FontCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'ResourceCachesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'BackgroundSyncConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'PageFallbackConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'ImageFallbackConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'FontFallbackConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Workbox'.\DIRECTORY_SEPARATOR.'WarmCacheUrlsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WorkboxConfig 
{
    private $enabled;
    private $useCdn;
    private $googleFonts;
    private $cacheManifest;
    private $version;
    private $workboxPublicUrl;
    private $workboxImportPlaceholder;
    private $standardRulesPlaceholder;
    private $offlineFallbackPlaceholder;
    private $widgetsPlaceholder;
    private $clearCache;
    private $offlineFallback;
    private $imageCache;
    private $assetCache;
    private $fontCache;
    private $resourceCaches;
    private $backgroundSync;
    private $imageCacheName;
    private $fontCacheName;
    private $pageCacheName;
    private $assetCacheName;
    private $pageFallback;
    private $imageFallback;
    private $fontFallback;
    private $imageRegex;
    private $staticRegex;
    private $fontRegex;
    private $maxImageCacheEntries;
    private $maxImageAge;
    private $maxFontCacheEntries;
    private $maxFontAge;
    private $networkTimeoutSeconds;
    private $warmCacheUrls;
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
     * Whether to use the local workbox or the CDN.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useCdn($value): static
    {
        $this->_usedProperties['useCdn'] = true;
        $this->useCdn = $value;

        return $this;
    }

    /**
     * @default {"enabled":true,"cache_prefix":null,"max_age":null,"max_entries":null}
    */
    public function googleFonts(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\GoogleFontsConfig
    {
        if (null === $this->googleFonts) {
            $this->_usedProperties['googleFonts'] = true;
            $this->googleFonts = new \Symfony\Config\Pwa\Serviceworker\Workbox\GoogleFontsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "googleFonts()" has already been initialized. You cannot pass values the second time you call googleFonts().');
        }

        return $this->googleFonts;
    }

    /**
     * Whether to cache the manifest file.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cacheManifest($value): static
    {
        $this->_usedProperties['cacheManifest'] = true;
        $this->cacheManifest = $value;

        return $this;
    }

    /**
     * The version of workbox. When using local files, the version shall be "7.0.0."
     * @default '7.0.0'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): static
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;

        return $this;
    }

    /**
     * The public path to the local workbox. Only used if use_cdn is false.
     * @default '/workbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function workboxPublicUrl($value): static
    {
        $this->_usedProperties['workboxPublicUrl'] = true;
        $this->workboxPublicUrl = $value;

        return $this;
    }

    /**
     * The placeholder for the workbox import. Will be replaced by the workbox import.
     * @example //WORKBOX_IMPORT_PLACEHOLDER
     * @default '//WORKBOX_IMPORT_PLACEHOLDER'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "workbox_import_placeholder" option is deprecated and will be removed in 2.0.0. No replacement.
     * @return $this
     */
    public function workboxImportPlaceholder($value): static
    {
        $this->_usedProperties['workboxImportPlaceholder'] = true;
        $this->workboxImportPlaceholder = $value;

        return $this;
    }

    /**
     * The placeholder for the standard rules. Will be replaced by caching strategies.
     * @example //STANDARD_RULES_PLACEHOLDER
     * @default '//STANDARD_RULES_PLACEHOLDER'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "standard_rules_placeholder" option is deprecated and will be removed in 2.0.0. No replacement.
     * @return $this
     */
    public function standardRulesPlaceholder($value): static
    {
        $this->_usedProperties['standardRulesPlaceholder'] = true;
        $this->standardRulesPlaceholder = $value;

        return $this;
    }

    /**
     * The placeholder for the offline fallback. Will be replaced by the URL.
     * @example //OFFLINE_FALLBACK_PLACEHOLDER
     * @default '//OFFLINE_FALLBACK_PLACEHOLDER'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "offline_fallback_placeholder" option is deprecated and will be removed in 2.0.0. No replacement.
     * @return $this
     */
    public function offlineFallbackPlaceholder($value): static
    {
        $this->_usedProperties['offlineFallbackPlaceholder'] = true;
        $this->offlineFallbackPlaceholder = $value;

        return $this;
    }

    /**
     * The placeholder for the widgets. Will be replaced by the widgets management events.
     * @example //WIDGETS_PLACEHOLDER
     * @default '//WIDGETS_PLACEHOLDER'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "widgets_placeholder" option is deprecated and will be removed in 2.0.0. No replacement.
     * @return $this
     */
    public function widgetsPlaceholder($value): static
    {
        $this->_usedProperties['widgetsPlaceholder'] = true;
        $this->widgetsPlaceholder = $value;

        return $this;
    }

    /**
     * Whether to clear the cache during the service worker activation.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function clearCache($value): static
    {
        $this->_usedProperties['clearCache'] = true;
        $this->clearCache = $value;

        return $this;
    }

    public function offlineFallback(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallbackConfig
    {
        if (null === $this->offlineFallback) {
            $this->_usedProperties['offlineFallback'] = true;
            $this->offlineFallback = new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallbackConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "offlineFallback()" has already been initialized. You cannot pass values the second time you call offlineFallback().');
        }

        return $this->offlineFallback;
    }

    /**
     * @default {"enabled":true,"cache_name":"images","regex":"\/\\.(ico|png|jpe?g|gif|svg|webp|bmp)$\/","max_entries":60,"max_age":31536000}
    */
    public function imageCache(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\ImageCacheConfig
    {
        if (null === $this->imageCache) {
            $this->_usedProperties['imageCache'] = true;
            $this->imageCache = new \Symfony\Config\Pwa\Serviceworker\Workbox\ImageCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "imageCache()" has already been initialized. You cannot pass values the second time you call imageCache().');
        }

        return $this->imageCache;
    }

    /**
     * @default {"enabled":true,"cache_name":"assets","regex":"\/\\.(css|js|json|xml|txt|map|ico|png|jpe?g|gif|svg|webp|bmp)$\/","max_age":31536000}
    */
    public function assetCache(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\AssetCacheConfig
    {
        if (null === $this->assetCache) {
            $this->_usedProperties['assetCache'] = true;
            $this->assetCache = new \Symfony\Config\Pwa\Serviceworker\Workbox\AssetCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "assetCache()" has already been initialized. You cannot pass values the second time you call assetCache().');
        }

        return $this->assetCache;
    }

    /**
     * @default {"enabled":true,"cache_name":"fonts","regex":"\/\\.(ttf|eot|otf|woff2)$\/","max_entries":60,"max_age":31536000}
    */
    public function fontCache(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\FontCacheConfig
    {
        if (null === $this->fontCache) {
            $this->_usedProperties['fontCache'] = true;
            $this->fontCache = new \Symfony\Config\Pwa\Serviceworker\Workbox\FontCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fontCache()" has already been initialized. You cannot pass values the second time you call fontCache().');
        }

        return $this->fontCache;
    }

    public function resourceCaches(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig
    {
        $this->_usedProperties['resourceCaches'] = true;

        return $this->resourceCaches[] = new \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig($value);
    }

    /**
     * The background sync configuration.
    */
    public function backgroundSync(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\BackgroundSyncConfig
    {
        $this->_usedProperties['backgroundSync'] = true;

        return $this->backgroundSync[] = new \Symfony\Config\Pwa\Serviceworker\Workbox\BackgroundSyncConfig($value);
    }

    /**
     * The name of the image cache.
     * @default 'images'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "image_cache_name" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.image_cache.cache_name" instead.
     * @return $this
     */
    public function imageCacheName($value): static
    {
        $this->_usedProperties['imageCacheName'] = true;
        $this->imageCacheName = $value;

        return $this;
    }

    /**
     * The name of the font cache.
     * @default 'fonts'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "font_cache_name" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.font_cache.cache_name" instead.
     * @return $this
     */
    public function fontCacheName($value): static
    {
        $this->_usedProperties['fontCacheName'] = true;
        $this->fontCacheName = $value;

        return $this;
    }

    /**
     * The name of the page cache.
     * @default 'pages'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "page_cache_name" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.resource_caches[].cache_name" instead.
     * @return $this
     */
    public function pageCacheName($value): static
    {
        $this->_usedProperties['pageCacheName'] = true;
        $this->pageCacheName = $value;

        return $this;
    }

    /**
     * The name of the asset cache.
     * @default 'assets'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "asset_cache_name" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.asset_cache.cache_name" instead.
     * @return $this
     */
    public function assetCacheName($value): static
    {
        $this->_usedProperties['assetCacheName'] = true;
        $this->assetCacheName = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the offline page fallback.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig : static)
     */
    public function pageFallback(string|array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['pageFallback'] = true;
            $this->pageFallback = $value;

            return $this;
        }

        if (!$this->pageFallback instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig) {
            $this->_usedProperties['pageFallback'] = true;
            $this->pageFallback = new \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pageFallback()" has already been initialized. You cannot pass values the second time you call pageFallback().');
        }

        return $this->pageFallback;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the offline image fallback.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig : static)
     */
    public function imageFallback(string|array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['imageFallback'] = true;
            $this->imageFallback = $value;

            return $this;
        }

        if (!$this->imageFallback instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig) {
            $this->_usedProperties['imageFallback'] = true;
            $this->imageFallback = new \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "imageFallback()" has already been initialized. You cannot pass values the second time you call imageFallback().');
        }

        return $this->imageFallback;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URL of the offline font fallback.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig : static)
     */
    public function fontFallback(string|array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['fontFallback'] = true;
            $this->fontFallback = $value;

            return $this;
        }

        if (!$this->fontFallback instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig) {
            $this->_usedProperties['fontFallback'] = true;
            $this->fontFallback = new \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fontFallback()" has already been initialized. You cannot pass values the second time you call fontFallback().');
        }

        return $this->fontFallback;
    }

    /**
     * The regex to match the images.
     * @example /\.(ico|png|jpe?g|gif|svg|webp|bmp)$/
     * @default '/\\.(ico|png|jpe?g|gif|svg|webp|bmp)$/'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "image_regex" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.image_cache.regex" instead.
     * @return $this
     */
    public function imageRegex($value): static
    {
        $this->_usedProperties['imageRegex'] = true;
        $this->imageRegex = $value;

        return $this;
    }

    /**
     * The regex to match the static files.
     * @example /\.(css|js|json|xml|txt|map)$/
     * @default '/\\.(css|js|json|xml|txt|map)$/'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "static_regex" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.asset_cache.regex" instead.
     * @return $this
     */
    public function staticRegex($value): static
    {
        $this->_usedProperties['staticRegex'] = true;
        $this->staticRegex = $value;

        return $this;
    }

    /**
     * The regex to match the static files.
     * @example /\.(ttf|eot|otf|woff2)$/
     * @default '/\\.(ttf|eot|otf|woff2)$/'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "font_regex" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.font_cache.regex" instead.
     * @return $this
     */
    public function fontRegex($value): static
    {
        $this->_usedProperties['fontRegex'] = true;
        $this->fontRegex = $value;

        return $this;
    }

    /**
     * The maximum number of entries in the image cache.
     * @example 50
     * @example 100
     * @example 200
     * @default 60
     * @param ParamConfigurator|int $value
     * @deprecated The "max_image_cache_entries" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.image_cache.max_entries" instead.
     * @return $this
     */
    public function maxImageCacheEntries($value): static
    {
        $this->_usedProperties['maxImageCacheEntries'] = true;
        $this->maxImageCacheEntries = $value;

        return $this;
    }

    /**
     * The maximum number of seconds before the image cache is invalidated.
     * @example 31536000
     * @example 2592000
     * @example 604800
     * @default 31536000
     * @param ParamConfigurator|int $value
     * @deprecated The "max_image_age" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.image_cache.max_age" instead.
     * @return $this
     */
    public function maxImageAge($value): static
    {
        $this->_usedProperties['maxImageAge'] = true;
        $this->maxImageAge = $value;

        return $this;
    }

    /**
     * The maximum number of entries in the font cache.
     * @example 30
     * @example 50
     * @example 100
     * @default 30
     * @param ParamConfigurator|int $value
     * @deprecated The "max_font_cache_entries" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.font_cache.max_entries" instead.
     * @return $this
     */
    public function maxFontCacheEntries($value): static
    {
        $this->_usedProperties['maxFontCacheEntries'] = true;
        $this->maxFontCacheEntries = $value;

        return $this;
    }

    /**
     * The maximum number of seconds before the font cache is invalidated.
     * @example 31536000
     * @example 2592000
     * @example 604800
     * @default 31536000
     * @param ParamConfigurator|int $value
     * @deprecated The "max_font_age" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.font_cache.max_age" instead.
     * @return $this
     */
    public function maxFontAge($value): static
    {
        $this->_usedProperties['maxFontAge'] = true;
        $this->maxFontAge = $value;

        return $this;
    }

    /**
     * The network timeout in seconds before cache is called (for warm cache URLs only).
     * @example 1
     * @example 2
     * @example 5
     * @default 3
     * @param ParamConfigurator|int $value
     * @deprecated The "network_timeout_seconds" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.resource_caches[].network_timeout" instead.
     * @return $this
     */
    public function networkTimeoutSeconds($value): static
    {
        $this->_usedProperties['networkTimeoutSeconds'] = true;
        $this->networkTimeoutSeconds = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * The URLs to warm the cache. The URLs shall be served by the application.
     * @deprecated The "warm_cache_urls" option is deprecated and will be removed in 2.0.0. Please use "pwa.serviceworker.workbox.resource_caches[].urls" instead.
     * @return \Symfony\Config\Pwa\Serviceworker\Workbox\WarmCacheUrlsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pwa\Serviceworker\Workbox\WarmCacheUrlsConfig : static)
     */
    public function warmCacheUrls(array $value = []): \Symfony\Config\Pwa\Serviceworker\Workbox\WarmCacheUrlsConfig|static
    {
        $this->_usedProperties['warmCacheUrls'] = true;
        if (!\is_array($value)) {
            $this->warmCacheUrls[] = $value;

            return $this;
        }

        return $this->warmCacheUrls[] = new \Symfony\Config\Pwa\Serviceworker\Workbox\WarmCacheUrlsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('use_cdn', $value)) {
            $this->_usedProperties['useCdn'] = true;
            $this->useCdn = $value['use_cdn'];
            unset($value['use_cdn']);
        }

        if (array_key_exists('google_fonts', $value)) {
            $this->_usedProperties['googleFonts'] = true;
            $this->googleFonts = new \Symfony\Config\Pwa\Serviceworker\Workbox\GoogleFontsConfig($value['google_fonts']);
            unset($value['google_fonts']);
        }

        if (array_key_exists('cache_manifest', $value)) {
            $this->_usedProperties['cacheManifest'] = true;
            $this->cacheManifest = $value['cache_manifest'];
            unset($value['cache_manifest']);
        }

        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }

        if (array_key_exists('workbox_public_url', $value)) {
            $this->_usedProperties['workboxPublicUrl'] = true;
            $this->workboxPublicUrl = $value['workbox_public_url'];
            unset($value['workbox_public_url']);
        }

        if (array_key_exists('workbox_import_placeholder', $value)) {
            $this->_usedProperties['workboxImportPlaceholder'] = true;
            $this->workboxImportPlaceholder = $value['workbox_import_placeholder'];
            unset($value['workbox_import_placeholder']);
        }

        if (array_key_exists('standard_rules_placeholder', $value)) {
            $this->_usedProperties['standardRulesPlaceholder'] = true;
            $this->standardRulesPlaceholder = $value['standard_rules_placeholder'];
            unset($value['standard_rules_placeholder']);
        }

        if (array_key_exists('offline_fallback_placeholder', $value)) {
            $this->_usedProperties['offlineFallbackPlaceholder'] = true;
            $this->offlineFallbackPlaceholder = $value['offline_fallback_placeholder'];
            unset($value['offline_fallback_placeholder']);
        }

        if (array_key_exists('widgets_placeholder', $value)) {
            $this->_usedProperties['widgetsPlaceholder'] = true;
            $this->widgetsPlaceholder = $value['widgets_placeholder'];
            unset($value['widgets_placeholder']);
        }

        if (array_key_exists('clear_cache', $value)) {
            $this->_usedProperties['clearCache'] = true;
            $this->clearCache = $value['clear_cache'];
            unset($value['clear_cache']);
        }

        if (array_key_exists('offline_fallback', $value)) {
            $this->_usedProperties['offlineFallback'] = true;
            $this->offlineFallback = new \Symfony\Config\Pwa\Serviceworker\Workbox\OfflineFallbackConfig($value['offline_fallback']);
            unset($value['offline_fallback']);
        }

        if (array_key_exists('image_cache', $value)) {
            $this->_usedProperties['imageCache'] = true;
            $this->imageCache = new \Symfony\Config\Pwa\Serviceworker\Workbox\ImageCacheConfig($value['image_cache']);
            unset($value['image_cache']);
        }

        if (array_key_exists('asset_cache', $value)) {
            $this->_usedProperties['assetCache'] = true;
            $this->assetCache = new \Symfony\Config\Pwa\Serviceworker\Workbox\AssetCacheConfig($value['asset_cache']);
            unset($value['asset_cache']);
        }

        if (array_key_exists('font_cache', $value)) {
            $this->_usedProperties['fontCache'] = true;
            $this->fontCache = new \Symfony\Config\Pwa\Serviceworker\Workbox\FontCacheConfig($value['font_cache']);
            unset($value['font_cache']);
        }

        if (array_key_exists('resource_caches', $value)) {
            $this->_usedProperties['resourceCaches'] = true;
            $this->resourceCaches = array_map(fn ($v) => new \Symfony\Config\Pwa\Serviceworker\Workbox\ResourceCachesConfig($v), $value['resource_caches']);
            unset($value['resource_caches']);
        }

        if (array_key_exists('background_sync', $value)) {
            $this->_usedProperties['backgroundSync'] = true;
            $this->backgroundSync = array_map(fn ($v) => new \Symfony\Config\Pwa\Serviceworker\Workbox\BackgroundSyncConfig($v), $value['background_sync']);
            unset($value['background_sync']);
        }

        if (array_key_exists('image_cache_name', $value)) {
            $this->_usedProperties['imageCacheName'] = true;
            $this->imageCacheName = $value['image_cache_name'];
            unset($value['image_cache_name']);
        }

        if (array_key_exists('font_cache_name', $value)) {
            $this->_usedProperties['fontCacheName'] = true;
            $this->fontCacheName = $value['font_cache_name'];
            unset($value['font_cache_name']);
        }

        if (array_key_exists('page_cache_name', $value)) {
            $this->_usedProperties['pageCacheName'] = true;
            $this->pageCacheName = $value['page_cache_name'];
            unset($value['page_cache_name']);
        }

        if (array_key_exists('asset_cache_name', $value)) {
            $this->_usedProperties['assetCacheName'] = true;
            $this->assetCacheName = $value['asset_cache_name'];
            unset($value['asset_cache_name']);
        }

        if (array_key_exists('page_fallback', $value)) {
            $this->_usedProperties['pageFallback'] = true;
            $this->pageFallback = \is_array($value['page_fallback']) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig($value['page_fallback']) : $value['page_fallback'];
            unset($value['page_fallback']);
        }

        if (array_key_exists('image_fallback', $value)) {
            $this->_usedProperties['imageFallback'] = true;
            $this->imageFallback = \is_array($value['image_fallback']) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig($value['image_fallback']) : $value['image_fallback'];
            unset($value['image_fallback']);
        }

        if (array_key_exists('font_fallback', $value)) {
            $this->_usedProperties['fontFallback'] = true;
            $this->fontFallback = \is_array($value['font_fallback']) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig($value['font_fallback']) : $value['font_fallback'];
            unset($value['font_fallback']);
        }

        if (array_key_exists('image_regex', $value)) {
            $this->_usedProperties['imageRegex'] = true;
            $this->imageRegex = $value['image_regex'];
            unset($value['image_regex']);
        }

        if (array_key_exists('static_regex', $value)) {
            $this->_usedProperties['staticRegex'] = true;
            $this->staticRegex = $value['static_regex'];
            unset($value['static_regex']);
        }

        if (array_key_exists('font_regex', $value)) {
            $this->_usedProperties['fontRegex'] = true;
            $this->fontRegex = $value['font_regex'];
            unset($value['font_regex']);
        }

        if (array_key_exists('max_image_cache_entries', $value)) {
            $this->_usedProperties['maxImageCacheEntries'] = true;
            $this->maxImageCacheEntries = $value['max_image_cache_entries'];
            unset($value['max_image_cache_entries']);
        }

        if (array_key_exists('max_image_age', $value)) {
            $this->_usedProperties['maxImageAge'] = true;
            $this->maxImageAge = $value['max_image_age'];
            unset($value['max_image_age']);
        }

        if (array_key_exists('max_font_cache_entries', $value)) {
            $this->_usedProperties['maxFontCacheEntries'] = true;
            $this->maxFontCacheEntries = $value['max_font_cache_entries'];
            unset($value['max_font_cache_entries']);
        }

        if (array_key_exists('max_font_age', $value)) {
            $this->_usedProperties['maxFontAge'] = true;
            $this->maxFontAge = $value['max_font_age'];
            unset($value['max_font_age']);
        }

        if (array_key_exists('network_timeout_seconds', $value)) {
            $this->_usedProperties['networkTimeoutSeconds'] = true;
            $this->networkTimeoutSeconds = $value['network_timeout_seconds'];
            unset($value['network_timeout_seconds']);
        }

        if (array_key_exists('warm_cache_urls', $value)) {
            $this->_usedProperties['warmCacheUrls'] = true;
            $this->warmCacheUrls = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pwa\Serviceworker\Workbox\WarmCacheUrlsConfig($v) : $v, $value['warm_cache_urls']);
            unset($value['warm_cache_urls']);
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
        if (isset($this->_usedProperties['useCdn'])) {
            $output['use_cdn'] = $this->useCdn;
        }
        if (isset($this->_usedProperties['googleFonts'])) {
            $output['google_fonts'] = $this->googleFonts->toArray();
        }
        if (isset($this->_usedProperties['cacheManifest'])) {
            $output['cache_manifest'] = $this->cacheManifest;
        }
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['workboxPublicUrl'])) {
            $output['workbox_public_url'] = $this->workboxPublicUrl;
        }
        if (isset($this->_usedProperties['workboxImportPlaceholder'])) {
            $output['workbox_import_placeholder'] = $this->workboxImportPlaceholder;
        }
        if (isset($this->_usedProperties['standardRulesPlaceholder'])) {
            $output['standard_rules_placeholder'] = $this->standardRulesPlaceholder;
        }
        if (isset($this->_usedProperties['offlineFallbackPlaceholder'])) {
            $output['offline_fallback_placeholder'] = $this->offlineFallbackPlaceholder;
        }
        if (isset($this->_usedProperties['widgetsPlaceholder'])) {
            $output['widgets_placeholder'] = $this->widgetsPlaceholder;
        }
        if (isset($this->_usedProperties['clearCache'])) {
            $output['clear_cache'] = $this->clearCache;
        }
        if (isset($this->_usedProperties['offlineFallback'])) {
            $output['offline_fallback'] = $this->offlineFallback->toArray();
        }
        if (isset($this->_usedProperties['imageCache'])) {
            $output['image_cache'] = $this->imageCache->toArray();
        }
        if (isset($this->_usedProperties['assetCache'])) {
            $output['asset_cache'] = $this->assetCache->toArray();
        }
        if (isset($this->_usedProperties['fontCache'])) {
            $output['font_cache'] = $this->fontCache->toArray();
        }
        if (isset($this->_usedProperties['resourceCaches'])) {
            $output['resource_caches'] = array_map(fn ($v) => $v->toArray(), $this->resourceCaches);
        }
        if (isset($this->_usedProperties['backgroundSync'])) {
            $output['background_sync'] = array_map(fn ($v) => $v->toArray(), $this->backgroundSync);
        }
        if (isset($this->_usedProperties['imageCacheName'])) {
            $output['image_cache_name'] = $this->imageCacheName;
        }
        if (isset($this->_usedProperties['fontCacheName'])) {
            $output['font_cache_name'] = $this->fontCacheName;
        }
        if (isset($this->_usedProperties['pageCacheName'])) {
            $output['page_cache_name'] = $this->pageCacheName;
        }
        if (isset($this->_usedProperties['assetCacheName'])) {
            $output['asset_cache_name'] = $this->assetCacheName;
        }
        if (isset($this->_usedProperties['pageFallback'])) {
            $output['page_fallback'] = $this->pageFallback instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\PageFallbackConfig ? $this->pageFallback->toArray() : $this->pageFallback;
        }
        if (isset($this->_usedProperties['imageFallback'])) {
            $output['image_fallback'] = $this->imageFallback instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\ImageFallbackConfig ? $this->imageFallback->toArray() : $this->imageFallback;
        }
        if (isset($this->_usedProperties['fontFallback'])) {
            $output['font_fallback'] = $this->fontFallback instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\FontFallbackConfig ? $this->fontFallback->toArray() : $this->fontFallback;
        }
        if (isset($this->_usedProperties['imageRegex'])) {
            $output['image_regex'] = $this->imageRegex;
        }
        if (isset($this->_usedProperties['staticRegex'])) {
            $output['static_regex'] = $this->staticRegex;
        }
        if (isset($this->_usedProperties['fontRegex'])) {
            $output['font_regex'] = $this->fontRegex;
        }
        if (isset($this->_usedProperties['maxImageCacheEntries'])) {
            $output['max_image_cache_entries'] = $this->maxImageCacheEntries;
        }
        if (isset($this->_usedProperties['maxImageAge'])) {
            $output['max_image_age'] = $this->maxImageAge;
        }
        if (isset($this->_usedProperties['maxFontCacheEntries'])) {
            $output['max_font_cache_entries'] = $this->maxFontCacheEntries;
        }
        if (isset($this->_usedProperties['maxFontAge'])) {
            $output['max_font_age'] = $this->maxFontAge;
        }
        if (isset($this->_usedProperties['networkTimeoutSeconds'])) {
            $output['network_timeout_seconds'] = $this->networkTimeoutSeconds;
        }
        if (isset($this->_usedProperties['warmCacheUrls'])) {
            $output['warm_cache_urls'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pwa\Serviceworker\Workbox\WarmCacheUrlsConfig ? $v->toArray() : $v, $this->warmCacheUrls);
        }

        return $output;
    }

}
