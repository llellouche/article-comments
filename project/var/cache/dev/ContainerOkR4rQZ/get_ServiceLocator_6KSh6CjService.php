<?php

namespace ContainerOkR4rQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6KSh6CjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6KSh6Cj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6KSh6Cj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]);
    }
}
