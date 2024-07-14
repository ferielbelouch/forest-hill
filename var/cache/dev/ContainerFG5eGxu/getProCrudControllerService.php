<?php

namespace ContainerFG5eGxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ProCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/ProCrudController.php';

        $container->services['App\\Controller\\Admin\\ProCrudController'] = $instance = new \App\Controller\Admin\ProCrudController();

        $instance->setContainer(($container->privates['.service_locator.Z7xq1n_'] ?? $container->load('get_ServiceLocator_Z7xq1nService'))->withContext('App\\Controller\\Admin\\ProCrudController', $container));

        return $instance;
    }
}
