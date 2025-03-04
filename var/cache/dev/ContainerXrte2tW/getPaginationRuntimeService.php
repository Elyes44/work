<?php

namespace ContainerXrte2tW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaginationRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PaginationRuntime.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Processor.php';

        return $container->privates['Knp\\Bundle\\PaginatorBundle\\Twig\\Extension\\PaginationRuntime'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime(new \Knp\Bundle\PaginatorBundle\Helper\Processor(($container->services['router'] ?? self::getRouterService($container)), ($container->services['translator'] ?? self::getTranslatorService($container))), 'page', false);
    }
}
