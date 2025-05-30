<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTailwind_BuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'tailwind.builder' shared service.
     *
     * @return \Symfonycasts\TailwindBundle\TailwindBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/tailwind-bundle/src/TailwindBuilder.php';

        return $container->privates['tailwind.builder'] = new \Symfonycasts\TailwindBundle\TailwindBuilder(\dirname(__DIR__, 4), [(\dirname(__DIR__, 4).'/assets/styles/app.css')], (\dirname(__DIR__, 3).'/tailwind'), NULL, 'v3.4.17', (\dirname(__DIR__, 4).'/tailwind.config.js'), NULL);
    }
}
