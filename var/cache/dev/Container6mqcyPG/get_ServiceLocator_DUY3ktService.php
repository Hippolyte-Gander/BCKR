<?php

namespace Container6mqcyPG;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DUY3ktService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d_UY3kt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d_UY3kt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.d_UY3kt.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.d_UY3kt": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
