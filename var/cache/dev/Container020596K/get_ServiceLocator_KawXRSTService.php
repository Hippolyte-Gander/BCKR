<?php

namespace Container020596K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KawXRSTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kawXRST' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kawXRST'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController::new_edit' => ['privates', '.service_locator.EMuVimD', 'get_ServiceLocator_EMuVimDService', true],
            'App\\Controller\\EvenementController::nextEvents' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.td4zu.o', 'get_ServiceLocator_Td4zu_OService', true],
            'App\\Controller\\EvenementController::supprEvenement' => ['privates', '.service_locator.JFCU_Ej', 'get_ServiceLocator_JFCUEjService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\MembreController::index' => ['privates', '.service_locator.0OOzoxv', 'get_ServiceLocator_0OOzoxvService', true],
            'App\\Controller\\MembreController::show' => ['privates', '.service_locator.0OOzoxv', 'get_ServiceLocator_0OOzoxvService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController:new_edit' => ['privates', '.service_locator.EMuVimD', 'get_ServiceLocator_EMuVimDService', true],
            'App\\Controller\\EvenementController:nextEvents' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.td4zu.o', 'get_ServiceLocator_Td4zu_OService', true],
            'App\\Controller\\EvenementController:supprEvenement' => ['privates', '.service_locator.JFCU_Ej', 'get_ServiceLocator_JFCUEjService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\MembreController:index' => ['privates', '.service_locator.0OOzoxv', 'get_ServiceLocator_0OOzoxvService', true],
            'App\\Controller\\MembreController:show' => ['privates', '.service_locator.0OOzoxv', 'get_ServiceLocator_0OOzoxvService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::new_edit' => '?',
            'App\\Controller\\EvenementController::nextEvents' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\EvenementController::supprEvenement' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\MembreController::index' => '?',
            'App\\Controller\\MembreController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:new_edit' => '?',
            'App\\Controller\\EvenementController:nextEvents' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\EvenementController:supprEvenement' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\MembreController:index' => '?',
            'App\\Controller\\MembreController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
