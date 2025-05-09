<?php

namespace ContainerVro39aq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_LiveCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.live_collection' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Form\Type\LiveCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Form/Type/LiveCollectionType.php';

        return $container->privates['form.live_collection'] = new \Symfony\UX\LiveComponent\Form\Type\LiveCollectionType();
    }
}
