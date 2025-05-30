<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux_icons.cache_warmer' shared service.
     *
     * @return \Symfony\UX\Icons\IconCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/IconCacheWarmer.php';

        $a = ($container->privates['.ux_icons.icon_finder'] ?? $container->load('get_UxIcons_IconFinderService'));

        if (isset($container->privates['.ux_icons.cache_warmer'])) {
            return $container->privates['.ux_icons.cache_warmer'];
        }

        return $container->privates['.ux_icons.cache_warmer'] = new \Symfony\UX\Icons\IconCacheWarmer(($container->privates['.ux_icons.cache_icon_registry'] ?? $container->load('get_UxIcons_CacheIconRegistryService')), $a);
    }
}
