<?php

namespace ContainerOkR4rQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFacebookAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\FacebookAuthenticator' shared autowired service.
     *
     * @return \App\Security\FacebookAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Security/Helper/FinishRegistrationBehavior.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Security/Helper/PreviousUrlHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Security/Helper/SaveAuthFailureMessage.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Security/Authenticator/OAuth2Authenticator.php';
        include_once \dirname(__DIR__, 4).'/src/Security/FacebookAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/ClientRegistry.php';

        return $container->privates['App\\Security\\FacebookAuthenticator'] = new \App\Security\FacebookAuthenticator(($container->services['knpu.oauth2.registry'] ??= new \KnpU\OAuth2ClientBundle\Client\ClientRegistry($container, ['facebook_main' => 'knpu.oauth2.client.facebook_main', 'google' => 'knpu.oauth2.client.google'])), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['router'] ?? $container->getRouterService()));
    }
}
