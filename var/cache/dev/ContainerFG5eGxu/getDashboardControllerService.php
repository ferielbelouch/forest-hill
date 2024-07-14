<?php

namespace ContainerFG5eGxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractDashboardController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/DashboardController.php';

        $container->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController((isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']($container) : self::getAdminUrlGeneratorService($container)), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'router' => ['services', 'router', 'getRouterService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'twig' => ['privates', 'twig', 'getTwigService', false],
            'form.factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'web_link.http_header_serializer' => ['privates', 'web_link.http_header_serializer', 'getWebLink_HttpHeaderSerializerService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
        ], [
            'router' => '?',
            'request_stack' => '?',
            'http_kernel' => '?',
            'serializer' => '?',
            'security.authorization_checker' => '?',
            'twig' => '?',
            'form.factory' => '?',
            'security.token_storage' => '?',
            'security.csrf.token_manager' => '?',
            'parameter_bag' => '?',
            'web_link.http_header_serializer' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
        ]))->withContext('App\\Controller\\Admin\\DashboardController', $container));

        return $instance;
    }
}
