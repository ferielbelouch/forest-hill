<?php

namespace ContainerFG5eGxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Orm/EntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Orm/EntityRepository.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? self::getEntityFactoryService($container)), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] ?? $container->load('getFormFactoryService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}