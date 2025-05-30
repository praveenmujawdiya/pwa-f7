<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Tailwind_Command_Init_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.tailwind.command.init.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.tailwind.command.init.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('tailwind:init', [], 'Initializes Tailwind CSS for your project', false, #[\Closure(name: 'tailwind.command.init', class: 'Symfonycasts\\TailwindBundle\\Command\\TailwindInitCommand')] fn (): \Symfonycasts\TailwindBundle\Command\TailwindInitCommand => ($container->privates['tailwind.command.init'] ?? $container->load('getTailwind_Command_InitService')));
    }
}
