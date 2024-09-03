<?php

namespace ContainerYUsqsBA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KuUfZEqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kuUfZEq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kuUfZEq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jwt' => ['privates', 'App\\Service\\JWTService', 'getJWTServiceService', true],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'em' => '?',
            'jwt' => 'App\\Service\\JWTService',
            'passwordHasher' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
