<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListCacheStrategiesCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SpomkyLabs\PwaBundle\Command\ListCacheStrategiesCommand' shared autowired service.
     *
     * @return \SpomkyLabs\PwaBundle\Command\ListCacheStrategiesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/spomky-labs/pwa-bundle/src/Command/ListCacheStrategiesCommand.php';

        $container->privates['SpomkyLabs\\PwaBundle\\Command\\ListCacheStrategiesCommand'] = $instance = new \SpomkyLabs\PwaBundle\Command\ListCacheStrategiesCommand(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\AssetCache'] ?? $container->load('getAssetCacheService'));
            yield 1 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\BackgroundSync'] ?? $container->load('getBackgroundSyncService'));
            yield 2 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\FontCache'] ?? $container->load('getFontCacheService'));
            yield 3 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\GoogleFontCache'] ?? $container->load('getGoogleFontCacheService'));
            yield 4 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\ImageCache'] ?? $container->load('getImageCacheService'));
            yield 5 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\ManifestCache'] ?? $container->load('getManifestCacheService'));
            yield 6 => ($container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\ResourceCaches'] ?? $container->load('getResourceCachesService'));
        }, 7));

        $instance->setName('pwa:cache:list-strategies');
        $instance->setDescription('List the available cache strategies');

        return $instance;
    }
}
