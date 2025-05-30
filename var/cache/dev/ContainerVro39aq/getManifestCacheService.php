<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManifestCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SpomkyLabs\PwaBundle\CachingStrategy\ManifestCache' shared autowired service.
     *
     * @return \SpomkyLabs\PwaBundle\CachingStrategy\ManifestCache
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/spomky-labs/pwa-bundle/src/CachingStrategy/HasCacheStrategiesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/spomky-labs/pwa-bundle/src/CachingStrategy/ManifestCache.php';

        return $container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\ManifestCache'] = new \SpomkyLabs\PwaBundle\CachingStrategy\ManifestCache(($container->privates['SpomkyLabs\\PwaBundle\\Dto\\ServiceWorker'] ?? self::getServiceWorkerService($container)), '/pwa/site.{locale}.webmanifest');
    }
}
