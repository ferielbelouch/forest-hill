<?php

namespace ContainerWXSVGnh;

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
        return $container->privates['.service_locator.OgOMxLk.App\\Controller\\Admin\\UserCrudController::configureResponseParameters()'] = ($container->privates['.service_locator.OgOMxLk'] ?? $container->load('get_ServiceLocator_OgOMxLkService'))->withContext('App\\Controller\\Admin\\UserCrudController::configureResponseParameters()', $container);
    }
}
