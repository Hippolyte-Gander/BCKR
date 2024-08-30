<?php

namespace Container0x6DeKA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HrDCg3QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HrDCg3Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HrDCg3Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentaire' => ['privates', '.errored..service_locator.HrDCg3Q.App\\Entity\\Commentaire', NULL, 'Cannot autowire service ".service_locator.HrDCg3Q": it needs an instance of "App\\Entity\\Commentaire" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'commentaire' => 'App\\Entity\\Commentaire',
            'entityManager' => '?',
        ]);
    }
}
