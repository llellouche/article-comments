<?php

namespace ContainerOkR4rQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        return $container->privates['security.authenticator.manager.api'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => ($container->privates['App\\Security\\ApiAuthenticator'] ?? $container->load('getApiAuthenticatorService'))], ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.event_dispatcher.api'] ?? $container->getSecurity_EventDispatcher_ApiService()), 'api', ($container->privates['logger'] ?? $container->getLoggerService()), true, true, []);
    }
}
