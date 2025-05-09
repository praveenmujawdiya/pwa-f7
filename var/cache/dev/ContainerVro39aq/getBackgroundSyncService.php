<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBackgroundSyncService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SpomkyLabs\PwaBundle\CachingStrategy\BackgroundSync' shared autowired service.
     *
     * @return \SpomkyLabs\PwaBundle\CachingStrategy\BackgroundSync
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/spomky-labs/pwa-bundle/src/CachingStrategy/HasCacheStrategiesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/spomky-labs/pwa-bundle/src/CachingStrategy/BackgroundSync.php';

        return $container->privates['SpomkyLabs\\PwaBundle\\CachingStrategy\\BackgroundSync'] = new \SpomkyLabs\PwaBundle\CachingStrategy\BackgroundSync(($container->privates['SpomkyLabs\\PwaBundle\\Dto\\ServiceWorker'] ?? self::getServiceWorkerService($container)), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\DestinationMatchCallbackHandler'] ??= new \SpomkyLabs\PwaBundle\MatchCallbackHandler\DestinationMatchCallbackHandler());
            yield 1 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\ExactPathnameMatchCallbackHandler'] ??= new \SpomkyLabs\PwaBundle\MatchCallbackHandler\ExactPathnameMatchCallbackHandler());
            yield 2 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\NavigationMatchCallbackHandler'] ??= new \SpomkyLabs\PwaBundle\MatchCallbackHandler\NavigationMatchCallbackHandler());
            yield 3 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\OriginMatchCallbackHandler'] ??= new \SpomkyLabs\PwaBundle\MatchCallbackHandler\OriginMatchCallbackHandler());
            yield 4 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\PathnameEndsWithMatchCallbackHandler'] ??= new \SpomkyLabs\PwaBundle\MatchCallbackHandler\PathnameEndsWithMatchCallbackHandler());
            yield 5 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\PathnameStartsWithMatchCallbackHandler'] ??= new \SpomkyLabs\PwaBundle\MatchCallbackHandler\PathnameStartsWithMatchCallbackHandler());
            yield 6 => ($container->privates['SpomkyLabs\\PwaBundle\\MatchCallbackHandler\\RouteMatchCallbackHandler'] ?? $container->load('getRouteMatchCallbackHandlerService'));
        }, 7));
    }
}
