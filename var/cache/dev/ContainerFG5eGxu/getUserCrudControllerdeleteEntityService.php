<?php

namespace ContainerFG5eGxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudControllerdeleteEntityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P.blNFL.App\Controller\Admin\UserCrudController::deleteEntity()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.P.blNFL'] ?? $container->load('get_ServiceLocator_P_BlNFLService'));

        if (isset($container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::deleteEntity()'])) {
            return $container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::deleteEntity()'];
        }

        return $container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::deleteEntity()'] = $a->withContext('App\\Controller\\Admin\\UserCrudController::deleteEntity()', $container);
    }
}
