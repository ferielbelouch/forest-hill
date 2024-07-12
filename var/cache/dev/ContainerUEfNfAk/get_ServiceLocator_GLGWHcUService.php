<?php

namespace ContainerUEfNfAk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GLGWHcUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GLGWHcU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GLGWHcU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'crud' => ['privates', '.errored..service_locator.GLGWHcU.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud', NULL, 'Cannot autowire service ".service_locator.GLGWHcU": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud" but no such service exists.'],
        ], [
            'crud' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud',
        ]);
    }
}
