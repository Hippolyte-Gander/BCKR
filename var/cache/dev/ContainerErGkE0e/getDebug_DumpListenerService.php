<?php

namespace ContainerErGkE0e;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_DumpListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DumpListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextualizedDumper.php';

        return $container->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($container->services['var_dumper.cloner'] ?? self::getVarDumper_ClonerService($container)), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($container->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $container->load('getVarDumper_ContextualizedCliDumper_InnerService')), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container)))]), ($container->privates['var_dumper.server_connection'] ?? self::getVarDumper_ServerConnectionService($container)));
    }
}
