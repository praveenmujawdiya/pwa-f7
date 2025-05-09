<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getI18nControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Feature\I18nController' shared autowired service.
     *
     * @return \App\Controller\Feature\I18nController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Feature/I18nController.php';

        $container->services['App\\Controller\\Feature\\I18nController'] = $instance = new \App\Controller\Feature\I18nController();

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Feature\\I18nController', $container));

        return $instance;
    }
}
