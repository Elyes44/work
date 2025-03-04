<?php

namespace ContainerVx88AjP;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LmGj34aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lmGj34a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lmGj34a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'rendezVousRepository' => ['privates', 'App\\Repository\\RendezVousRepository', 'getRendezVousRepositoryService', true],
        ], [
            'paginator' => '?',
            'rendezVousRepository' => 'App\\Repository\\RendezVousRepository',
        ]);
    }
}
