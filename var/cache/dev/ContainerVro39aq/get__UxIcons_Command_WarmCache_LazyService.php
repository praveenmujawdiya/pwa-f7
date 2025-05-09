<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get__UxIcons_Command_WarmCache_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '..ux_icons.command.warm_cache.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['..ux_icons.command.warm_cache.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('ux:icons:warm-cache', [], 'Warm the icon cache', false, #[\Closure(name: '.ux_icons.command.warm_cache', class: 'Symfony\\UX\\Icons\\Command\\WarmCacheCommand')] fn (): \Symfony\UX\Icons\Command\WarmCacheCommand => ($container->privates['.ux_icons.command.warm_cache'] ?? $container->load('get_UxIcons_Command_WarmCacheService')));
    }
}
