<?php

namespace ContainerWXSVGnh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LHPXyzRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LHPXyzR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LHPXyzR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'actions' => ['privates', '.errored..service_locator.LHPXyzR.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions', NULL, 'Cannot autowire service ".service_locator.LHPXyzR": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.'],
        ], [
            'actions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions',
        ]);
    }
}