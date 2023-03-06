<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerT2lO8cm\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerT2lO8cm/EntityManagerGhost51e8656.php';
require __DIR__.'/ContainerT2lO8cm/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerT2lO8cm/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerT2lO8cm/getTwigService.php';
require __DIR__.'/ContainerT2lO8cm/getSession_FactoryService.php';
require __DIR__.'/ContainerT2lO8cm/getServicesResetterService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_UserCheckerService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_UserChecker_PublicService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_Session_PublicService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_Session_ApiService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_HelperService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Firewall_Map_Context_PublicService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Firewall_EventDispatcherLocatorService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Authenticator_ManagersLocatorService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Authenticator_Manager_PublicService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Authenticator_Manager_ApiService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_Authentication_SessionStrategyService.php';
require __DIR__.'/ContainerT2lO8cm/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerT2lO8cm/getSecrets_VaultService.php';
require __DIR__.'/ContainerT2lO8cm/getRouting_LoaderService.php';
require __DIR__.'/ContainerT2lO8cm/getKnpu_Oauth2_RegistryService.php';
require __DIR__.'/ContainerT2lO8cm/getKnpu_Oauth2_ProviderFactoryService.php';
require __DIR__.'/ContainerT2lO8cm/getKnpu_Oauth2_Client_GoogleService.php';
require __DIR__.'/ContainerT2lO8cm/getKnpu_Oauth2_Client_FacebookMainService.php';
require __DIR__.'/ContainerT2lO8cm/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerT2lO8cm/getErrorControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerT2lO8cm/getDoctrineService.php';
require __DIR__.'/ContainerT2lO8cm/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerT2lO8cm/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerT2lO8cm/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerT2lO8cm/getDebug_Security_Firewall_Authenticator_PublicService.php';
require __DIR__.'/ContainerT2lO8cm/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerT2lO8cm/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerT2lO8cm/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerT2lO8cm/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerT2lO8cm/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerT2lO8cm/getCache_SystemClearerService.php';
require __DIR__.'/ContainerT2lO8cm/getCache_SystemService.php';
require __DIR__.'/ContainerT2lO8cm/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerT2lO8cm/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerT2lO8cm/getCache_AppClearerService.php';
require __DIR__.'/ContainerT2lO8cm/getCache_AppService.php';
require __DIR__.'/ContainerT2lO8cm/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerT2lO8cm/getTemplateControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getRedirectControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getCommentsRatesServiceService.php';
require __DIR__.'/ContainerT2lO8cm/getCommentServiceService.php';
require __DIR__.'/ContainerT2lO8cm/getArticleServiceService.php';
require __DIR__.'/ContainerT2lO8cm/getGoogleAuthenticatorService.php';
require __DIR__.'/ContainerT2lO8cm/getFacebookAuthenticatorService.php';
require __DIR__.'/ContainerT2lO8cm/getApiAuthenticatorService.php';
require __DIR__.'/ContainerT2lO8cm/getUserRepositoryService.php';
require __DIR__.'/ContainerT2lO8cm/getCommentsRatesRepositoryService.php';
require __DIR__.'/ContainerT2lO8cm/getCommentRepositoryService.php';
require __DIR__.'/ContainerT2lO8cm/getCommentAnswerRepositoryService.php';
require __DIR__.'/ContainerT2lO8cm/getArticleRepositoryService.php';
require __DIR__.'/ContainerT2lO8cm/getArticleCommentRepositoryService.php';
require __DIR__.'/ContainerT2lO8cm/getBlogControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getGoogleControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getFacebookControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getCommentApiControllerService.php';
require __DIR__.'/ContainerT2lO8cm/getArticleApiControllerService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_UMNmJWuService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_O4XLqj_Service.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_M3hEUydService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_L_CnW1LService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_HokdgZZService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_EbTfwDnService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_CshazM0Service.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_6rrIHwIService.php';
require __DIR__.'/ContainerT2lO8cm/get_ServiceLocator_6KSh6CjService.php';
require __DIR__.'/ContainerT2lO8cm/get_Security_RequestMatcher_Vhy2oy3Service.php';
require __DIR__.'/ContainerT2lO8cm/get_Security_RequestMatcher_KLbKLHaService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'KnpU\OAuth2ClientBundle\KnpUOAuth2ClientBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\Api\ArticleApiController';
$classes[] = 'App\Controller\Api\CommentApiController';
$classes[] = 'App\Controller\Auth\FacebookController';
$classes[] = 'App\Controller\Auth\GoogleController';
$classes[] = 'App\Controller\Site\BlogController';
$classes[] = 'App\Repository\ArticleCommentRepository';
$classes[] = 'App\Repository\ArticleRepository';
$classes[] = 'App\Repository\CommentAnswerRepository';
$classes[] = 'App\Repository\CommentRepository';
$classes[] = 'App\Repository\CommentsRatesRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\ApiAuthenticator';
$classes[] = 'App\Security\FacebookAuthenticator';
$classes[] = 'App\Security\GoogleAuthenticator';
$classes[] = 'App\Service\ArticleService';
$classes[] = 'App\Service\CommentService';
$classes[] = 'App\Service\CommentsRatesService';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'KnpU\OAuth2ClientBundle\Client\Provider\FacebookClient';
$classes[] = 'League\OAuth2\Client\Provider\Facebook';
$classes[] = 'KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient';
$classes[] = 'League\OAuth2\Client\Provider\Google';
$classes[] = 'KnpU\OAuth2ClientBundle\DependencyInjection\ProviderFactory';
$classes[] = 'KnpU\OAuth2ClientBundle\Client\ClientRegistry';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Core\User\ChainUserProvider';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
