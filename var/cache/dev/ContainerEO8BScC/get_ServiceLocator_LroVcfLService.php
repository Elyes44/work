<?php

namespace ContainerEO8BScC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LroVcfLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LroVcfL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LroVcfL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'servicesRepository' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService', true],
        ], [
            'servicesRepository' => 'App\\Repository\\ServicesRepository',
        ]);
    }
}
