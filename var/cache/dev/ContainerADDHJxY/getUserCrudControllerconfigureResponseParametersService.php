<?php

namespace ContainerADDHJxY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudControllerconfigureResponseParametersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OgOMxLk.App\Controller\Admin\UserCrudController::configureResponseParameters()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OgOMxLk.App\\Controller\\Admin\\UserCrudController::configureResponseParameters()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'responseParameters' => ['privates', '.errored..service_locator.OgOMxLk.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.OgOMxLk": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'responseParameters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]))->withContext('App\\Controller\\Admin\\UserCrudController::configureResponseParameters()', $container);
    }
}
