<?php

namespace ContainerUEfNfAk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudControllercreateNewFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o3gmRre.App\Controller\Admin\UserCrudController::createNewForm()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createNewForm()'] = ($container->privates['.service_locator.o3gmRre'] ?? $container->load('get_ServiceLocator_O3gmRreService'))->withContext('App\\Controller\\Admin\\UserCrudController::createNewForm()', $container);
    }
}
