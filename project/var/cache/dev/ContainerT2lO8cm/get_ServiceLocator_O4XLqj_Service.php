<?php

namespace ContainerT2lO8cm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O4XLqj_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o4XLqj.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o4XLqj.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleService' => ['privates', 'App\\Service\\ArticleService', 'getArticleServiceService', true],
        ], [
            'articleService' => 'App\\Service\\ArticleService',
        ]);
    }
}
