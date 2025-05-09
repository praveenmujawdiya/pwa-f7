<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsoleEventsSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Inspector\Symfony\Bundle\Listeners\ConsoleEventsSubscriber' shared service.
     *
     * @return \Inspector\Symfony\Bundle\Listeners\ConsoleEventsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/inspector-apm/inspector-symfony/src/Listeners/ConsoleEventsSubscriber.php';

        return $container->privates['Inspector\\Symfony\\Bundle\\Listeners\\ConsoleEventsSubscriber'] = new \Inspector\Symfony\Bundle\Listeners\ConsoleEventsSubscriber(($container->services['Inspector\\Inspector'] ?? self::getInspectorService($container)), ['messenger*', 'assets*', 'importmap*', 'cache*', 'doctrine*', 'schedule:run', 'debug*', 'make*']);
    }
}
