<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileCompileEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SpomkyLabs\PwaBundle\Subscriber\FileCompileEventListener' shared autowired service.
     *
     * @return \SpomkyLabs\PwaBundle\Subscriber\FileCompileEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/spomky-labs/pwa-bundle/src/Subscriber/FileCompileEventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Path/PublicAssetsFilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Path/LocalPublicAssetsFilesystem.php';

        return $container->privates['SpomkyLabs\\PwaBundle\\Subscriber\\FileCompileEventListener'] = new \SpomkyLabs\PwaBundle\Subscriber\FileCompileEventListener(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['SpomkyLabs\\PwaBundle\\Service\\ManifestCompiler'] ?? self::getManifestCompilerService($container));
            yield 1 => ($container->privates['SpomkyLabs\\PwaBundle\\Service\\FaviconsCompiler'] ?? self::getFaviconsCompilerService($container));
            yield 2 => ($container->privates['SpomkyLabs\\PwaBundle\\Service\\ApplicationIconCompiler'] ?? $container->load('getApplicationIconCompilerService'));
            yield 3 => ($container->privates['SpomkyLabs\\PwaBundle\\Service\\ServiceWorkerCompiler'] ?? self::getServiceWorkerCompilerService($container));
        }, 4), ($container->privates['asset_mapper.local_public_assets_filesystem'] ??= new \Symfony\Component\AssetMapper\Path\LocalPublicAssetsFilesystem((\dirname(__DIR__, 4).'/public'))));
    }
}
