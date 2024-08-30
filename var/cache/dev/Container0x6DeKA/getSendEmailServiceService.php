<?php

namespace Container0x6DeKA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendEmailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\SendEmailService' shared autowired service.
     *
     * @return \App\Service\SendEmailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SendEmailService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Service\\SendEmailService'])) {
            return $container->privates['App\\Service\\SendEmailService'];
        }

        return $container->privates['App\\Service\\SendEmailService'] = new \App\Service\SendEmailService($a);
    }
}
