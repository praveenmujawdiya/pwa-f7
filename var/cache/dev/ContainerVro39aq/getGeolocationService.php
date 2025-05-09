<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeolocationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Twig\Component\Geolocation' autowired service.
     *
     * @return \App\Twig\Component\Geolocation
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/DefaultActionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/ComponentToolsTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Twig/Component/Geolocation.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/LiveResponder.php';

        $container->factories['App\\Twig\\Component\\Geolocation'] = function ($container) {
            $instance = new \App\Twig\Component\Geolocation();

            $instance->setLiveResponder(($container->privates['ux.live_component.live_responder'] ??= new \Symfony\UX\LiveComponent\LiveResponder()));

            return $instance;
        };

        return $container->factories['App\\Twig\\Component\\Geolocation']($container);
    }
}
