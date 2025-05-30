<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateIconsCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.SpomkyLabs\PwaBundle\Command\CreateIconsCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.SpomkyLabs\\PwaBundle\\Command\\CreateIconsCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pwa:create:icons', [], '[DEPRECATED] Generate icons for your PWA', false, #[\Closure(name: 'SpomkyLabs\\PwaBundle\\Command\\CreateIconsCommand')] fn (): \SpomkyLabs\PwaBundle\Command\CreateIconsCommand => ($container->privates['SpomkyLabs\\PwaBundle\\Command\\CreateIconsCommand'] ?? $container->load('getCreateIconsCommandService')));
    }
}
