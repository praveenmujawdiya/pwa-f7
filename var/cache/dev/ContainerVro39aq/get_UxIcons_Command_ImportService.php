<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_Command_ImportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux_icons.command.import' shared service.
     *
     * @return \Symfony\UX\Icons\Command\ImportIconCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/Command/ImportIconCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/IconRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/Registry/LocalSvgIconRegistry.php';

        $container->privates['.ux_icons.command.import'] = $instance = new \Symfony\UX\Icons\Command\ImportIconCommand(($container->privates['.ux_icons.iconify'] ?? $container->load('get_UxIcons_IconifyService')), ($container->privates['.ux_icons.local_svg_icon_registry'] ??= new \Symfony\UX\Icons\Registry\LocalSvgIconRegistry((\dirname(__DIR__, 4).'/assets/icons'), [])));

        $instance->setName('ux:icons:import');
        $instance->setDescription('Import icon(s) from iconify.design');

        return $instance;
    }
}
