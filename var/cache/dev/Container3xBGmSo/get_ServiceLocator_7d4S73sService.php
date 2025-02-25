<?php

namespace Container3xBGmSo;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7d4S73sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7d4S73s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7d4S73s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\ServicesRepository',
        ]);
    }
}
