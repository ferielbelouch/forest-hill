<?php

namespace ContainerUEfNfAk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProCrudControllerupdateEntityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P.blNFL.App\Controller\Admin\ProCrudController::updateEntity()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.P.blNFL'] ?? $container->load('get_ServiceLocator_P_BlNFLService'));

        if (isset($container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\ProCrudController::updateEntity()'])) {
            return $container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\ProCrudController::updateEntity()'];
        }

        return $container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\ProCrudController::updateEntity()'] = $a->withContext('App\\Controller\\Admin\\ProCrudController::updateEntity()', $container);
    }
}
