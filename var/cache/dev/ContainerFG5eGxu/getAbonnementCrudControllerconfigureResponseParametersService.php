<?php

namespace ContainerFG5eGxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbonnementCrudControllerconfigureResponseParametersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OgOMxLk.App\Controller\Admin\AbonnementCrudController::configureResponseParameters()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OgOMxLk.App\\Controller\\Admin\\AbonnementCrudController::configureResponseParameters()'] = ($container->privates['.service_locator.OgOMxLk'] ?? $container->load('get_ServiceLocator_OgOMxLkService'))->withContext('App\\Controller\\Admin\\AbonnementCrudController::configureResponseParameters()', $container);
    }
}
