<?php

namespace ContainerUDxwZ13;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appProdProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    /*
     * @internal but protected for BC on cache:clear
     */
    protected $privates = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'sm.callback_factory' => 'getSm_CallbackFactoryService',
            'sm.factory' => 'getSm_FactoryService',
            'sylius.context.cart' => 'getSylius_Context_CartService',
            'sylius.context.cart.customer_and_channel_based' => 'getSylius_Context_Cart_CustomerAndChannelBasedService',
            'sylius.context.cart.new' => 'getSylius_Context_Cart_NewService',
            'sylius.context.cart.session_and_channel_based' => 'getSylius_Context_Cart_SessionAndChannelBasedService',
            'sylius.context.channel' => 'getSylius_Context_ChannelService',
            'sylius.context.channel.fake_channel.persister' => 'getSylius_Context_Channel_FakeChannel_PersisterService',
            'sylius.context.channel.request_based.resolver' => 'getSylius_Context_Channel_RequestBased_ResolverService',
            'sylius.context.currency.channel_aware' => 'getSylius_Context_Currency_ChannelAwareService',
            'sylius.context.currency.storage_based' => 'getSylius_Context_Currency_StorageBasedService',
            'sylius.context.customer' => 'getSylius_Context_CustomerService',
            'sylius.context.locale' => 'getSylius_Context_LocaleService',
            'sylius.context.locale.admin_based' => 'getSylius_Context_Locale_AdminBasedService',
            'sylius.context.locale.provider_based' => 'getSylius_Context_Locale_ProviderBasedService',
            'sylius.context.locale.request_based' => 'getSylius_Context_Locale_RequestBasedService',
            'sylius.context.shopper' => 'getSylius_Context_ShopperService',
            'sylius.doctrine.orm.event_subscriber.load_metadata.attribute' => 'getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService',
            'sylius.doctrine.orm.event_subscriber.load_metadata.review' => 'getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService',
            'sylius.event_subscriber.orm_mapped_super_class' => 'getSylius_EventSubscriber_OrmMappedSuperClassService',
            'sylius.event_subscriber.orm_repository_class' => 'getSylius_EventSubscriber_OrmRepositoryClassService',
            'sylius.factory.order' => 'getSylius_Factory_OrderService',
            'sylius.factory.theme' => 'getSylius_Factory_ThemeService',
            'sylius.listener.non_channel_request_locale' => 'getSylius_Listener_NonChannelRequestLocaleService',
            'sylius.listener.request_locale_setter' => 'getSylius_Listener_RequestLocaleSetterService',
            'sylius.listener.session_cart' => 'getSylius_Listener_SessionCartService',
            'sylius.locale_provider.channel_based' => 'getSylius_LocaleProvider_ChannelBasedService',
            'sylius.repository.channel' => 'getSylius_Repository_ChannelService',
            'sylius.repository.order' => 'getSylius_Repository_OrderService',
            'sylius.repository.theme' => 'getSylius_Repository_ThemeService',
            'sylius.storage.cart_session' => 'getSylius_Storage_CartSessionService',
            'sylius.storage.cookie' => 'getSylius_Storage_CookieService',
            'sylius.storage.currency' => 'getSylius_Storage_CurrencyService',
            'sylius.theme.configuration.provider' => 'getSylius_Theme_Configuration_ProviderService',
            'sylius.translation.translatable_listener.doctrine.orm' => 'getSylius_Translation_TranslatableListener_Doctrine_OrmService',
            'sylius.translator.listener' => 'getSylius_Translator_ListenerService',
            'translator' => 'getTranslatorService',
        );
        $this->fileMap = array(
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'getImagineControllerService.php',
            'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand' => 'getCreateClientCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand' => 'getCancelUnpaidOrdersCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand' => 'getCheckRequirementsCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand' => 'getInstallAssetsCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand' => 'getInstallCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand' => 'getInstallDatabaseCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand' => 'getInstallSampleDataCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand' => 'getSetupCommandService.php',
            'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand' => 'getRemoveExpiredCartsCommandService.php',
            'Sylius\\Bundle\\ThemeBundle\\Command\\AssetsInstallCommand' => 'getAssetsInstallCommandService.php',
            'Sylius\\Bundle\\ThemeBundle\\Command\\ListCommand' => 'getListCommandService.php',
            'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand' => 'getDemoteUserCommandService.php',
            'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand' => 'getPromoteUserCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'getDebugBlocksCommandService.php',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService.php',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService.php',
            'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesListCommand' => 'getFixturesListCommandService.php',
            'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesLoadCommand' => 'getFixturesLoadCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command.public_alias.fos_oauth_server.clean_command' => 'getConsole_Command_PublicAlias_FosOauthServer_CleanCommandService.php',
            'console.command.public_alias.fos_oauth_server.create_client_command' => 'getConsole_Command_PublicAlias_FosOauthServer_CreateClientCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine' => 'getDoctrineService.php',
            'doctrine_cache.providers.sylius_rbac' => 'getDoctrineCache_Providers_SyliusRbacService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'fos_oauth_server.controller.authorize' => 'getFosOauthServer_Controller_AuthorizeService.php',
            'fos_oauth_server.controller.token' => 'getFosOauthServer_Controller_TokenService.php',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService.php',
            'fos_rest.exception.twig_controller' => 'getFosRest_Exception_TwigControllerService.php',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'gaufrette.sylius_image_filesystem' => 'getGaufrette_SyliusImageFilesystemService.php',
            'hateoas.event_subscriber.json' => 'getHateoas_EventSubscriber_JsonService.php',
            'hateoas.event_subscriber.xml' => 'getHateoas_EventSubscriber_XmlService.php',
            'hateoas.expression.link' => 'getHateoas_Expression_LinkService.php',
            'hateoas.generator.registry' => 'getHateoas_Generator_RegistryService.php',
            'hateoas.helper.link' => 'getHateoas_Helper_LinkService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService.php',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService.php',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService.php',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService.php',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService.php',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService.php',
            'liip_imagine.command.remove_cache_command' => 'getLiipImagine_Command_RemoveCacheCommandService.php',
            'liip_imagine.command.resolve_cache_command' => 'getLiipImagine_Command_ResolveCacheCommandService.php',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService.php',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService.php',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService.php',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService.php',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService.php',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService.php',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService.php',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService.php',
            'payum' => 'getPayumService.php',
            'payum.action.get_http_request' => 'getPayum_Action_GetHttpRequestService.php',
            'payum.action.obtain_credit_card_builder' => 'getPayum_Action_ObtainCreditCardBuilderService.php',
            'payum.builder' => 'getPayum_BuilderService.php',
            'payum.converter.reply_to_http_response' => 'getPayum_Converter_ReplyToHttpResponseService.php',
            'payum.dynamic_gateways.config_storage' => 'getPayum_DynamicGateways_ConfigStorageService.php',
            'payum.dynamic_registry' => 'getPayum_DynamicRegistryService.php',
            'payum.extension.logger' => 'getPayum_Extension_LoggerService.php',
            'payum.extension.storage.sylius_component_core_model_order' => 'getPayum_Extension_Storage_SyliusComponentCoreModelOrderService.php',
            'payum.extension.storage.sylius_component_core_model_payment' => 'getPayum_Extension_Storage_SyliusComponentCoreModelPaymentService.php',
            'payum.form.extension.gateway_factories_choice' => 'getPayum_Form_Extension_GatewayFactoriesChoiceService.php',
            'payum.form.type.credit_card' => 'getPayum_Form_Type_CreditCardService.php',
            'payum.form.type.credit_card_expiration_date' => 'getPayum_Form_Type_CreditCardExpirationDateService.php',
            'payum.form.type.gateway_config' => 'getPayum_Form_Type_GatewayConfigService.php',
            'payum.form.type.gateway_factories_choice' => 'getPayum_Form_Type_GatewayFactoriesChoiceService.php',
            'payum.listener.reply_to_http_response' => 'getPayum_Listener_ReplyToHttpResponseService.php',
            'payum.security.token_storage' => 'getPayum_Security_TokenStorageService.php',
            'payum.static_registry' => 'getPayum_StaticRegistryService.php',
            'payum.storage.sylius_bundle_payumbundle_model_gatewayconfig' => 'getPayum_Storage_SyliusBundlePayumbundleModelGatewayconfigService.php',
            'payum.storage.sylius_bundle_payumbundle_model_paymentsecuritytoken' => 'getPayum_Storage_SyliusBundlePayumbundleModelPaymentsecuritytokenService.php',
            'payum.storage.sylius_component_core_model_order' => 'getPayum_Storage_SyliusComponentCoreModelOrderService.php',
            'payum.storage.sylius_component_core_model_payment' => 'getPayum_Storage_SyliusComponentCoreModelPaymentService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'sm.callback.cascade_transition' => 'getSm_Callback_CascadeTransitionService.php',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.manager' => 'getSonata_Block_ManagerService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService.php',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService.php',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService.php',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService.php',
            'sonata.intl.locale_detector.request_stack' => 'getSonata_Intl_LocaleDetector_RequestStackService.php',
            'sonata.intl.templating.helper.datetime' => 'getSonata_Intl_Templating_Helper_DatetimeService.php',
            'sonata.intl.templating.helper.locale' => 'getSonata_Intl_Templating_Helper_LocaleService.php',
            'sonata.intl.templating.helper.number' => 'getSonata_Intl_Templating_Helper_NumberService.php',
            'sonata.intl.timezone_detector.chain' => 'getSonata_Intl_TimezoneDetector_ChainService.php',
            'sonata.intl.timezone_detector.locale' => 'getSonata_Intl_TimezoneDetector_LocaleService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'sylius.active_promotions_provider' => 'getSylius_ActivePromotionsProviderService.php',
            'sylius.address_comparator' => 'getSylius_AddressComparatorService.php',
            'sylius.adjustments_aggregator' => 'getSylius_AdjustmentsAggregatorService.php',
            'sylius.admin.menu_builder.customer.show' => 'getSylius_Admin_MenuBuilder_Customer_ShowService.php',
            'sylius.admin.menu_builder.main' => 'getSylius_Admin_MenuBuilder_MainService.php',
            'sylius.admin.menu_builder.order.show' => 'getSylius_Admin_MenuBuilder_Order_ShowService.php',
            'sylius.admin.menu_builder.product_form' => 'getSylius_Admin_MenuBuilder_ProductFormService.php',
            'sylius.admin.menu_builder.product_variant_form' => 'getSylius_Admin_MenuBuilder_ProductVariantFormService.php',
            'sylius.admin_user.pin_generator.password_reset' => 'getSylius_AdminUser_PinGenerator_PasswordResetService.php',
            'sylius.admin_user.token_generator.email_verification' => 'getSylius_AdminUser_TokenGenerator_EmailVerificationService.php',
            'sylius.admin_user.token_generator.password_reset' => 'getSylius_AdminUser_TokenGenerator_PasswordResetService.php',
            'sylius.attribute_type.checkbox' => 'getSylius_AttributeType_CheckboxService.php',
            'sylius.attribute_type.date' => 'getSylius_AttributeType_DateService.php',
            'sylius.attribute_type.datetime' => 'getSylius_AttributeType_DatetimeService.php',
            'sylius.attribute_type.integer' => 'getSylius_AttributeType_IntegerService.php',
            'sylius.attribute_type.percent' => 'getSylius_AttributeType_PercentService.php',
            'sylius.attribute_type.select' => 'getSylius_AttributeType_SelectService.php',
            'sylius.attribute_type.select.value.translations' => 'getSylius_AttributeType_Select_Value_TranslationsService.php',
            'sylius.attribute_type.text' => 'getSylius_AttributeType_TextService.php',
            'sylius.attribute_type.textarea' => 'getSylius_AttributeType_TextareaService.php',
            'sylius.availability_checker.default' => 'getSylius_AvailabilityChecker_DefaultService.php',
            'sylius.average_rating_calculator' => 'getSylius_AverageRatingCalculatorService.php',
            'sylius.calculator.product_variant_price' => 'getSylius_Calculator_ProductVariantPriceService.php',
            'sylius.canonicalizer' => 'getSylius_CanonicalizerService.php',
            'sylius.checker.order_payment_method_selection_requirement' => 'getSylius_Checker_OrderPaymentMethodSelectionRequirementService.php',
            'sylius.checker.order_shipping_method_selection_requirement' => 'getSylius_Checker_OrderShippingMethodSelectionRequirementService.php',
            'sylius.checker.product_variants_parity' => 'getSylius_Checker_ProductVariantsParityService.php',
            'sylius.commands_provider.database_setup' => 'getSylius_CommandsProvider_DatabaseSetupService.php',
            'sylius.console.command.resource_debug' => 'getSylius_Console_Command_ResourceDebugService.php',
            'sylius.controller.address' => 'getSylius_Controller_AddressService.php',
            'sylius.controller.address_log_entry' => 'getSylius_Controller_AddressLogEntryService.php',
            'sylius.controller.adjustment' => 'getSylius_Controller_AdjustmentService.php',
            'sylius.controller.admin.dashboard' => 'getSylius_Controller_Admin_DashboardService.php',
            'sylius.controller.admin.notification' => 'getSylius_Controller_Admin_NotificationService.php',
            'sylius.controller.admin_user' => 'getSylius_Controller_AdminUserService.php',
            'sylius.controller.api_access_token' => 'getSylius_Controller_ApiAccessTokenService.php',
            'sylius.controller.api_auth_code' => 'getSylius_Controller_ApiAuthCodeService.php',
            'sylius.controller.api_client' => 'getSylius_Controller_ApiClientService.php',
            'sylius.controller.api_refresh_token' => 'getSylius_Controller_ApiRefreshTokenService.php',
            'sylius.controller.channel' => 'getSylius_Controller_ChannelService.php',
            'sylius.controller.channel_pricing' => 'getSylius_Controller_ChannelPricingService.php',
            'sylius.controller.country' => 'getSylius_Controller_CountryService.php',
            'sylius.controller.currency' => 'getSylius_Controller_CurrencyService.php',
            'sylius.controller.customer' => 'getSylius_Controller_CustomerService.php',
            'sylius.controller.customer_group' => 'getSylius_Controller_CustomerGroupService.php',
            'sylius.controller.customer_statistics' => 'getSylius_Controller_CustomerStatisticsService.php',
            'sylius.controller.exchange_rate' => 'getSylius_Controller_ExchangeRateService.php',
            'sylius.controller.gateway_config' => 'getSylius_Controller_GatewayConfigService.php',
            'sylius.controller.impersonate_user' => 'getSylius_Controller_ImpersonateUserService.php',
            'sylius.controller.inventory_unit' => 'getSylius_Controller_InventoryUnitService.php',
            'sylius.controller.locale' => 'getSylius_Controller_LocaleService.php',
            'sylius.controller.oauth_user' => 'getSylius_Controller_OauthUserService.php',
            'sylius.controller.order' => 'getSylius_Controller_OrderService.php',
            'sylius.controller.order_item' => 'getSylius_Controller_OrderItemService.php',
            'sylius.controller.order_item_unit' => 'getSylius_Controller_OrderItemUnitService.php',
            'sylius.controller.payment' => 'getSylius_Controller_PaymentService.php',
            'sylius.controller.payment_method' => 'getSylius_Controller_PaymentMethodService.php',
            'sylius.controller.payment_method_translation' => 'getSylius_Controller_PaymentMethodTranslationService.php',
            'sylius.controller.payment_security_token' => 'getSylius_Controller_PaymentSecurityTokenService.php',
            'sylius.controller.payum' => 'getSylius_Controller_PayumService.php',
            'sylius.controller.product' => 'getSylius_Controller_ProductService.php',
            'sylius.controller.product_association' => 'getSylius_Controller_ProductAssociationService.php',
            'sylius.controller.product_association_type' => 'getSylius_Controller_ProductAssociationTypeService.php',
            'sylius.controller.product_association_type_translation' => 'getSylius_Controller_ProductAssociationTypeTranslationService.php',
            'sylius.controller.product_attribute' => 'getSylius_Controller_ProductAttributeService.php',
            'sylius.controller.product_attribute_translation' => 'getSylius_Controller_ProductAttributeTranslationService.php',
            'sylius.controller.product_attribute_value' => 'getSylius_Controller_ProductAttributeValueService.php',
            'sylius.controller.product_image' => 'getSylius_Controller_ProductImageService.php',
            'sylius.controller.product_option' => 'getSylius_Controller_ProductOptionService.php',
            'sylius.controller.product_option_translation' => 'getSylius_Controller_ProductOptionTranslationService.php',
            'sylius.controller.product_option_value' => 'getSylius_Controller_ProductOptionValueService.php',
            'sylius.controller.product_option_value_translation' => 'getSylius_Controller_ProductOptionValueTranslationService.php',
            'sylius.controller.product_review' => 'getSylius_Controller_ProductReviewService.php',
            'sylius.controller.product_slug' => 'getSylius_Controller_ProductSlugService.php',
            'sylius.controller.product_taxon' => 'getSylius_Controller_ProductTaxonService.php',
            'sylius.controller.product_translation' => 'getSylius_Controller_ProductTranslationService.php',
            'sylius.controller.product_variant' => 'getSylius_Controller_ProductVariantService.php',
            'sylius.controller.product_variant_translation' => 'getSylius_Controller_ProductVariantTranslationService.php',
            'sylius.controller.promotion' => 'getSylius_Controller_PromotionService.php',
            'sylius.controller.promotion_action' => 'getSylius_Controller_PromotionActionService.php',
            'sylius.controller.promotion_coupon' => 'getSylius_Controller_PromotionCouponService.php',
            'sylius.controller.promotion_rule' => 'getSylius_Controller_PromotionRuleService.php',
            'sylius.controller.province' => 'getSylius_Controller_ProvinceService.php',
            'sylius.controller.security' => 'getSylius_Controller_SecurityService.php',
            'sylius.controller.shipment' => 'getSylius_Controller_ShipmentService.php',
            'sylius.controller.shipment_unit' => 'getSylius_Controller_ShipmentUnitService.php',
            'sylius.controller.shipping_category' => 'getSylius_Controller_ShippingCategoryService.php',
            'sylius.controller.shipping_method' => 'getSylius_Controller_ShippingMethodService.php',
            'sylius.controller.shipping_method_translation' => 'getSylius_Controller_ShippingMethodTranslationService.php',
            'sylius.controller.shop.contact' => 'getSylius_Controller_Shop_ContactService.php',
            'sylius.controller.shop.currency_switch' => 'getSylius_Controller_Shop_CurrencySwitchService.php',
            'sylius.controller.shop.homepage' => 'getSylius_Controller_Shop_HomepageService.php',
            'sylius.controller.shop.locale_switch' => 'getSylius_Controller_Shop_LocaleSwitchService.php',
            'sylius.controller.shop.security_widget' => 'getSylius_Controller_Shop_SecurityWidgetService.php',
            'sylius.controller.shop_user' => 'getSylius_Controller_ShopUserService.php',
            'sylius.controller.show_available_payment_methods' => 'getSylius_Controller_ShowAvailablePaymentMethodsService.php',
            'sylius.controller.show_available_shipping_methods' => 'getSylius_Controller_ShowAvailableShippingMethodsService.php',
            'sylius.controller.tax_category' => 'getSylius_Controller_TaxCategoryService.php',
            'sylius.controller.tax_rate' => 'getSylius_Controller_TaxRateService.php',
            'sylius.controller.taxon' => 'getSylius_Controller_TaxonService.php',
            'sylius.controller.taxon_image' => 'getSylius_Controller_TaxonImageService.php',
            'sylius.controller.taxon_slug' => 'getSylius_Controller_TaxonSlugService.php',
            'sylius.controller.taxon_translation' => 'getSylius_Controller_TaxonTranslationService.php',
            'sylius.controller.update_product_taxon_position' => 'getSylius_Controller_UpdateProductTaxonPositionService.php',
            'sylius.controller.user_security' => 'getSylius_Controller_UserSecurityService.php',
            'sylius.controller.zone' => 'getSylius_Controller_ZoneService.php',
            'sylius.controller.zone_member' => 'getSylius_Controller_ZoneMemberService.php',
            'sylius.converter.country_name' => 'getSylius_Converter_CountryNameService.php',
            'sylius.currency_converter' => 'getSylius_CurrencyConverterService.php',
            'sylius.currency_name_converter' => 'getSylius_CurrencyNameConverterService.php',
            'sylius.custom_bulk_action_grid_renderer.twig' => 'getSylius_CustomBulkActionGridRenderer_TwigService.php',
            'sylius.custom_grid_renderer.twig' => 'getSylius_CustomGridRenderer_TwigService.php',
            'sylius.customer_ip_assigner' => 'getSylius_CustomerIpAssignerService.php',
            'sylius.customer_order_addresses_saver' => 'getSylius_CustomerOrderAddressesSaverService.php',
            'sylius.customer_statistics_provider' => 'getSylius_CustomerStatisticsProviderService.php',
            'sylius.customer_unique_address_adder' => 'getSylius_CustomerUniqueAddressAdderService.php',
            'sylius.dashboard.statistics_provider' => 'getSylius_Dashboard_StatisticsProviderService.php',
            'sylius.email_manager.contact' => 'getSylius_EmailManager_ContactService.php',
            'sylius.email_manager.order' => 'getSylius_EmailManager_OrderService.php',
            'sylius.email_manager.shipment' => 'getSylius_EmailManager_ShipmentService.php',
            'sylius.email_provider' => 'getSylius_EmailProviderService.php',
            'sylius.email_renderer.adapter.twig' => 'getSylius_EmailRenderer_Adapter_TwigService.php',
            'sylius.email_sender' => 'getSylius_EmailSenderService.php',
            'sylius.email_sender.adapter.swiftmailer' => 'getSylius_EmailSender_Adapter_SwiftmailerService.php',
            'sylius.event_subscriber.resource_delete' => 'getSylius_EventSubscriber_ResourceDeleteService.php',
            'sylius.expired_carts_remover' => 'getSylius_ExpiredCartsRemoverService.php',
            'sylius.factory.add_to_cart_command' => 'getSylius_Factory_AddToCartCommandService.php',
            'sylius.factory.address' => 'getSylius_Factory_AddressService.php',
            'sylius.factory.address_log_entry' => 'getSylius_Factory_AddressLogEntryService.php',
            'sylius.factory.adjustment' => 'getSylius_Factory_AdjustmentService.php',
            'sylius.factory.admin_user' => 'getSylius_Factory_AdminUserService.php',
            'sylius.factory.api_access_token' => 'getSylius_Factory_ApiAccessTokenService.php',
            'sylius.factory.api_auth_code' => 'getSylius_Factory_ApiAuthCodeService.php',
            'sylius.factory.api_client' => 'getSylius_Factory_ApiClientService.php',
            'sylius.factory.api_refresh_token' => 'getSylius_Factory_ApiRefreshTokenService.php',
            'sylius.factory.cart_item' => 'getSylius_Factory_CartItemService.php',
            'sylius.factory.channel' => 'getSylius_Factory_ChannelService.php',
            'sylius.factory.channel_pricing' => 'getSylius_Factory_ChannelPricingService.php',
            'sylius.factory.country' => 'getSylius_Factory_CountryService.php',
            'sylius.factory.currency' => 'getSylius_Factory_CurrencyService.php',
            'sylius.factory.customer' => 'getSylius_Factory_CustomerService.php',
            'sylius.factory.customer_group' => 'getSylius_Factory_CustomerGroupService.php',
            'sylius.factory.email' => 'getSylius_Factory_EmailService.php',
            'sylius.factory.exchange_rate' => 'getSylius_Factory_ExchangeRateService.php',
            'sylius.factory.gateway_config' => 'getSylius_Factory_GatewayConfigService.php',
            'sylius.factory.inventory_unit' => 'getSylius_Factory_InventoryUnitService.php',
            'sylius.factory.locale' => 'getSylius_Factory_LocaleService.php',
            'sylius.factory.oauth_user' => 'getSylius_Factory_OauthUserService.php',
            'sylius.factory.order_item_unit' => 'getSylius_Factory_OrderItemUnitService.php',
            'sylius.factory.order_sequence' => 'getSylius_Factory_OrderSequenceService.php',
            'sylius.factory.payment' => 'getSylius_Factory_PaymentService.php',
            'sylius.factory.payment_method' => 'getSylius_Factory_PaymentMethodService.php',
            'sylius.factory.payment_method_translation' => 'getSylius_Factory_PaymentMethodTranslationService.php',
            'sylius.factory.payment_security_token' => 'getSylius_Factory_PaymentSecurityTokenService.php',
            'sylius.factory.payum_get_status_action' => 'getSylius_Factory_PayumGetStatusActionService.php',
            'sylius.factory.payum_resolve_next_route' => 'getSylius_Factory_PayumResolveNextRouteService.php',
            'sylius.factory.product' => 'getSylius_Factory_ProductService.php',
            'sylius.factory.product_association' => 'getSylius_Factory_ProductAssociationService.php',
            'sylius.factory.product_association_type' => 'getSylius_Factory_ProductAssociationTypeService.php',
            'sylius.factory.product_association_type_translation' => 'getSylius_Factory_ProductAssociationTypeTranslationService.php',
            'sylius.factory.product_attribute' => 'getSylius_Factory_ProductAttributeService.php',
            'sylius.factory.product_attribute_translation' => 'getSylius_Factory_ProductAttributeTranslationService.php',
            'sylius.factory.product_attribute_value' => 'getSylius_Factory_ProductAttributeValueService.php',
            'sylius.factory.product_image' => 'getSylius_Factory_ProductImageService.php',
            'sylius.factory.product_option' => 'getSylius_Factory_ProductOptionService.php',
            'sylius.factory.product_option_translation' => 'getSylius_Factory_ProductOptionTranslationService.php',
            'sylius.factory.product_option_value' => 'getSylius_Factory_ProductOptionValueService.php',
            'sylius.factory.product_option_value_translation' => 'getSylius_Factory_ProductOptionValueTranslationService.php',
            'sylius.factory.product_review' => 'getSylius_Factory_ProductReviewService.php',
            'sylius.factory.product_reviewer' => 'getSylius_Factory_ProductReviewerService.php',
            'sylius.factory.product_taxon' => 'getSylius_Factory_ProductTaxonService.php',
            'sylius.factory.product_translation' => 'getSylius_Factory_ProductTranslationService.php',
            'sylius.factory.product_variant' => 'getSylius_Factory_ProductVariantService.php',
            'sylius.factory.product_variant_translation' => 'getSylius_Factory_ProductVariantTranslationService.php',
            'sylius.factory.promotion' => 'getSylius_Factory_PromotionService.php',
            'sylius.factory.promotion_action' => 'getSylius_Factory_PromotionActionService.php',
            'sylius.factory.promotion_coupon' => 'getSylius_Factory_PromotionCouponService.php',
            'sylius.factory.promotion_rule' => 'getSylius_Factory_PromotionRuleService.php',
            'sylius.factory.province' => 'getSylius_Factory_ProvinceService.php',
            'sylius.factory.shipment' => 'getSylius_Factory_ShipmentService.php',
            'sylius.factory.shipment_unit' => 'getSylius_Factory_ShipmentUnitService.php',
            'sylius.factory.shipping_category' => 'getSylius_Factory_ShippingCategoryService.php',
            'sylius.factory.shipping_method' => 'getSylius_Factory_ShippingMethodService.php',
            'sylius.factory.shipping_method_translation' => 'getSylius_Factory_ShippingMethodTranslationService.php',
            'sylius.factory.shop_user' => 'getSylius_Factory_ShopUserService.php',
            'sylius.factory.tax_category' => 'getSylius_Factory_TaxCategoryService.php',
            'sylius.factory.tax_rate' => 'getSylius_Factory_TaxRateService.php',
            'sylius.factory.taxon' => 'getSylius_Factory_TaxonService.php',
            'sylius.factory.taxon_image' => 'getSylius_Factory_TaxonImageService.php',
            'sylius.factory.taxon_translation' => 'getSylius_Factory_TaxonTranslationService.php',
            'sylius.factory.zone' => 'getSylius_Factory_ZoneService.php',
            'sylius.factory.zone_member' => 'getSylius_Factory_ZoneMemberService.php',
            'sylius.fixture.address' => 'getSylius_Fixture_AddressService.php',
            'sylius.fixture.admin_user' => 'getSylius_Fixture_AdminUserService.php',
            'sylius.fixture.api_access_token' => 'getSylius_Fixture_ApiAccessTokenService.php',
            'sylius.fixture.api_client' => 'getSylius_Fixture_ApiClientService.php',
            'sylius.fixture.book_product' => 'getSylius_Fixture_BookProductService.php',
            'sylius.fixture.channel' => 'getSylius_Fixture_ChannelService.php',
            'sylius.fixture.currency' => 'getSylius_Fixture_CurrencyService.php',
            'sylius.fixture.customer_group' => 'getSylius_Fixture_CustomerGroupService.php',
            'sylius.fixture.example_factory.address' => 'getSylius_Fixture_ExampleFactory_AddressService.php',
            'sylius.fixture.example_factory.admin_user' => 'getSylius_Fixture_ExampleFactory_AdminUserService.php',
            'sylius.fixture.example_factory.api_access_token' => 'getSylius_Fixture_ExampleFactory_ApiAccessTokenService.php',
            'sylius.fixture.example_factory.api_client' => 'getSylius_Fixture_ExampleFactory_ApiClientService.php',
            'sylius.fixture.example_factory.channel' => 'getSylius_Fixture_ExampleFactory_ChannelService.php',
            'sylius.fixture.example_factory.customer_group' => 'getSylius_Fixture_ExampleFactory_CustomerGroupService.php',
            'sylius.fixture.example_factory.payment_method' => 'getSylius_Fixture_ExampleFactory_PaymentMethodService.php',
            'sylius.fixture.example_factory.product' => 'getSylius_Fixture_ExampleFactory_ProductService.php',
            'sylius.fixture.example_factory.product_association' => 'getSylius_Fixture_ExampleFactory_ProductAssociationService.php',
            'sylius.fixture.example_factory.product_association_type' => 'getSylius_Fixture_ExampleFactory_ProductAssociationTypeService.php',
            'sylius.fixture.example_factory.product_attribute' => 'getSylius_Fixture_ExampleFactory_ProductAttributeService.php',
            'sylius.fixture.example_factory.product_option' => 'getSylius_Fixture_ExampleFactory_ProductOptionService.php',
            'sylius.fixture.example_factory.product_review' => 'getSylius_Fixture_ExampleFactory_ProductReviewService.php',
            'sylius.fixture.example_factory.promotion' => 'getSylius_Fixture_ExampleFactory_PromotionService.php',
            'sylius.fixture.example_factory.promotion_action' => 'getSylius_Fixture_ExampleFactory_PromotionActionService.php',
            'sylius.fixture.example_factory.promotion_rule' => 'getSylius_Fixture_ExampleFactory_PromotionRuleService.php',
            'sylius.fixture.example_factory.shipping_category' => 'getSylius_Fixture_ExampleFactory_ShippingCategoryService.php',
            'sylius.fixture.example_factory.shipping_method' => 'getSylius_Fixture_ExampleFactory_ShippingMethodService.php',
            'sylius.fixture.example_factory.shop_user' => 'getSylius_Fixture_ExampleFactory_ShopUserService.php',
            'sylius.fixture.example_factory.tax_category' => 'getSylius_Fixture_ExampleFactory_TaxCategoryService.php',
            'sylius.fixture.example_factory.tax_rate' => 'getSylius_Fixture_ExampleFactory_TaxRateService.php',
            'sylius.fixture.example_factory.taxon' => 'getSylius_Fixture_ExampleFactory_TaxonService.php',
            'sylius.fixture.geographical' => 'getSylius_Fixture_GeographicalService.php',
            'sylius.fixture.locale' => 'getSylius_Fixture_LocaleService.php',
            'sylius.fixture.mug_product' => 'getSylius_Fixture_MugProductService.php',
            'sylius.fixture.order' => 'getSylius_Fixture_OrderService.php',
            'sylius.fixture.payment_method' => 'getSylius_Fixture_PaymentMethodService.php',
            'sylius.fixture.product' => 'getSylius_Fixture_ProductService.php',
            'sylius.fixture.product_association' => 'getSylius_Fixture_ProductAssociationService.php',
            'sylius.fixture.product_association_type' => 'getSylius_Fixture_ProductAssociationTypeService.php',
            'sylius.fixture.product_attribute' => 'getSylius_Fixture_ProductAttributeService.php',
            'sylius.fixture.product_option' => 'getSylius_Fixture_ProductOptionService.php',
            'sylius.fixture.product_review' => 'getSylius_Fixture_ProductReviewService.php',
            'sylius.fixture.promotion' => 'getSylius_Fixture_PromotionService.php',
            'sylius.fixture.shipping_category' => 'getSylius_Fixture_ShippingCategoryService.php',
            'sylius.fixture.shipping_method' => 'getSylius_Fixture_ShippingMethodService.php',
            'sylius.fixture.shop_user' => 'getSylius_Fixture_ShopUserService.php',
            'sylius.fixture.similar_product_association' => 'getSylius_Fixture_SimilarProductAssociationService.php',
            'sylius.fixture.sticker_product' => 'getSylius_Fixture_StickerProductService.php',
            'sylius.fixture.tax_category' => 'getSylius_Fixture_TaxCategoryService.php',
            'sylius.fixture.tax_rate' => 'getSylius_Fixture_TaxRateService.php',
            'sylius.fixture.taxon' => 'getSylius_Fixture_TaxonService.php',
            'sylius.fixture.tshirt_product' => 'getSylius_Fixture_TshirtProductService.php',
            'sylius.form.data_mapper.order_item_quantity' => 'getSylius_Form_DataMapper_OrderItemQuantityService.php',
            'sylius.form.event_subscriber.build_promotion_action' => 'getSylius_Form_EventSubscriber_BuildPromotionActionService.php',
            'sylius.form.event_subscriber.build_promotion_rule' => 'getSylius_Form_EventSubscriber_BuildPromotionRuleService.php',
            'sylius.form.event_subscriber.product_variant_generator' => 'getSylius_Form_EventSubscriber_ProductVariantGeneratorService.php',
            'sylius.form.extension.type.api_order_item' => 'getSylius_Form_Extension_Type_ApiOrderItemService.php',
            'sylius.form.extension.type.cart' => 'getSylius_Form_Extension_Type_CartService.php',
            'sylius.form.extension.type.cart_item' => 'getSylius_Form_Extension_Type_CartItemService.php',
            'sylius.form.extension.type.channel' => 'getSylius_Form_Extension_Type_ChannelService.php',
            'sylius.form.extension.type.collection' => 'getSylius_Form_Extension_Type_CollectionService.php',
            'sylius.form.extension.type.country' => 'getSylius_Form_Extension_Type_CountryService.php',
            'sylius.form.extension.type.customer' => 'getSylius_Form_Extension_Type_CustomerService.php',
            'sylius.form.extension.type.gateway_config.crypted' => 'getSylius_Form_Extension_Type_GatewayConfig_CryptedService.php',
            'sylius.form.extension.type.locale' => 'getSylius_Form_Extension_Type_LocaleService.php',
            'sylius.form.extension.type.order' => 'getSylius_Form_Extension_Type_OrderService.php',
            'sylius.form.extension.type.payment_method' => 'getSylius_Form_Extension_Type_PaymentMethodService.php',
            'sylius.form.extension.type.product' => 'getSylius_Form_Extension_Type_ProductService.php',
            'sylius.form.extension.type.product_translation' => 'getSylius_Form_Extension_Type_ProductTranslationService.php',
            'sylius.form.extension.type.product_variant' => 'getSylius_Form_Extension_Type_ProductVariantService.php',
            'sylius.form.extension.type.product_variant_generation' => 'getSylius_Form_Extension_Type_ProductVariantGenerationService.php',
            'sylius.form.extension.type.promotion' => 'getSylius_Form_Extension_Type_PromotionService.php',
            'sylius.form.extension.type.promotion_coupon' => 'getSylius_Form_Extension_Type_PromotionCouponService.php',
            'sylius.form.extension.type.promotion_filter_collection' => 'getSylius_Form_Extension_Type_PromotionFilterCollectionService.php',
            'sylius.form.extension.type.shipping_method' => 'getSylius_Form_Extension_Type_ShippingMethodService.php',
            'sylius.form.extension.type.tax_rate' => 'getSylius_Form_Extension_Type_TaxRateService.php',
            'sylius.form.extension.type.taxon' => 'getSylius_Form_Extension_Type_TaxonService.php',
            'sylius.form.type.add_to_cart' => 'getSylius_Form_Type_AddToCartService.php',
            'sylius.form.type.address' => 'getSylius_Form_Type_AddressService.php',
            'sylius.form.type.address_choice' => 'getSylius_Form_Type_AddressChoiceService.php',
            'sylius.form.type.admin_user' => 'getSylius_Form_Type_AdminUserService.php',
            'sylius.form.type.api_checkout_address' => 'getSylius_Form_Type_ApiCheckoutAddressService.php',
            'sylius.form.type.api_client' => 'getSylius_Form_Type_ApiClientService.php',
            'sylius.form.type.api_customer' => 'getSylius_Form_Type_ApiCustomerService.php',
            'sylius.form.type.api_order' => 'getSylius_Form_Type_ApiOrderService.php',
            'sylius.form.type.api_order_item' => 'getSylius_Form_Type_ApiOrderItemService.php',
            'sylius.form.type.api_order_promotion_coupon' => 'getSylius_Form_Type_ApiOrderPromotionCouponService.php',
            'sylius.form.type.api_product' => 'getSylius_Form_Type_ApiProductService.php',
            'sylius.form.type.api_product_variant' => 'getSylius_Form_Type_ApiProductVariantService.php',
            'sylius.form.type.attribute_type.select' => 'getSylius_Form_Type_AttributeType_SelectService.php',
            'sylius.form.type.attribute_type.select.choices_collection' => 'getSylius_Form_Type_AttributeType_Select_ChoicesCollectionService.php',
            'sylius.form.type.attribute_type_choice' => 'getSylius_Form_Type_AttributeTypeChoiceService.php',
            'sylius.form.type.autocomplete_product_taxon_choice' => 'getSylius_Form_Type_AutocompleteProductTaxonChoiceService.php',
            'sylius.form.type.cart' => 'getSylius_Form_Type_CartService.php',
            'sylius.form.type.cart_item' => 'getSylius_Form_Type_CartItemService.php',
            'sylius.form.type.channel' => 'getSylius_Form_Type_ChannelService.php',
            'sylius.form.type.channel_based_shipping_calculator.flat_rate' => 'getSylius_Form_Type_ChannelBasedShippingCalculator_FlatRateService.php',
            'sylius.form.type.channel_based_shipping_calculator.per_unit_rate' => 'getSylius_Form_Type_ChannelBasedShippingCalculator_PerUnitRateService.php',
            'sylius.form.type.channel_choice' => 'getSylius_Form_Type_ChannelChoiceService.php',
            'sylius.form.type.channel_pricing' => 'getSylius_Form_Type_ChannelPricingService.php',
            'sylius.form.type.channels_collection' => 'getSylius_Form_Type_ChannelsCollectionService.php',
            'sylius.form.type.checkout_address' => 'getSylius_Form_Type_CheckoutAddressService.php',
            'sylius.form.type.checkout_complete' => 'getSylius_Form_Type_CheckoutCompleteService.php',
            'sylius.form.type.checkout_payment' => 'getSylius_Form_Type_CheckoutPaymentService.php',
            'sylius.form.type.checkout_select_payment' => 'getSylius_Form_Type_CheckoutSelectPaymentService.php',
            'sylius.form.type.checkout_select_shipping' => 'getSylius_Form_Type_CheckoutSelectShippingService.php',
            'sylius.form.type.checkout_shipment' => 'getSylius_Form_Type_CheckoutShipmentService.php',
            'sylius.form.type.country' => 'getSylius_Form_Type_CountryService.php',
            'sylius.form.type.country_choice' => 'getSylius_Form_Type_CountryChoiceService.php',
            'sylius.form.type.country_code_choice' => 'getSylius_Form_Type_CountryCodeChoiceService.php',
            'sylius.form.type.currency' => 'getSylius_Form_Type_CurrencyService.php',
            'sylius.form.type.currency_choice' => 'getSylius_Form_Type_CurrencyChoiceService.php',
            'sylius.form.type.customer' => 'getSylius_Form_Type_CustomerService.php',
            'sylius.form.type.customer_choice' => 'getSylius_Form_Type_CustomerChoiceService.php',
            'sylius.form.type.customer_group' => 'getSylius_Form_Type_CustomerGroupService.php',
            'sylius.form.type.customer_group_choice' => 'getSylius_Form_Type_CustomerGroupChoiceService.php',
            'sylius.form.type.customer_group_code_choice' => 'getSylius_Form_Type_CustomerGroupCodeChoiceService.php',
            'sylius.form.type.customer_guest' => 'getSylius_Form_Type_CustomerGuestService.php',
            'sylius.form.type.customer_profile' => 'getSylius_Form_Type_CustomerProfileService.php',
            'sylius.form.type.customer_registration' => 'getSylius_Form_Type_CustomerRegistrationService.php',
            'sylius.form.type.customer_simple_registration' => 'getSylius_Form_Type_CustomerSimpleRegistrationService.php',
            'sylius.form.type.data_transformer.product_variants_to_codes' => 'getSylius_Form_Type_DataTransformer_ProductVariantsToCodesService.php',
            'sylius.form.type.data_transformer.products_to_codes' => 'getSylius_Form_Type_DataTransformer_ProductsToCodesService.php',
            'sylius.form.type.data_transformer.products_to_product_associations' => 'getSylius_Form_Type_DataTransformer_ProductsToProductAssociationsService.php',
            'sylius.form.type.data_transformer.taxons_to_codes' => 'getSylius_Form_Type_DataTransformer_TaxonsToCodesService.php',
            'sylius.form.type.default' => 'getSylius_Form_Type_DefaultService.php',
            'sylius.form.type.exchange_rate' => 'getSylius_Form_Type_ExchangeRateService.php',
            'sylius.form.type.gateway_config' => 'getSylius_Form_Type_GatewayConfigService.php',
            'sylius.form.type.gateway_configuration.paypal' => 'getSylius_Form_Type_GatewayConfiguration_PaypalService.php',
            'sylius.form.type.gateway_configuration.stripe' => 'getSylius_Form_Type_GatewayConfiguration_StripeService.php',
            'sylius.form.type.grid_filter.boolean' => 'getSylius_Form_Type_GridFilter_BooleanService.php',
            'sylius.form.type.grid_filter.date' => 'getSylius_Form_Type_GridFilter_DateService.php',
            'sylius.form.type.grid_filter.entity' => 'getSylius_Form_Type_GridFilter_EntityService.php',
            'sylius.form.type.grid_filter.exists' => 'getSylius_Form_Type_GridFilter_ExistsService.php',
            'sylius.form.type.grid_filter.money' => 'getSylius_Form_Type_GridFilter_MoneyService.php',
            'sylius.form.type.grid_filter.string' => 'getSylius_Form_Type_GridFilter_StringService.php',
            'sylius.form.type.locale' => 'getSylius_Form_Type_LocaleService.php',
            'sylius.form.type.locale_choice' => 'getSylius_Form_Type_LocaleChoiceService.php',
            'sylius.form.type.money' => 'getSylius_Form_Type_MoneyService.php',
            'sylius.form.type.order' => 'getSylius_Form_Type_OrderService.php',
            'sylius.form.type.order_item' => 'getSylius_Form_Type_OrderItemService.php',
            'sylius.form.type.payment' => 'getSylius_Form_Type_PaymentService.php',
            'sylius.form.type.payment_gateway_choice' => 'getSylius_Form_Type_PaymentGatewayChoiceService.php',
            'sylius.form.type.payment_method' => 'getSylius_Form_Type_PaymentMethodService.php',
            'sylius.form.type.payment_method_choice' => 'getSylius_Form_Type_PaymentMethodChoiceService.php',
            'sylius.form.type.payment_method_translation' => 'getSylius_Form_Type_PaymentMethodTranslationService.php',
            'sylius.form.type.product' => 'getSylius_Form_Type_ProductService.php',
            'sylius.form.type.product_association' => 'getSylius_Form_Type_ProductAssociationService.php',
            'sylius.form.type.product_association_type' => 'getSylius_Form_Type_ProductAssociationTypeService.php',
            'sylius.form.type.product_association_type_choice' => 'getSylius_Form_Type_ProductAssociationTypeChoiceService.php',
            'sylius.form.type.product_association_type_translation' => 'getSylius_Form_Type_ProductAssociationTypeTranslationService.php',
            'sylius.form.type.product_attribute' => 'getSylius_Form_Type_ProductAttributeService.php',
            'sylius.form.type.product_attribute_choice' => 'getSylius_Form_Type_ProductAttributeChoiceService.php',
            'sylius.form.type.product_attribute_translation' => 'getSylius_Form_Type_ProductAttributeTranslationService.php',
            'sylius.form.type.product_attribute_value' => 'getSylius_Form_Type_ProductAttributeValueService.php',
            'sylius.form.type.product_choice' => 'getSylius_Form_Type_ProductChoiceService.php',
            'sylius.form.type.product_code_choice' => 'getSylius_Form_Type_ProductCodeChoiceService.php',
            'sylius.form.type.product_generate_variants' => 'getSylius_Form_Type_ProductGenerateVariantsService.php',
            'sylius.form.type.product_image' => 'getSylius_Form_Type_ProductImageService.php',
            'sylius.form.type.product_option' => 'getSylius_Form_Type_ProductOptionService.php',
            'sylius.form.type.product_option_choice' => 'getSylius_Form_Type_ProductOptionChoiceService.php',
            'sylius.form.type.product_option_translation' => 'getSylius_Form_Type_ProductOptionTranslationService.php',
            'sylius.form.type.product_option_value' => 'getSylius_Form_Type_ProductOptionValueService.php',
            'sylius.form.type.product_option_value_translation' => 'getSylius_Form_Type_ProductOptionValueTranslationService.php',
            'sylius.form.type.product_review' => 'getSylius_Form_Type_ProductReviewService.php',
            'sylius.form.type.product_translation' => 'getSylius_Form_Type_ProductTranslationService.php',
            'sylius.form.type.product_variant' => 'getSylius_Form_Type_ProductVariantService.php',
            'sylius.form.type.product_variant_generation' => 'getSylius_Form_Type_ProductVariantGenerationService.php',
            'sylius.form.type.product_variant_translation' => 'getSylius_Form_Type_ProductVariantTranslationService.php',
            'sylius.form.type.promotion' => 'getSylius_Form_Type_PromotionService.php',
            'sylius.form.type.promotion_action' => 'getSylius_Form_Type_PromotionActionService.php',
            'sylius.form.type.promotion_action.collection' => 'getSylius_Form_Type_PromotionAction_CollectionService.php',
            'sylius.form.type.promotion_action.filter.product' => 'getSylius_Form_Type_PromotionAction_Filter_ProductService.php',
            'sylius.form.type.promotion_action.filter.taxon' => 'getSylius_Form_Type_PromotionAction_Filter_TaxonService.php',
            'sylius.form.type.promotion_action_choice' => 'getSylius_Form_Type_PromotionActionChoiceService.php',
            'sylius.form.type.promotion_coupon' => 'getSylius_Form_Type_PromotionCouponService.php',
            'sylius.form.type.promotion_coupon_generator_instruction' => 'getSylius_Form_Type_PromotionCouponGeneratorInstructionService.php',
            'sylius.form.type.promotion_coupon_to_code' => 'getSylius_Form_Type_PromotionCouponToCodeService.php',
            'sylius.form.type.promotion_rule' => 'getSylius_Form_Type_PromotionRuleService.php',
            'sylius.form.type.promotion_rule.collection' => 'getSylius_Form_Type_PromotionRule_CollectionService.php',
            'sylius.form.type.promotion_rule.contains_product_configuration' => 'getSylius_Form_Type_PromotionRule_ContainsProductConfigurationService.php',
            'sylius.form.type.promotion_rule.customer_group_configuration' => 'getSylius_Form_Type_PromotionRule_CustomerGroupConfigurationService.php',
            'sylius.form.type.promotion_rule.has_taxon_configuration' => 'getSylius_Form_Type_PromotionRule_HasTaxonConfigurationService.php',
            'sylius.form.type.promotion_rule.total_of_items_from_taxon_configuration' => 'getSylius_Form_Type_PromotionRule_TotalOfItemsFromTaxonConfigurationService.php',
            'sylius.form.type.promotion_rule_choice' => 'getSylius_Form_Type_PromotionRuleChoiceService.php',
            'sylius.form.type.province' => 'getSylius_Form_Type_ProvinceService.php',
            'sylius.form.type.province_choice' => 'getSylius_Form_Type_ProvinceChoiceService.php',
            'sylius.form.type.province_code_choice' => 'getSylius_Form_Type_ProvinceCodeChoiceService.php',
            'sylius.form.type.resource_autocomplete_choice' => 'getSylius_Form_Type_ResourceAutocompleteChoiceService.php',
            'sylius.form.type.resource_translations' => 'getSylius_Form_Type_ResourceTranslationsService.php',
            'sylius.form.type.security_login' => 'getSylius_Form_Type_SecurityLoginService.php',
            'sylius.form.type.shipment' => 'getSylius_Form_Type_ShipmentService.php',
            'sylius.form.type.shipment_ship' => 'getSylius_Form_Type_ShipmentShipService.php',
            'sylius.form.type.shipping_calculator_choice' => 'getSylius_Form_Type_ShippingCalculatorChoiceService.php',
            'sylius.form.type.shipping_category' => 'getSylius_Form_Type_ShippingCategoryService.php',
            'sylius.form.type.shipping_category_choice' => 'getSylius_Form_Type_ShippingCategoryChoiceService.php',
            'sylius.form.type.shipping_method' => 'getSylius_Form_Type_ShippingMethodService.php',
            'sylius.form.type.shipping_method_choice' => 'getSylius_Form_Type_ShippingMethodChoiceService.php',
            'sylius.form.type.shipping_method_translation' => 'getSylius_Form_Type_ShippingMethodTranslationService.php',
            'sylius.form.type.shop_user' => 'getSylius_Form_Type_ShopUserService.php',
            'sylius.form.type.shop_user_registration' => 'getSylius_Form_Type_ShopUserRegistrationService.php',
            'sylius.form.type.sylius_product_associations' => 'getSylius_Form_Type_SyliusProductAssociationsService.php',
            'sylius.form.type.tax_calculation_strategy_choice' => 'getSylius_Form_Type_TaxCalculationStrategyChoiceService.php',
            'sylius.form.type.tax_calculator_choice' => 'getSylius_Form_Type_TaxCalculatorChoiceService.php',
            'sylius.form.type.tax_category' => 'getSylius_Form_Type_TaxCategoryService.php',
            'sylius.form.type.tax_category_choice' => 'getSylius_Form_Type_TaxCategoryChoiceService.php',
            'sylius.form.type.tax_rate' => 'getSylius_Form_Type_TaxRateService.php',
            'sylius.form.type.taxon' => 'getSylius_Form_Type_TaxonService.php',
            'sylius.form.type.taxon_image' => 'getSylius_Form_Type_TaxonImageService.php',
            'sylius.form.type.taxon_position' => 'getSylius_Form_Type_TaxonPositionService.php',
            'sylius.form.type.taxon_translation' => 'getSylius_Form_Type_TaxonTranslationService.php',
            'sylius.form.type.user_change_password' => 'getSylius_Form_Type_UserChangePasswordService.php',
            'sylius.form.type.user_login' => 'getSylius_Form_Type_UserLoginService.php',
            'sylius.form.type.user_request_password_reset' => 'getSylius_Form_Type_UserRequestPasswordResetService.php',
            'sylius.form.type.user_reset_password' => 'getSylius_Form_Type_UserResetPasswordService.php',
            'sylius.form.type.zone' => 'getSylius_Form_Type_ZoneService.php',
            'sylius.form.type.zone_choice' => 'getSylius_Form_Type_ZoneChoiceService.php',
            'sylius.form.type.zone_code_choice' => 'getSylius_Form_Type_ZoneCodeChoiceService.php',
            'sylius.form.type.zone_member' => 'getSylius_Form_Type_ZoneMemberService.php',
            'sylius.form_registry.attribute_type' => 'getSylius_FormRegistry_AttributeTypeService.php',
            'sylius.form_registry.payum_gateway_config' => 'getSylius_FormRegistry_PayumGatewayConfigService.php',
            'sylius.form_registry.promotion_action' => 'getSylius_FormRegistry_PromotionActionService.php',
            'sylius.form_registry.promotion_rule_checker' => 'getSylius_FormRegistry_PromotionRuleCheckerService.php',
            'sylius.form_registry.shipping_calculator' => 'getSylius_FormRegistry_ShippingCalculatorService.php',
            'sylius.generator.product_variant' => 'getSylius_Generator_ProductVariantService.php',
            'sylius.generator.slug' => 'getSylius_Generator_SlugService.php',
            'sylius.generator.taxon_slug' => 'getSylius_Generator_TaxonSlugService.php',
            'sylius.grid.array_to_definition_converter' => 'getSylius_Grid_ArrayToDefinitionConverterService.php',
            'sylius.grid.data_extractor.property_access' => 'getSylius_Grid_DataExtractor_PropertyAccessService.php',
            'sylius.grid.data_provider' => 'getSylius_Grid_DataProviderService.php',
            'sylius.grid.data_source_provider' => 'getSylius_Grid_DataSourceProviderService.php',
            'sylius.grid.filters_applicator' => 'getSylius_Grid_FiltersApplicatorService.php',
            'sylius.grid.filters_criteria_resolver' => 'getSylius_Grid_FiltersCriteriaResolverService.php',
            'sylius.grid.provider' => 'getSylius_Grid_ProviderService.php',
            'sylius.grid.resource_view_factory' => 'getSylius_Grid_ResourceViewFactoryService.php',
            'sylius.grid.sorter' => 'getSylius_Grid_SorterService.php',
            'sylius.grid.view_factory' => 'getSylius_Grid_ViewFactoryService.php',
            'sylius.grid_driver.doctrine.dbal' => 'getSylius_GridDriver_Doctrine_DbalService.php',
            'sylius.grid_driver.doctrine.orm' => 'getSylius_GridDriver_Doctrine_OrmService.php',
            'sylius.grid_field.datetime' => 'getSylius_GridField_DatetimeService.php',
            'sylius.grid_field.string' => 'getSylius_GridField_StringService.php',
            'sylius.grid_field.twig' => 'getSylius_GridField_TwigService.php',
            'sylius.grid_filter.boolean' => 'getSylius_GridFilter_BooleanService.php',
            'sylius.grid_filter.date' => 'getSylius_GridFilter_DateService.php',
            'sylius.grid_filter.entity' => 'getSylius_GridFilter_EntityService.php',
            'sylius.grid_filter.exists' => 'getSylius_GridFilter_ExistsService.php',
            'sylius.grid_filter.money' => 'getSylius_GridFilter_MoneyService.php',
            'sylius.grid_filter.string' => 'getSylius_GridFilter_StringService.php',
            'sylius.handler.shop_user_logout' => 'getSylius_Handler_ShopUserLogoutService.php',
            'sylius.image_uploader' => 'getSylius_ImageUploaderService.php',
            'sylius.installer.checker.command_directory' => 'getSylius_Installer_Checker_CommandDirectoryService.php',
            'sylius.installer.checker.sylius_requirements' => 'getSylius_Installer_Checker_SyliusRequirementsService.php',
            'sylius.integer_distributor' => 'getSylius_IntegerDistributorService.php',
            'sylius.inventory.order_inventory_operator' => 'getSylius_Inventory_OrderInventoryOperatorService.php',
            'sylius.invoice_number_generator' => 'getSylius_InvoiceNumberGeneratorService.php',
            'sylius.listener.api.add_to_cart' => 'getSylius_Listener_Api_AddToCartService.php',
            'sylius.listener.canonicalizer' => 'getSylius_Listener_CanonicalizerService.php',
            'sylius.listener.cart_blamer' => 'getSylius_Listener_CartBlamerService.php',
            'sylius.listener.channel' => 'getSylius_Listener_ChannelService.php',
            'sylius.listener.default_username' => 'getSylius_Listener_DefaultUsernameService.php',
            'sylius.listener.images_remove' => 'getSylius_Listener_ImagesRemoveService.php',
            'sylius.listener.images_upload' => 'getSylius_Listener_ImagesUploadService.php',
            'sylius.listener.locking' => 'getSylius_Listener_LockingService.php',
            'sylius.listener.order_complete' => 'getSylius_Listener_OrderCompleteService.php',
            'sylius.listener.order_customer_ip' => 'getSylius_Listener_OrderCustomerIpService.php',
            'sylius.listener.order_promotion_integrity_checker' => 'getSylius_Listener_OrderPromotionIntegrityCheckerService.php',
            'sylius.listener.order_recalculation' => 'getSylius_Listener_OrderRecalculationService.php',
            'sylius.listener.order_total_integrity_checker' => 'getSylius_Listener_OrderTotalIntegrityCheckerService.php',
            'sylius.listener.password_updater' => 'getSylius_Listener_PasswordUpdaterService.php',
            'sylius.listener.product_review_change' => 'getSylius_Listener_ProductReviewChangeService.php',
            'sylius.listener.review_create' => 'getSylius_Listener_ReviewCreateService.php',
            'sylius.listener.select_product_attribute_choice_remove' => 'getSylius_Listener_SelectProductAttributeChoiceRemoveService.php',
            'sylius.listener.shipment_ship' => 'getSylius_Listener_ShipmentShipService.php',
            'sylius.listener.simple_product_locking' => 'getSylius_Listener_SimpleProductLockingService.php',
            'sylius.listener.user_cart_recalculation' => 'getSylius_Listener_UserCartRecalculationService.php',
            'sylius.listener.user_impersonated' => 'getSylius_Listener_UserImpersonatedService.php',
            'sylius.listener.user_mailer_listener' => 'getSylius_Listener_UserMailerListenerService.php',
            'sylius.listener.user_registration' => 'getSylius_Listener_UserRegistrationService.php',
            'sylius.locale_converter' => 'getSylius_LocaleConverterService.php',
            'sylius.mailer.default_settings_provider' => 'getSylius_Mailer_DefaultSettingsProviderService.php',
            'sylius.money_formatter' => 'getSylius_MoneyFormatterService.php',
            'sylius.oauth_server.client_manager' => 'getSylius_OauthServer_ClientManagerService.php',
            'sylius.oauth_user.pin_generator.password_reset' => 'getSylius_OauthUser_PinGenerator_PasswordResetService.php',
            'sylius.oauth_user.token_generator.email_verification' => 'getSylius_OauthUser_TokenGenerator_EmailVerificationService.php',
            'sylius.oauth_user.token_generator.password_reset' => 'getSylius_OauthUser_TokenGenerator_PasswordResetService.php',
            'sylius.order_item_names_setter' => 'getSylius_OrderItemNamesSetterService.php',
            'sylius.order_item_quantity_modifier.limiting' => 'getSylius_OrderItemQuantityModifier_LimitingService.php',
            'sylius.order_locale_assigner' => 'getSylius_OrderLocaleAssignerService.php',
            'sylius.order_modifier' => 'getSylius_OrderModifierService.php',
            'sylius.order_number_assigner' => 'getSylius_OrderNumberAssignerService.php',
            'sylius.order_payment_provider' => 'getSylius_OrderPaymentProviderService.php',
            'sylius.order_processing.order_adjustments_clearer' => 'getSylius_OrderProcessing_OrderAdjustmentsClearerService.php',
            'sylius.order_processing.order_payment_processor.after_checkout' => 'getSylius_OrderProcessing_OrderPaymentProcessor_AfterCheckoutService.php',
            'sylius.order_processing.order_payment_processor.checkout' => 'getSylius_OrderProcessing_OrderPaymentProcessor_CheckoutService.php',
            'sylius.order_processing.order_prices_recalculator' => 'getSylius_OrderProcessing_OrderPricesRecalculatorService.php',
            'sylius.order_processing.order_processor' => 'getSylius_OrderProcessing_OrderProcessorService.php',
            'sylius.order_processing.order_promotion_processor' => 'getSylius_OrderProcessing_OrderPromotionProcessorService.php',
            'sylius.order_processing.order_shipment_processor' => 'getSylius_OrderProcessing_OrderShipmentProcessorService.php',
            'sylius.order_processing.order_taxes_processor' => 'getSylius_OrderProcessing_OrderTaxesProcessorService.php',
            'sylius.order_processing.shipping_charges_processor' => 'getSylius_OrderProcessing_ShippingChargesProcessorService.php',
            'sylius.payment_description_provider' => 'getSylius_PaymentDescriptionProviderService.php',
            'sylius.payment_method_resolver.default' => 'getSylius_PaymentMethodResolver_DefaultService.php',
            'sylius.payment_methods_resolver' => 'getSylius_PaymentMethodsResolverService.php',
            'sylius.payment_methods_resolver.channel_based' => 'getSylius_PaymentMethodsResolver_ChannelBasedService.php',
            'sylius.payum.http_client' => 'getSylius_Payum_HttpClientService.php',
            'sylius.payum_action.capture_payment' => 'getSylius_PayumAction_CapturePaymentService.php',
            'sylius.payum_action.execute_same_request_with_payment_details' => 'getSylius_PayumAction_ExecuteSameRequestWithPaymentDetailsService.php',
            'sylius.payum_action.offline.convert_payment' => 'getSylius_PayumAction_Offline_ConvertPaymentService.php',
            'sylius.payum_action.offline.resolve_next_route' => 'getSylius_PayumAction_Offline_ResolveNextRouteService.php',
            'sylius.payum_action.paypal_express_checkout.convert_payment' => 'getSylius_PayumAction_PaypalExpressCheckout_ConvertPaymentService.php',
            'sylius.payum_action.resolve_next_route' => 'getSylius_PayumAction_ResolveNextRouteService.php',
            'sylius.payum_extension.update_payment_state' => 'getSylius_PayumExtension_UpdatePaymentStateService.php',
            'sylius.product_review.average_rating_updater' => 'getSylius_ProductReview_AverageRatingUpdaterService.php',
            'sylius.product_variant_resolver.default' => 'getSylius_ProductVariantResolver_DefaultService.php',
            'sylius.promotion.units_promotion_adjustments_applicator' => 'getSylius_Promotion_UnitsPromotionAdjustmentsApplicatorService.php',
            'sylius.promotion_action.fixed_discount' => 'getSylius_PromotionAction_FixedDiscountService.php',
            'sylius.promotion_action.percentage_discount' => 'getSylius_PromotionAction_PercentageDiscountService.php',
            'sylius.promotion_action.shipping_percentage_discount' => 'getSylius_PromotionAction_ShippingPercentageDiscountService.php',
            'sylius.promotion_action.unit_fixed_discount' => 'getSylius_PromotionAction_UnitFixedDiscountService.php',
            'sylius.promotion_action.unit_percentage_discount' => 'getSylius_PromotionAction_UnitPercentageDiscountService.php',
            'sylius.promotion_applicator' => 'getSylius_PromotionApplicatorService.php',
            'sylius.promotion_coupon_eligibility_checker' => 'getSylius_PromotionCouponEligibilityCheckerService.php',
            'sylius.promotion_coupon_generator' => 'getSylius_PromotionCouponGeneratorService.php',
            'sylius.promotion_coupon_generator.percentage_policy' => 'getSylius_PromotionCouponGenerator_PercentagePolicyService.php',
            'sylius.promotion_eligibility_checker' => 'getSylius_PromotionEligibilityCheckerService.php',
            'sylius.promotion_filter.price_range' => 'getSylius_PromotionFilter_PriceRangeService.php',
            'sylius.promotion_filter.product' => 'getSylius_PromotionFilter_ProductService.php',
            'sylius.promotion_filter.taxon' => 'getSylius_PromotionFilter_TaxonService.php',
            'sylius.promotion_processor' => 'getSylius_PromotionProcessorService.php',
            'sylius.promotion_rule_checker.cart_quantity' => 'getSylius_PromotionRuleChecker_CartQuantityService.php',
            'sylius.promotion_rule_checker.contains_product' => 'getSylius_PromotionRuleChecker_ContainsProductService.php',
            'sylius.promotion_rule_checker.has_taxon' => 'getSylius_PromotionRuleChecker_HasTaxonService.php',
            'sylius.promotion_rule_checker.item_total' => 'getSylius_PromotionRuleChecker_ItemTotalService.php',
            'sylius.promotion_rule_checker.nth_order' => 'getSylius_PromotionRuleChecker_NthOrderService.php',
            'sylius.promotion_rule_checker.shipping_country' => 'getSylius_PromotionRuleChecker_ShippingCountryService.php',
            'sylius.promotion_rule_checker.total_of_items_from_taxon' => 'getSylius_PromotionRuleChecker_TotalOfItemsFromTaxonService.php',
            'sylius.promotion_usage_modifier' => 'getSylius_PromotionUsageModifierService.php',
            'sylius.proportional_integer_distributor' => 'getSylius_ProportionalIntegerDistributorService.php',
            'sylius.provider.channel_based_default_zone_provider' => 'getSylius_Provider_ChannelBasedDefaultZoneProviderService.php',
            'sylius.provider.product_variants_prices' => 'getSylius_Provider_ProductVariantsPricesService.php',
            'sylius.province_naming_provider' => 'getSylius_ProvinceNamingProviderService.php',
            'sylius.random_generator' => 'getSylius_RandomGeneratorService.php',
            'sylius.registry.attribute_type' => 'getSylius_Registry_AttributeTypeService.php',
            'sylius.registry.grid_driver' => 'getSylius_Registry_GridDriverService.php',
            'sylius.registry.grid_field' => 'getSylius_Registry_GridFieldService.php',
            'sylius.registry.grid_filter' => 'getSylius_Registry_GridFilterService.php',
            'sylius.registry.payment_methods_resolver' => 'getSylius_Registry_PaymentMethodsResolverService.php',
            'sylius.registry.shipping_calculator' => 'getSylius_Registry_ShippingCalculatorService.php',
            'sylius.registry.shipping_methods_resolver' => 'getSylius_Registry_ShippingMethodsResolverService.php',
            'sylius.registry.shipping_rule_checker' => 'getSylius_Registry_ShippingRuleCheckerService.php',
            'sylius.registry.tax_calculation_strategy' => 'getSylius_Registry_TaxCalculationStrategyService.php',
            'sylius.registry.tax_calculator' => 'getSylius_Registry_TaxCalculatorService.php',
            'sylius.registry_promotion_action' => 'getSylius_RegistryPromotionActionService.php',
            'sylius.registry_promotion_rule_checker' => 'getSylius_RegistryPromotionRuleCheckerService.php',
            'sylius.repository.address' => 'getSylius_Repository_AddressService.php',
            'sylius.repository.address_log_entry' => 'getSylius_Repository_AddressLogEntryService.php',
            'sylius.repository.adjustment' => 'getSylius_Repository_AdjustmentService.php',
            'sylius.repository.admin_user' => 'getSylius_Repository_AdminUserService.php',
            'sylius.repository.api_access_token' => 'getSylius_Repository_ApiAccessTokenService.php',
            'sylius.repository.api_auth_code' => 'getSylius_Repository_ApiAuthCodeService.php',
            'sylius.repository.api_client' => 'getSylius_Repository_ApiClientService.php',
            'sylius.repository.api_refresh_token' => 'getSylius_Repository_ApiRefreshTokenService.php',
            'sylius.repository.api_user' => 'getSylius_Repository_ApiUserService.php',
            'sylius.repository.channel_pricing' => 'getSylius_Repository_ChannelPricingService.php',
            'sylius.repository.country' => 'getSylius_Repository_CountryService.php',
            'sylius.repository.currency' => 'getSylius_Repository_CurrencyService.php',
            'sylius.repository.customer' => 'getSylius_Repository_CustomerService.php',
            'sylius.repository.customer_group' => 'getSylius_Repository_CustomerGroupService.php',
            'sylius.repository.exchange_rate' => 'getSylius_Repository_ExchangeRateService.php',
            'sylius.repository.gateway_config' => 'getSylius_Repository_GatewayConfigService.php',
            'sylius.repository.inventory_unit' => 'getSylius_Repository_InventoryUnitService.php',
            'sylius.repository.locale' => 'getSylius_Repository_LocaleService.php',
            'sylius.repository.oauth_user' => 'getSylius_Repository_OauthUserService.php',
            'sylius.repository.order_item' => 'getSylius_Repository_OrderItemService.php',
            'sylius.repository.order_item_unit' => 'getSylius_Repository_OrderItemUnitService.php',
            'sylius.repository.order_sequence' => 'getSylius_Repository_OrderSequenceService.php',
            'sylius.repository.payment' => 'getSylius_Repository_PaymentService.php',
            'sylius.repository.payment_method' => 'getSylius_Repository_PaymentMethodService.php',
            'sylius.repository.payment_method_translation' => 'getSylius_Repository_PaymentMethodTranslationService.php',
            'sylius.repository.payment_security_token' => 'getSylius_Repository_PaymentSecurityTokenService.php',
            'sylius.repository.product' => 'getSylius_Repository_ProductService.php',
            'sylius.repository.product_association' => 'getSylius_Repository_ProductAssociationService.php',
            'sylius.repository.product_association_type' => 'getSylius_Repository_ProductAssociationTypeService.php',
            'sylius.repository.product_association_type_translation' => 'getSylius_Repository_ProductAssociationTypeTranslationService.php',
            'sylius.repository.product_attribute' => 'getSylius_Repository_ProductAttributeService.php',
            'sylius.repository.product_attribute_translation' => 'getSylius_Repository_ProductAttributeTranslationService.php',
            'sylius.repository.product_attribute_value' => 'getSylius_Repository_ProductAttributeValueService.php',
            'sylius.repository.product_image' => 'getSylius_Repository_ProductImageService.php',
            'sylius.repository.product_option' => 'getSylius_Repository_ProductOptionService.php',
            'sylius.repository.product_option_translation' => 'getSylius_Repository_ProductOptionTranslationService.php',
            'sylius.repository.product_option_value' => 'getSylius_Repository_ProductOptionValueService.php',
            'sylius.repository.product_option_value_translation' => 'getSylius_Repository_ProductOptionValueTranslationService.php',
            'sylius.repository.product_review' => 'getSylius_Repository_ProductReviewService.php',
            'sylius.repository.product_reviewer' => 'getSylius_Repository_ProductReviewerService.php',
            'sylius.repository.product_taxon' => 'getSylius_Repository_ProductTaxonService.php',
            'sylius.repository.product_translation' => 'getSylius_Repository_ProductTranslationService.php',
            'sylius.repository.product_variant' => 'getSylius_Repository_ProductVariantService.php',
            'sylius.repository.product_variant_translation' => 'getSylius_Repository_ProductVariantTranslationService.php',
            'sylius.repository.promotion' => 'getSylius_Repository_PromotionService.php',
            'sylius.repository.promotion_action' => 'getSylius_Repository_PromotionActionService.php',
            'sylius.repository.promotion_coupon' => 'getSylius_Repository_PromotionCouponService.php',
            'sylius.repository.promotion_rule' => 'getSylius_Repository_PromotionRuleService.php',
            'sylius.repository.promotion_subject' => 'getSylius_Repository_PromotionSubjectService.php',
            'sylius.repository.province' => 'getSylius_Repository_ProvinceService.php',
            'sylius.repository.shipment' => 'getSylius_Repository_ShipmentService.php',
            'sylius.repository.shipment_unit' => 'getSylius_Repository_ShipmentUnitService.php',
            'sylius.repository.shipping_category' => 'getSylius_Repository_ShippingCategoryService.php',
            'sylius.repository.shipping_method' => 'getSylius_Repository_ShippingMethodService.php',
            'sylius.repository.shipping_method_translation' => 'getSylius_Repository_ShippingMethodTranslationService.php',
            'sylius.repository.shop_user' => 'getSylius_Repository_ShopUserService.php',
            'sylius.repository.tax_category' => 'getSylius_Repository_TaxCategoryService.php',
            'sylius.repository.tax_rate' => 'getSylius_Repository_TaxRateService.php',
            'sylius.repository.taxon' => 'getSylius_Repository_TaxonService.php',
            'sylius.repository.taxon_image' => 'getSylius_Repository_TaxonImageService.php',
            'sylius.repository.taxon_translation' => 'getSylius_Repository_TaxonTranslationService.php',
            'sylius.repository.zone' => 'getSylius_Repository_ZoneService.php',
            'sylius.repository.zone_member' => 'getSylius_Repository_ZoneMemberService.php',
            'sylius.requirements' => 'getSylius_RequirementsService.php',
            'sylius.resource_controller.resources_resolver.grid_aware' => 'getSylius_ResourceController_ResourcesResolver_GridAwareService.php',
            'sylius.reviewer_reviews_remover' => 'getSylius_ReviewerReviewsRemoverService.php',
            'sylius.security.password_encoder' => 'getSylius_Security_PasswordEncoderService.php',
            'sylius.security.password_updater' => 'getSylius_Security_PasswordUpdaterService.php',
            'sylius.security.user_login' => 'getSylius_Security_UserLoginService.php',
            'sylius.sequential_order_number_generator' => 'getSylius_SequentialOrderNumberGeneratorService.php',
            'sylius.setup.channel' => 'getSylius_Setup_ChannelService.php',
            'sylius.setup.currency' => 'getSylius_Setup_CurrencyService.php',
            'sylius.setup.locale' => 'getSylius_Setup_LocaleService.php',
            'sylius.shipping_calculator' => 'getSylius_ShippingCalculatorService.php',
            'sylius.shipping_calculator.flat_rate' => 'getSylius_ShippingCalculator_FlatRateService.php',
            'sylius.shipping_calculator.per_unit_rate' => 'getSylius_ShippingCalculator_PerUnitRateService.php',
            'sylius.shipping_eligibility_checker' => 'getSylius_ShippingEligibilityCheckerService.php',
            'sylius.shipping_method_resolver.default' => 'getSylius_ShippingMethodResolver_DefaultService.php',
            'sylius.shipping_methods_resolver' => 'getSylius_ShippingMethodsResolverService.php',
            'sylius.shipping_methods_resolver.default' => 'getSylius_ShippingMethodsResolver_DefaultService.php',
            'sylius.shipping_methods_resolver.zones_and_channel_based' => 'getSylius_ShippingMethodsResolver_ZonesAndChannelBasedService.php',
            'sylius.shop.menu_builder.account' => 'getSylius_Shop_MenuBuilder_AccountService.php',
            'sylius.shop_user.pin_generator.password_reset' => 'getSylius_ShopUser_PinGenerator_PasswordResetService.php',
            'sylius.shop_user.token_generator.email_verification' => 'getSylius_ShopUser_TokenGenerator_EmailVerificationService.php',
            'sylius.shop_user.token_generator.password_reset' => 'getSylius_ShopUser_TokenGenerator_PasswordResetService.php',
            'sylius.state_resolver.order' => 'getSylius_StateResolver_OrderService.php',
            'sylius.state_resolver.order_checkout' => 'getSylius_StateResolver_OrderCheckoutService.php',
            'sylius.state_resolver.order_payment' => 'getSylius_StateResolver_OrderPaymentService.php',
            'sylius.state_resolver.order_shipping' => 'getSylius_StateResolver_OrderShippingService.php',
            'sylius.storage.session' => 'getSylius_Storage_SessionService.php',
            'sylius.tax_calculator' => 'getSylius_TaxCalculatorService.php',
            'sylius.tax_calculator.default' => 'getSylius_TaxCalculator_DefaultService.php',
            'sylius.tax_rate_resolver' => 'getSylius_TaxRateResolverService.php',
            'sylius.taxation.order_item_units_based_strategy' => 'getSylius_Taxation_OrderItemUnitsBasedStrategyService.php',
            'sylius.taxation.order_item_units_taxes_applicator' => 'getSylius_Taxation_OrderItemUnitsTaxesApplicatorService.php',
            'sylius.taxation.order_items_based_strategy' => 'getSylius_Taxation_OrderItemsBasedStrategyService.php',
            'sylius.taxation.order_items_taxes_applicator' => 'getSylius_Taxation_OrderItemsTaxesApplicatorService.php',
            'sylius.taxation.order_shipment_taxes_applicator' => 'getSylius_Taxation_OrderShipmentTaxesApplicatorService.php',
            'sylius.templating.helper.adjustment' => 'getSylius_Templating_Helper_AdjustmentService.php',
            'sylius.templating.helper.bulk_action_grid' => 'getSylius_Templating_Helper_BulkActionGridService.php',
            'sylius.templating.helper.checkout_steps' => 'getSylius_Templating_Helper_CheckoutStepsService.php',
            'sylius.templating.helper.convert_money' => 'getSylius_Templating_Helper_ConvertMoneyService.php',
            'sylius.templating.helper.currency' => 'getSylius_Templating_Helper_CurrencyService.php',
            'sylius.templating.helper.format_money' => 'getSylius_Templating_Helper_FormatMoneyService.php',
            'sylius.templating.helper.grid' => 'getSylius_Templating_Helper_GridService.php',
            'sylius.templating.helper.inventory' => 'getSylius_Templating_Helper_InventoryService.php',
            'sylius.templating.helper.locale' => 'getSylius_Templating_Helper_LocaleService.php',
            'sylius.templating.helper.price' => 'getSylius_Templating_Helper_PriceService.php',
            'sylius.templating.helper.product_variants_prices' => 'getSylius_Templating_Helper_ProductVariantsPricesService.php',
            'sylius.templating.helper.variant_resolver' => 'getSylius_Templating_Helper_VariantResolverService.php',
            'sylius.theme.asset.assets_installer.output_aware' => 'getSylius_Theme_Asset_AssetsInstaller_OutputAwareService.php',
            'sylius.theme.form.type.theme_choice' => 'getSylius_Theme_Form_Type_ThemeChoiceService.php',
            'sylius.theme.form.type.theme_name_choice' => 'getSylius_Theme_Form_Type_ThemeNameChoiceService.php',
            'sylius.theme.locator.application_resource' => 'getSylius_Theme_Locator_ApplicationResourceService.php',
            'sylius.theme.locator.bundle_resource' => 'getSylius_Theme_Locator_BundleResourceService.php',
            'sylius.theme.templating.cache' => 'getSylius_Theme_Templating_CacheService.php',
            'sylius.translatable_entity_locale_assigner' => 'getSylius_TranslatableEntityLocaleAssignerService.php',
            'sylius.translation_locale_provider.admin' => 'getSylius_TranslationLocaleProvider_AdminService.php',
            'sylius.translation_locale_provider.immutable' => 'getSylius_TranslationLocaleProvider_ImmutableService.php',
            'sylius.twig.extension.country_name' => 'getSylius_Twig_Extension_CountryNameService.php',
            'sylius.twig.extension.province_naming' => 'getSylius_Twig_Extension_ProvinceNamingService.php',
            'sylius.twig.extension.shop' => 'getSylius_Twig_Extension_ShopService.php',
            'sylius.twig.extension.widget.admin_notification' => 'getSylius_Twig_Extension_Widget_AdminNotificationService.php',
            'sylius.unique_id_based_order_token_assigner' => 'getSylius_UniqueIdBasedOrderTokenAssignerService.php',
            'sylius.unpaid_orders_state_updater' => 'getSylius_UnpaidOrdersStateUpdaterService.php',
            'sylius.validator.cart_item_availability' => 'getSylius_Validator_CartItemAvailabilityService.php',
            'sylius.validator.customer_initializer' => 'getSylius_Validator_CustomerInitializerService.php',
            'sylius.validator.date_range' => 'getSylius_Validator_DateRangeService.php',
            'sylius.validator.different_source_target_currency' => 'getSylius_Validator_DifferentSourceTargetCurrencyService.php',
            'sylius.validator.has_all_prices_defined' => 'getSylius_Validator_HasAllPricesDefinedService.php',
            'sylius.validator.has_all_variant_prices_defined' => 'getSylius_Validator_HasAllVariantPricesDefinedService.php',
            'sylius.validator.has_enabled_entity' => 'getSylius_Validator_HasEnabledEntityService.php',
            'sylius.validator.in_stock' => 'getSylius_Validator_InStockService.php',
            'sylius.validator.locales_aware_valid_attribute_value' => 'getSylius_Validator_LocalesAwareValidAttributeValueService.php',
            'sylius.validator.payment_method_integrity' => 'getSylius_Validator_PaymentMethodIntegrityService.php',
            'sylius.validator.product_code_uniqueness' => 'getSylius_Validator_ProductCodeUniquenessService.php',
            'sylius.validator.product_integrity' => 'getSylius_Validator_ProductIntegrityService.php',
            'sylius.validator.product_variant_combination' => 'getSylius_Validator_ProductVariantCombinationService.php',
            'sylius.validator.promotion_coupon_generation_amount' => 'getSylius_Validator_PromotionCouponGenerationAmountService.php',
            'sylius.validator.promotion_subject_coupon' => 'getSylius_Validator_PromotionSubjectCouponService.php',
            'sylius.validator.shipping_method_integrity' => 'getSylius_Validator_ShippingMethodIntegrityService.php',
            'sylius.validator.unique.registered_user' => 'getSylius_Validator_Unique_RegisteredUserService.php',
            'sylius.validator.unique_currency_pair' => 'getSylius_Validator_UniqueCurrencyPairService.php',
            'sylius.validator.unique_reviewer_email' => 'getSylius_Validator_UniqueReviewerEmailService.php',
            'sylius.validator.valid_attribute_value' => 'getSylius_Validator_ValidAttributeValueService.php',
            'sylius.validator.valid_province_address' => 'getSylius_Validator_ValidProvinceAddressService.php',
            'sylius.validator.valid_select_attribute' => 'getSylius_Validator_ValidSelectAttributeService.php',
            'sylius.validator.valid_text_attribute' => 'getSylius_Validator_ValidTextAttributeService.php',
            'sylius.zone_matcher' => 'getSylius_ZoneMatcherService.php',
            'sylius_fixtures.fixture_loader' => 'getSyliusFixtures_FixtureLoaderService.php',
            'sylius_fixtures.fixture_registry' => 'getSyliusFixtures_FixtureRegistryService.php',
            'sylius_fixtures.logger' => 'getSyliusFixtures_LoggerService.php',
            'sylius_fixtures.logger.formatter.console' => 'getSyliusFixtures_Logger_Formatter_ConsoleService.php',
            'sylius_fixtures.logger.handler.console' => 'getSyliusFixtures_Logger_Handler_ConsoleService.php',
            'sylius_fixtures.suite_loader' => 'getSyliusFixtures_SuiteLoaderService.php',
            'sylius_fixtures.suite_registry' => 'getSyliusFixtures_SuiteRegistryService.php',
            'sylus.payum_action.offline.status' => 'getSylus_PayumAction_Offline_StatusService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig' => 'getTwigService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'validator' => 'getValidatorService.php',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'liip_imagine.controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'mailer' => 'swiftmailer.mailer.default',
            'sylius.context.currency' => 'sylius.context.currency.channel_aware',
            'sylius.factory.order_item' => 'sylius.factory.cart_item',
            'sylius.grid.bulk_action_renderer.twig' => 'sylius.custom_bulk_action_grid_renderer.twig',
            'sylius.grid.renderer.twig' => 'sylius.custom_grid_renderer.twig',
            'sylius.locale_provider' => 'sylius.locale_provider.channel_based',
            'sylius.manager.address' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.address_log_entry' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.adjustment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.admin_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_access_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_auth_code' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_client' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_refresh_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.channel' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.channel_pricing' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.country' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.currency' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.customer' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.customer_group' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.exchange_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.gateway_config' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.inventory_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.locale' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.oauth_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_item_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_sequence' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_method_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_security_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_association' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_association_type' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_association_type_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_attribute' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_attribute_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_attribute_value' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_image' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option_value' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option_value_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_review' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_reviewer' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_taxon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_variant' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_variant_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_action' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_coupon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_rule' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_subject' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.province' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shop_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon_image' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member' => 'doctrine.orm.default_entity_manager',
            'sylius.order_item_quantity_modifier' => 'sylius.order_item_quantity_modifier.limiting',
            'sylius.theme.asset.assets_installer' => 'sylius.theme.asset.assets_installer.output_aware',
            'sylius.translation_locale_provider' => 'sylius.translation_locale_provider.admin',
        );

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\EventDispatcher\\EventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\HttpKernelInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\TerminableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\HttpKernel.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestStack.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\Session\\Session.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ServiceLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\AbstractSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\SessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\LoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\ArrayLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\FileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\PhpFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\YamlFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\XliffFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\PoFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\MoFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\QtFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\CsvFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\IcuResFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\IniFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Loader\\JsonFileLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\RequestContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\RouterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossedHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Firewall.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\EventListener\\FirewallListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\FirewallMapInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Mapping\\MappedEventSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Tree\\TreeListener.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Sluggable\\SluggableListener.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\AbstractTrackingListener.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Timestampable\\TimestampableListener.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Sortable\\SortableListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\ResolveTargetEntityListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ArrayCache.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\FileDriver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\XmlDriver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\FileLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultNamingStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerAwareEntityListenerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ObjectManager.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\ClassMetadataInfo.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\ClassMetadata.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ObjectRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Repository\\RepositoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Repository\\OrderRepositoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle\\Doctrine\\ORM\\OrderRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Repository\\OrderRepositoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Factory\\FactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Factory\\Factory.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle\\Listener\\RequestLocaleSetter.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Repository\\ChannelRepositoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\ChannelContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\RequestBased\\ChannelContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\SingleChannelContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle\\Context\\FakeChannel\\FakeChannelContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\CompositeChannelContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle\\Context\\FakeChannel\\FakeChannelPersister.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle\\Context\\FakeChannel\\FakeChannelCodeProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle\\Context\\FakeChannel\\FakeChannelCodeProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle\\Doctrine\\ORM\\Subscriber\\LoadMetadataSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle\\Doctrine\\ORM\\Subscriber\\LoadMetadataSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Context\\ThemeContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Theme\\ChannelBasedThemeContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Currency\\Context\\CurrencyContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Locale\\Context\\LocaleContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Customer\\Context\\CustomerContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Context\\ShopperContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Context\\ShopperContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Context\\CartContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Context\\CustomerAndChannelBasedCartContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Currency\\CurrencyStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Currency\\CurrencyStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Currency\\Context\\StorageBasedCurrencyContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Currency\\Context\\CompositeCurrencyContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Currency\\Context\\ChannelAwareCurrencyContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Locale\\Provider\\LocaleProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Provider\\ChannelBasedLocaleProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle\\Context\\RequestBasedLocaleContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Locale\\Context\\ProviderBasedLocaleContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Context\\CustomerContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Storage\\StorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Storage\\CookieStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Metadata\\RegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Metadata\\Registry.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\EventListener\\ORMTranslatableListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\EventListener\\AbstractDoctrineSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\EventListener\\ORMMappedSuperClassSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\EventListener\\ORMRepositoryClassSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine\\src\\SM\\Factory\\FactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine\\src\\SM\\Factory\\ClearableFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine\\src\\SM\\Factory\\AbstractFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine\\src\\SM\\Factory\\Factory.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine\\src\\SM\\Callback\\CallbackFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine\\src\\SM\\Callback\\CallbackFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\winzou\\state-machine-bundle\\Callback\\ContainerAwareCallbackFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Cache\\HttpCacheHandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Cache\\HttpCacheHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Decoder\\DecoderProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Decoder\\ContainerDecoderProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\EventListener\\BodyListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\willdurand\\negotiation\\src\\Negotiation\\AbstractNegotiator.php';
            include_once $this->targetDirs[3].'\\vendor\\willdurand\\negotiation\\src\\Negotiation\\Negotiator.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Negotiation\\FormatNegotiator.php';
            include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\EventListener\\FormatListener.php';
            include_once $this->targetDirs[3].'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Loggable\\LoggableListener.php';
            include_once $this->targetDirs[3].'\\vendor\\stof\\doctrine-extensions-bundle\\EventListener\\LoggerListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeAuthorFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeAuthorFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeScreenshotFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeScreenshotFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\HydrationInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\ExtractionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\HydratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\StrategyEnabledInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\Filter\\FilterProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\FilterEnabledInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\NamingStrategyEnabledInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\AbstractHydrator.php';
            include_once $this->targetDirs[3].'\\vendor\\zendframework\\zend-hydrator\\src\\Reflection.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Loader\\CircularDependencyCheckerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Loader\\CircularDependencyChecker.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Loader\\ThemeLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Loader\\ThemeLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Repository\\ThemeRepositoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Repository\\InMemoryThemeRepository.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\HierarchyProvider\\ThemeHierarchyProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\HierarchyProvider\\ThemeHierarchyProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Configuration\\ConfigurationProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Configuration\\CompositeConfigurationProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Context\\AdminBasedLocaleContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\EventListener\\SessionCartSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Context\\SessionAndChannelBasedCartContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Storage\\CartStorageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Storage\\CartSessionStorage.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\EventListener\\NonChannelLocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Checkout\\CheckoutResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Checkout\\CheckoutStateUrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Checkout\\CheckoutStateUrlGenerator.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Loader\\TranslatorLoaderProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Loader\\TranslatorLoaderProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\TranslatorResourceProviderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\TranslatorResourceProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Finder\\TranslationFilesFinderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Finder\\TranslationFilesFinder.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Finder\\OrderingTranslationFilesFinder.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\ThemeTranslatorResourceProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\CompositeTranslatorResourceProvider.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\MessageSelector.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Formatter\\MessageFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Translation\\ThemeAwareTranslator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\RouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Context\\CompositeCartContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\CachedPerRequestChannelContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\RequestBased\\RequestResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\RequestBased\\HostnameBasedRequestResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Channel\\Context\\RequestBased\\CompositeRequestResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Locale\\Context\\CompositeLocaleContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Context\\CartContext.php';
            include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Cart\\Context\\ShopBasedCartContext.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $b = new \Gedmo\Tree\TreeListener();
        $b->setAnnotationReader($a);

        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($a);

        $d = new \Gedmo\Timestampable\TimestampableListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Sortable\SortableListener();
        $e->setAnnotationReader($a);

        $f = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $f->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderInterface', 'Sylius\\Component\\Core\\Model\\Order', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderItemInterface', 'Sylius\\Component\\Core\\Model\\OrderItem', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderItemUnitInterface', 'Sylius\\Component\\Core\\Model\\OrderItemUnit', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderSequenceInterface', 'Sylius\\Component\\Core\\Model\\OrderSequence', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\AdjustmentInterface', 'Sylius\\Component\\Order\\Model\\Adjustment', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\CurrencyInterface', 'Sylius\\Component\\Currency\\Model\\Currency', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\ExchangeRateInterface', 'Sylius\\Component\\Currency\\Model\\ExchangeRate', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Locale\\Model\\LocaleInterface', 'Sylius\\Component\\Locale\\Model\\Locale', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductInterface', 'Sylius\\Component\\Core\\Model\\Product', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'Sylius\\Component\\Core\\Model\\ProductTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductVariantInterface', 'Sylius\\Component\\Core\\Model\\ProductVariant', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'Sylius\\Component\\Product\\Model\\ProductVariantTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionInterface', 'Sylius\\Component\\Product\\Model\\ProductOption', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'Sylius\\Component\\Product\\Model\\ProductOptionTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface', 'Sylius\\Component\\Product\\Model\\ProductAssociationType', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionValueInterface', 'Sylius\\Component\\Product\\Model\\ProductOptionValue', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationInterface', 'Sylius\\Component\\Product\\Model\\ProductAssociation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Channel\\Model\\ChannelInterface', 'Sylius\\Component\\Core\\Model\\Channel', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeInterface', 'Sylius\\Component\\Product\\Model\\ProductAttribute', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface', 'Sylius\\Component\\Product\\Model\\ProductAttributeValue', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Taxation\\Model\\TaxRateInterface', 'Sylius\\Component\\Core\\Model\\TaxRate', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface', 'Sylius\\Component\\Taxation\\Model\\TaxCategory', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShipmentInterface', 'Sylius\\Component\\Core\\Model\\Shipment', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface', 'Sylius\\Component\\Core\\Model\\OrderItemUnit', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface', 'Sylius\\Component\\Core\\Model\\ShippingMethod', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface', 'Sylius\\Component\\Shipping\\Model\\ShippingCategory', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentInterface', 'Sylius\\Component\\Core\\Model\\Payment', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentMethodInterface', 'Sylius\\Component\\Core\\Model\\PaymentMethod', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionInterface', 'Sylius\\Component\\Core\\Model\\Promotion', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface', 'Sylius\\Component\\Core\\Model\\PromotionCoupon', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface', 'Sylius\\Component\\Promotion\\Model\\PromotionRule', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionActionInterface', 'Sylius\\Component\\Promotion\\Model\\PromotionAction', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\AddressInterface', 'Sylius\\Component\\Core\\Model\\Address', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\CountryInterface', 'Sylius\\Component\\Addressing\\Model\\Country', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ProvinceInterface', 'Sylius\\Component\\Addressing\\Model\\Province', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ZoneInterface', 'Sylius\\Component\\Addressing\\Model\\Zone', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface', 'Sylius\\Component\\Addressing\\Model\\ZoneMember', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface', 'Sylius\\Component\\Core\\Model\\OrderItemUnit', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Taxonomy\\Model\\TaxonInterface', 'Sylius\\Component\\Core\\Model\\Taxon', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation', array());
        $f->addResolveTargetEntity('Sylius\\Component\\User\\Model\\UserInterface', 'Sylius\\Component\\Core\\Model\\ShopUser', array());
        $f->addResolveTargetEntity('Sylius\\Component\\User\\Model\\UserOAuthInterface', 'Sylius\\Component\\User\\Model\\UserOAuth', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Customer\\Model\\CustomerInterface', 'Sylius\\Component\\Core\\Model\\Customer', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Customer\\Model\\CustomerGroupInterface', 'Sylius\\Component\\Customer\\Model\\CustomerGroup', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewInterface', 'Sylius\\Component\\Core\\Model\\ProductReview', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewerInterface', 'Sylius\\Component\\Core\\Model\\Customer', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductTaxonInterface', 'Sylius\\Component\\Core\\Model\\ProductTaxon', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductImageInterface', 'Sylius\\Component\\Core\\Model\\ProductImage', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\TaxonImageInterface', 'Sylius\\Component\\Core\\Model\\TaxonImage', array());
        $f->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ChannelPricingInterface', 'Sylius\\Component\\Core\\Model\\ChannelPricing', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface', 'Sylius\\Component\\Core\\Model\\AdminUser', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface', 'Sylius\\Bundle\\AdminApiBundle\\Model\\Client', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface', 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessToken', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface', 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshToken', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface', 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCode', array());

        $g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $g->addEventSubscriber(($this->services['sylius.event_subscriber.orm_mapped_super_class'] ?? $this->getSylius_EventSubscriber_OrmMappedSuperClassService()));
        $g->addEventSubscriber(($this->services['sylius.event_subscriber.orm_repository_class'] ?? $this->getSylius_EventSubscriber_OrmRepositoryClassService()));
        $g->addEventSubscriber(($this->services['sylius.translation.translatable_listener.doctrine.orm'] ?? $this->getSylius_Translation_TranslatableListener_Doctrine_OrmService()));
        $g->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.loggable'] ?? $this->getStofDoctrineExtensions_Listener_LoggableService()));
        $g->addEventSubscriber(($this->services['sylius.doctrine.orm.event_subscriber.load_metadata.attribute'] ?? $this->getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService()));
        $g->addEventSubscriber(($this->services['sylius.doctrine.orm.event_subscriber.load_metadata.review'] ?? $this->getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService()));
        $g->addEventSubscriber($b);
        $g->addEventSubscriber($c);
        $g->addEventSubscriber($d);
        $g->addEventSubscriber($e);
        $g->addEventListener(array(0 => 'loadClassMetadata'), $f);
        $g->addEventListener(array(0 => 'loadClassMetadata'), new \Doctrine\ORM\Tools\AttachEntityListenersListener());
        $g->addEventListener(array(0 => 'postUpdate'), 'sylius.listener.select_product_attribute_choice_remove');
        $g->addEventListener(array(0 => 'prePersist'), 'sylius.listener.password_updater');
        $g->addEventListener(array(0 => 'preUpdate'), 'sylius.listener.password_updater');
        $g->addEventListener(array(0 => 'postPersist'), 'sylius.listener.product_review_change');
        $g->addEventListener(array(0 => 'postUpdate'), 'sylius.listener.product_review_change');
        $g->addEventListener(array(0 => 'postRemove'), 'sylius.listener.product_review_change');
        $g->addEventListener(array(0 => 'postRemove'), 'sylius.listener.images_remove');
        $g->addEventListener(array(0 => 'onFlush'), 'sylius.listener.default_username');
        $g->addEventListener(array(0 => 'prePersist'), 'sylius.listener.canonicalizer');
        $g->addEventListener(array(0 => 'preUpdate'), 'sylius.listener.canonicalizer');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array()))->createConnection(array('driver' => $this->getEnv('SYLIUS_DATABASE_DRIVER'), 'host' => $this->getEnv('SYLIUS_DATABASE_HOST'), 'port' => $this->getEnv('SYLIUS_DATABASE_PORT'), 'dbname' => $this->getEnv('SYLIUS_DATABASE_NAME'), 'user' => 'sylius-owner', 'password' => 'sylius123', 'charset' => 'UTF8', 'driverOptions' => array(), 'serverVersion' => '5.5', 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $g, array());
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Bridge\\Doctrine\\Resources\\mapping') => 'Payum\\Core\\Model', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle\\Resources\\config\\doctrine') => 'FOS\\OAuthServerBundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'Payum\\Core\\Model');
        $b->addDriver($a, 'FOS\\OAuthServerBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Order\\Model'), '.orm.xml')), 'Sylius\\Component\\Order\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Currency\\Model'), '.orm.xml')), 'Sylius\\Component\\Currency\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Locale\\Model'), '.orm.xml')), 'Sylius\\Component\\Locale\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Product\\Model'), '.orm.xml')), 'Sylius\\Component\\Product\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Channel\\Model'), '.orm.xml')), 'Sylius\\Component\\Channel\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Attribute\\Model'), '.orm.xml')), 'Sylius\\Component\\Attribute\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Taxation\\Model'), '.orm.xml')), 'Sylius\\Component\\Taxation\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Shipping\\Model'), '.orm.xml')), 'Sylius\\Component\\Shipping\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Payment\\Model'), '.orm.xml')), 'Sylius\\Component\\Payment\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Promotion\\Model'), '.orm.xml')), 'Sylius\\Component\\Promotion\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Addressing\\Model'), '.orm.xml')), 'Sylius\\Component\\Addressing\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\InventoryBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Inventory\\Model'), '.orm.xml')), 'Sylius\\Component\\Inventory\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Taxonomy\\Model'), '.orm.xml')), 'Sylius\\Component\\Taxonomy\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\User\\Model'), '.orm.xml')), 'Sylius\\Component\\User\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Customer\\Model'), '.orm.xml')), 'Sylius\\Component\\Customer\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Review\\Model'), '.orm.xml')), 'Sylius\\Component\\Review\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Core\\Model'), '.orm.xml')), 'Sylius\\Component\\Core\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/config/doctrine/model') => 'Sylius\\Bundle\\PayumBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PayumBundle\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle/Resources/config/doctrine/model') => 'Sylius\\Bundle\\AdminApiBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\AdminApiBundle\\Model');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('payum' => 'Payum\\Core\\Model', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity'));
        $c->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()));
        $c->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()));
        $c->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
        $c->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(($this->privates['.service_locator.9_yeNH1'] ?? $this->privates['.service_locator.9_yeNH1'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array()))));

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $c);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array()))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_a01c3c940155585fac7b5bdb860b162d1d55520ea08b2aa1bf7c1406ed2e669e');

        return $instance;
    }

    /*
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_a01c3c940155585fac7b5bdb860b162d1d55520ea08b2aa1bf7c1406ed2e669e');

        return $instance;
    }

    /*
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_a01c3c940155585fac7b5bdb860b162d1d55520ea08b2aa1bf7c1406ed2e669e');

        return $instance;
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->services['sylius.listener.request_locale_setter'] ?? $this->getSylius_Listener_RequestLocaleSetterService());
        }, 1 => 'onKernelRequest'), 4);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->services['sylius.context.channel.fake_channel.persister'] ?? $this->getSylius_Context_Channel_FakeChannel_PersisterService());
        }, 1 => 'onKernelResponse'), -8192);
        $instance->addListener('sylius.user.pre_password_reset', array(0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'genericEventUpdater'), 0);
        $instance->addListener('sylius.user.pre_password_change', array(0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'genericEventUpdater'), 0);
        $instance->addListener('sylius.admin_user.pre_update', array(0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'genericEventUpdater'), 0);
        $instance->addListener('sylius.customer.pre_update', array(0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'customerUpdateEvent'), 0);
        $instance->addListener('sylius.user.password_reset.request.pin', array(0 => function () {
            return ($this->services['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendResetPasswordPinEmail'), 0);
        $instance->addListener('sylius.user.password_reset.request.token', array(0 => function () {
            return ($this->services['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendResetPasswordTokenEmail'), 0);
        $instance->addListener('sylius.user.email_verification.token', array(0 => function () {
            return ($this->services['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendVerificationTokenEmail'), 0);
        $instance->addListener('sylius.customer.post_register', array(0 => function () {
            return ($this->services['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendUserRegistrationEmail'), 0);
        $instance->addListener('sylius.admin_user.post_create', array(0 => function () {
            return ($this->privates['sylius.listener.admin_user.reloader'] ?? $this->load('getSylius_Listener_AdminUser_ReloaderService.php'));
        }, 1 => 'reloadUser'), 0);
        $instance->addListener('sylius.admin_user.post_update', array(0 => function () {
            return ($this->privates['sylius.listener.admin_user.reloader'] ?? $this->load('getSylius_Listener_AdminUser_ReloaderService.php'));
        }, 1 => 'reloadUser'), 0);
        $instance->addListener('sylius.admin_user.pre_delete', array(0 => function () {
            return ($this->privates['sylius.listener.admin_user_delete'] ?? $this->load('getSylius_Listener_AdminUserDeleteService.php'));
        }, 1 => 'deleteUser'), 0);
        $instance->addListener('sylius.shop_user.post_create', array(0 => function () {
            return ($this->privates['sylius.listener.shop_user.reloader'] ?? $this->load('getSylius_Listener_ShopUser_ReloaderService.php'));
        }, 1 => 'reloadUser'), 0);
        $instance->addListener('sylius.shop_user.post_update', array(0 => function () {
            return ($this->privates['sylius.listener.shop_user.reloader'] ?? $this->load('getSylius_Listener_ShopUser_ReloaderService.php'));
        }, 1 => 'reloadUser'), 0);
        $instance->addListener('sylius.shop_user.pre_delete', array(0 => function () {
            return ($this->privates['sylius.listener.shop_user_delete'] ?? $this->load('getSylius_Listener_ShopUserDeleteService.php'));
        }, 1 => 'deleteUser'), 0);
        $instance->addListener('sylius.oauth_user.post_create', array(0 => function () {
            return ($this->privates['sylius.listener.oauth_user.reloader'] ?? $this->load('getSylius_Listener_OauthUser_ReloaderService.php'));
        }, 1 => 'reloadUser'), 0);
        $instance->addListener('sylius.oauth_user.post_update', array(0 => function () {
            return ($this->privates['sylius.listener.oauth_user.reloader'] ?? $this->load('getSylius_Listener_OauthUser_ReloaderService.php'));
        }, 1 => 'reloadUser'), 0);
        $instance->addListener('sylius.oauth_user.pre_delete', array(0 => function () {
            return ($this->privates['sylius.listener.oauth_user_delete'] ?? $this->load('getSylius_Listener_OauthUserDeleteService.php'));
        }, 1 => 'deleteUser'), 0);
        $instance->addListener('sylius.user.security.implicit_login', array(0 => function () {
            return ($this->services['sylius.listener.cart_blamer'] ?? $this->load('getSylius_Listener_CartBlamerService.php'));
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ($this->services['sylius.listener.cart_blamer'] ?? $this->load('getSylius_Listener_CartBlamerService.php'));
        }, 1 => 'onInteractiveLogin'), 0);
        $instance->addListener('sylius.channel.pre_delete', array(0 => function () {
            return ($this->services['sylius.listener.channel'] ?? $this->load('getSylius_Listener_ChannelService.php'));
        }, 1 => 'onChannelPreDelete'), 0);
        $instance->addListener('sylius.product.pre_create', array(0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'), 0);
        $instance->addListener('sylius.product.pre_update', array(0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'), 0);
        $instance->addListener('sylius.taxon.pre_create', array(0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'), 0);
        $instance->addListener('sylius.taxon.pre_update', array(0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'), 0);
        $instance->addListener('sylius.cart_change', array(0 => function () {
            return ($this->services['sylius.listener.order_recalculation'] ?? $this->load('getSylius_Listener_OrderRecalculationService.php'));
        }, 1 => 'recalculateOrder'), 0);
        $instance->addListener('sylius.user.security.implicit_login', array(0 => function () {
            return ($this->services['sylius.listener.user_cart_recalculation'] ?? $this->load('getSylius_Listener_UserCartRecalculationService.php'));
        }, 1 => 'recalculateCartWhileLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ($this->services['sylius.listener.user_cart_recalculation'] ?? $this->load('getSylius_Listener_UserCartRecalculationService.php'));
        }, 1 => 'recalculateCartWhileLogin'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->services['sylius.translator.listener'] ?? $this->getSylius_Translator_ListenerService());
        }, 1 => 'onKernelRequest'), 2);
        $instance->addListener('sylius.product_review.pre_create', array(0 => function () {
            return ($this->services['sylius.listener.review_create'] ?? $this->load('getSylius_Listener_ReviewCreateService.php'));
        }, 1 => 'ensureReviewHasAuthor'), 0);
        $instance->addListener('sylius.product_variant.initialize_update', array(0 => function () {
            return ($this->services['sylius.listener.locking'] ?? $this->load('getSylius_Listener_LockingService.php'));
        }, 1 => 'lock'), 0);
        $instance->addListener('sylius.product.initialize_update', array(0 => function () {
            return ($this->services['sylius.listener.simple_product_locking'] ?? $this->load('getSylius_Listener_SimpleProductLockingService.php'));
        }, 1 => 'lock'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? $this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['fos_rest.format_listener'] ?? $this->getFosRest_FormatListenerService());
        }, 1 => 'onKernelRequest'), 34);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->services['payum.listener.reply_to_http_response'] ?? $this->load('getPayum_Listener_ReplyToHttpResponseService.php'));
        }, 1 => 'onKernelException'), 128);
        $instance->addListener('sylius.shipment.post_ship', array(0 => function () {
            return ($this->services['sylius.listener.shipment_ship'] ?? $this->load('getSylius_Listener_ShipmentShipService.php'));
        }, 1 => 'sendConfirmationEmail'), 0);
        $instance->addListener('sylius.order.pre_complete', array(0 => function () {
            return ($this->services['sylius.listener.order_customer_ip'] ?? $this->load('getSylius_Listener_OrderCustomerIpService.php'));
        }, 1 => 'assignCustomerIpToOrder'), 0);
        $instance->addListener('sylius.order.post_complete', array(0 => function () {
            return ($this->services['sylius.listener.order_complete'] ?? $this->load('getSylius_Listener_OrderCompleteService.php'));
        }, 1 => 'sendConfirmationEmail'), 0);
        $instance->addListener('sylius.customer.post_register', array(0 => function () {
            return ($this->services['sylius.listener.user_registration'] ?? $this->load('getSylius_Listener_UserRegistrationService.php'));
        }, 1 => 'handleUserVerification'), 0);
        $instance->addListener('sylius.order.pre_complete', array(0 => function () {
            return ($this->services['sylius.listener.order_promotion_integrity_checker'] ?? $this->load('getSylius_Listener_OrderPromotionIntegrityCheckerService.php'));
        }, 1 => 'check'), 0);
        $instance->addListener('sylius.order.pre_complete', array(0 => function () {
            return ($this->services['sylius.listener.order_total_integrity_checker'] ?? $this->load('getSylius_Listener_OrderTotalIntegrityCheckerService.php'));
        }, 1 => 'check'), 0);
        $instance->addListener('sylius.order.pre_complete', array(0 => function () {
            return ($this->services['sylius.order_locale_assigner'] ?? $this->load('getSylius_OrderLocaleAssignerService.php'));
        }, 1 => 'assignLocale'), 0);
        $instance->addListener('sylius.user.security.impersonate', array(0 => function () {
            return ($this->services['sylius.listener.user_impersonated'] ?? $this->load('getSylius_Listener_UserImpersonatedService.php'));
        }, 1 => 'onUserImpersonated'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->services['sylius.listener.non_channel_request_locale'] ?? $this->getSylius_Listener_NonChannelRequestLocaleService());
        }, 1 => 'restrictRequestLocale'), 10);
        $instance->addListener('sylius.order.post_address', array(0 => function () {
            return ($this->privates['sylius.listener.checkout_redirect'] ?? $this->load('getSylius_Listener_CheckoutRedirectService.php'));
        }, 1 => 'handleCheckoutRedirect'), 0);
        $instance->addListener('sylius.order.post_select_shipping', array(0 => function () {
            return ($this->privates['sylius.listener.checkout_redirect'] ?? $this->load('getSylius_Listener_CheckoutRedirectService.php'));
        }, 1 => 'handleCheckoutRedirect'), 0);
        $instance->addListener('sylius.order.post_payment', array(0 => function () {
            return ($this->privates['sylius.listener.checkout_redirect'] ?? $this->load('getSylius_Listener_CheckoutRedirectService.php'));
        }, 1 => 'handleCheckoutRedirect'), 0);
        $instance->addListener('sylius.order_item.pre_create', array(0 => function () {
            return ($this->services['sylius.listener.api.add_to_cart'] ?? $this->load('getSylius_Listener_Api_AddToCartService.php'));
        }, 1 => 'recalculateOrderOnAdd'), 0);
        $instance->addListener('sylius.order_item.pre_update', array(0 => function () {
            return ($this->services['sylius.listener.api.add_to_cart'] ?? $this->load('getSylius_Listener_Api_AddToCartService.php'));
        }, 1 => 'recalculateOrderOnAdd'), 0);
        $instance->addListener('sylius.order_item.pre_delete', array(0 => function () {
            return ($this->services['sylius.listener.api.add_to_cart'] ?? $this->load('getSylius_Listener_Api_AddToCartService.php'));
        }, 1 => 'recalculateOrderOnDelete'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ($this->privates['sylius.listener.admin_user_last_login'] ?? $this->load('getSylius_Listener_AdminUserLastLoginService.php'));
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('sylius.user.security.implicit_login', array(0 => function () {
            return ($this->privates['sylius.listener.admin_user_last_login'] ?? $this->load('getSylius_Listener_AdminUserLastLoginService.php'));
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ($this->privates['sylius.listener.shop_user_last_login'] ?? $this->load('getSylius_Listener_ShopUserLastLoginService.php'));
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('sylius.user.security.implicit_login', array(0 => function () {
            return ($this->privates['sylius.listener.shop_user_last_login'] ?? $this->load('getSylius_Listener_ShopUserLastLoginService.php'));
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ($this->privates['sylius.listener.oauth_user_last_login'] ?? $this->load('getSylius_Listener_OauthUserLastLoginService.php'));
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('sylius.user.security.implicit_login', array(0 => function () {
            return ($this->privates['sylius.listener.oauth_user_last_login'] ?? $this->load('getSylius_Listener_OauthUserLastLoginService.php'));
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->services['sylius.storage.cookie'] ?? $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage());
        }, 1 => 'onKernelRequest'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->services['sylius.storage.cookie'] ?? $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['fos_rest.exception_listener'] ?? $this->load('getFosRest_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -100);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['stof_doctrine_extensions.event_listener.logger'] ?? $this->getStofDoctrineExtensions_EventListener_LoggerService());
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? $this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener());
        }, 1 => 'onException'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? $this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener());
        }, 1 => 'onException'), 512);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->services['sylius_fixtures.logger.handler.console'] ?? $this->load('getSyliusFixtures_Logger_Handler_ConsoleService.php'));
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->services['sylius_fixtures.logger.handler.console'] ?? $this->load('getSyliusFixtures_Logger_Handler_ConsoleService.php'));
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->services['sylius.event_subscriber.resource_delete'] ?? $this->load('getSylius_EventSubscriber_ResourceDeleteService.php'));
        }, 1 => 'onResourceDelete'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->services['sylius.listener.session_cart'] ?? $this->getSylius_Listener_SessionCartService());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['sylius.resolver.checkout'] ?? $this->getSylius_Resolver_CheckoutService());
        }, 1 => 'onKernelRequest'), 0);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver());
            yield 1 => ($this->privates['argument_resolver.request'] ?? $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver());
            yield 2 => ($this->privates['argument_resolver.session'] ?? $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver());
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver());
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver());
        }, 7)));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\ServiceLocator(array('routing.loader' => function (): \Symfony\Component\Config\Loader\LoaderInterface {
            return ($this->services['routing.loader'] ?? $this->load('getRouting_LoaderService.php'));
        })))->withContext('router.default', $this), ($this->targetDirs[3].'/app/config/routing.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => false), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $a);

        $instance->setConfigCacheFactory(new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory());

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0')), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the public 'sm.callback_factory' shared service.
     *
     * @return \winzou\Bundle\StateMachineBundle\Callback\ContainerAwareCallbackFactory
     */
    protected function getSm_CallbackFactoryService()
    {
        return $this->services['sm.callback_factory'] = new \winzou\Bundle\StateMachineBundle\Callback\ContainerAwareCallbackFactory('winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback', $this);
    }

    /*
     * Gets the public 'sm.factory' shared service.
     *
     * @return \SM\Factory\Factory
     */
    protected function getSm_FactoryService()
    {
        return $this->services['sm.factory'] = new \SM\Factory\Factory($this->parameters['sm.configs'], ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['sm.callback_factory'] ?? $this->services['sm.callback_factory'] = new \winzou\Bundle\StateMachineBundle\Callback\ContainerAwareCallbackFactory('winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback', $this)));
    }

    /*
     * Gets the public 'sylius.context.cart' shared service.
     *
     * @return \Sylius\Component\Order\Context\CompositeCartContext
     */
    protected function getSylius_Context_CartService()
    {
        $this->services['sylius.context.cart'] = $instance = new \Sylius\Component\Order\Context\CompositeCartContext();

        $instance->addContext(($this->services['sylius.context.cart.new'] ?? $this->getSylius_Context_Cart_NewService()), -999);
        $instance->addContext(($this->services['sylius.context.cart.customer_and_channel_based'] ?? $this->getSylius_Context_Cart_CustomerAndChannelBasedService()), -555);
        $instance->addContext(($this->services['sylius.context.cart.session_and_channel_based'] ?? $this->getSylius_Context_Cart_SessionAndChannelBasedService()), -777);

        return $instance;
    }

    /*
     * Gets the public 'sylius.context.cart.customer_and_channel_based' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Context\CustomerAndChannelBasedCartContext
     */
    protected function getSylius_Context_Cart_CustomerAndChannelBasedService()
    {
        return $this->services['sylius.context.cart.customer_and_channel_based'] = new \Sylius\Bundle\CoreBundle\Context\CustomerAndChannelBasedCartContext(($this->services['sylius.context.customer'] ?? $this->getSylius_Context_CustomerService()), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.repository.order'] ?? $this->getSylius_Repository_OrderService()));
    }

    /*
     * Gets the public 'sylius.context.cart.new' shared service.
     *
     * @return \Sylius\Component\Core\Cart\Context\ShopBasedCartContext
     */
    protected function getSylius_Context_Cart_NewService()
    {
        return $this->services['sylius.context.cart.new'] = new \Sylius\Component\Core\Cart\Context\ShopBasedCartContext(new \Sylius\Component\Order\Context\CartContext(($this->services['sylius.factory.order'] ?? $this->services['sylius.factory.order'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Order'))), ($this->services['sylius.context.shopper'] ?? $this->getSylius_Context_ShopperService()));
    }

    /*
     * Gets the public 'sylius.context.cart.session_and_channel_based' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Context\SessionAndChannelBasedCartContext
     */
    protected function getSylius_Context_Cart_SessionAndChannelBasedService()
    {
        return $this->services['sylius.context.cart.session_and_channel_based'] = new \Sylius\Bundle\CoreBundle\Context\SessionAndChannelBasedCartContext(($this->services['sylius.storage.cart_session'] ?? $this->getSylius_Storage_CartSessionService()), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()));
    }

    /*
     * Gets the public 'sylius.context.channel' shared service.
     *
     * @return \Sylius\Component\Channel\Context\CachedPerRequestChannelContext
     */
    protected function getSylius_Context_ChannelService()
    {
        return $this->services['sylius.context.channel'] = new \Sylius\Component\Channel\Context\CachedPerRequestChannelContext(($this->privates['sylius.context.channel.composite'] ?? $this->getSylius_Context_Channel_CompositeService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    /*
     * Gets the public 'sylius.context.channel.fake_channel.persister' shared service.
     *
     * @return \Sylius\Bundle\ChannelBundle\Context\FakeChannel\FakeChannelPersister
     */
    protected function getSylius_Context_Channel_FakeChannel_PersisterService()
    {
        return $this->services['sylius.context.channel.fake_channel.persister'] = new \Sylius\Bundle\ChannelBundle\Context\FakeChannel\FakeChannelPersister(($this->privates['sylius.context.channel.fake_channel.code_provider'] ?? $this->privates['sylius.context.channel.fake_channel.code_provider'] = new \Sylius\Bundle\ChannelBundle\Context\FakeChannel\FakeChannelCodeProvider()));
    }

    /*
     * Gets the public 'sylius.context.channel.request_based.resolver' shared service.
     *
     * @return \Sylius\Component\Channel\Context\RequestBased\CompositeRequestResolver
     */
    protected function getSylius_Context_Channel_RequestBased_ResolverService()
    {
        $this->services['sylius.context.channel.request_based.resolver'] = $instance = new \Sylius\Component\Channel\Context\RequestBased\CompositeRequestResolver();

        $instance->addResolver(new \Sylius\Component\Channel\Context\RequestBased\HostnameBasedRequestResolver(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService())), 0);

        return $instance;
    }

    /*
     * Gets the public 'sylius.context.currency.channel_aware' shared service.
     *
     * @return \Sylius\Component\Core\Currency\Context\ChannelAwareCurrencyContext
     */
    protected function getSylius_Context_Currency_ChannelAwareService()
    {
        $a = new \Sylius\Component\Currency\Context\CompositeCurrencyContext();
        $a->addContext(($this->services['sylius.context.currency.storage_based'] ?? $this->getSylius_Context_Currency_StorageBasedService()), 0);

        return $this->services['sylius.context.currency.channel_aware'] = new \Sylius\Component\Core\Currency\Context\ChannelAwareCurrencyContext($a, ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()));
    }

    /*
     * Gets the public 'sylius.context.currency.storage_based' shared service.
     *
     * @return \Sylius\Component\Core\Currency\Context\StorageBasedCurrencyContext
     */
    protected function getSylius_Context_Currency_StorageBasedService()
    {
        return $this->services['sylius.context.currency.storage_based'] = new \Sylius\Component\Core\Currency\Context\StorageBasedCurrencyContext(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.storage.currency'] ?? $this->getSylius_Storage_CurrencyService()));
    }

    /*
     * Gets the public 'sylius.context.customer' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Context\CustomerContext
     */
    protected function getSylius_Context_CustomerService()
    {
        return $this->services['sylius.context.customer'] = new \Sylius\Bundle\CoreBundle\Context\CustomerContext(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the public 'sylius.context.locale' shared service.
     *
     * @return \Sylius\Component\Locale\Context\CompositeLocaleContext
     */
    protected function getSylius_Context_LocaleService()
    {
        $this->services['sylius.context.locale'] = $instance = new \Sylius\Component\Locale\Context\CompositeLocaleContext();

        $instance->addContext(($this->services['sylius.context.locale.request_based'] ?? $this->getSylius_Context_Locale_RequestBasedService()), 64);
        $instance->addContext(($this->services['sylius.context.locale.provider_based'] ?? $this->getSylius_Context_Locale_ProviderBasedService()), -128);
        $instance->addContext(($this->services['sylius.context.locale.admin_based'] ?? $this->getSylius_Context_Locale_AdminBasedService()), 128);

        return $instance;
    }

    /*
     * Gets the public 'sylius.context.locale.admin_based' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Context\AdminBasedLocaleContext
     */
    protected function getSylius_Context_Locale_AdminBasedService()
    {
        return $this->services['sylius.context.locale.admin_based'] = new \Sylius\Bundle\AdminBundle\Context\AdminBasedLocaleContext(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
    }

    /*
     * Gets the public 'sylius.context.locale.provider_based' shared service.
     *
     * @return \Sylius\Component\Locale\Context\ProviderBasedLocaleContext
     */
    protected function getSylius_Context_Locale_ProviderBasedService()
    {
        return $this->services['sylius.context.locale.provider_based'] = new \Sylius\Component\Locale\Context\ProviderBasedLocaleContext(($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()));
    }

    /*
     * Gets the public 'sylius.context.locale.request_based' shared service.
     *
     * @return \Sylius\Bundle\LocaleBundle\Context\RequestBasedLocaleContext
     */
    protected function getSylius_Context_Locale_RequestBasedService()
    {
        return $this->services['sylius.context.locale.request_based'] = new \Sylius\Bundle\LocaleBundle\Context\RequestBasedLocaleContext(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()));
    }

    /*
     * Gets the public 'sylius.context.shopper' shared service.
     *
     * @return \Sylius\Component\Core\Context\ShopperContext
     */
    protected function getSylius_Context_ShopperService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['sylius.context.shopper'] = $this->createProxy('ShopperContext_d398ef6', function () {
                return \ShopperContext_d398ef6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSylius_Context_ShopperService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Sylius\Component\Core\Context\ShopperContext(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.context.currency.channel_aware'] ?? $this->getSylius_Context_Currency_ChannelAwareService()), ($this->services['sylius.context.locale'] ?? $this->getSylius_Context_LocaleService()), ($this->services['sylius.context.customer'] ?? $this->getSylius_Context_CustomerService()));
    }

    /*
     * Gets the public 'sylius.doctrine.orm.event_subscriber.load_metadata.attribute' shared service.
     *
     * @return \Sylius\Bundle\AttributeBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber
     */
    protected function getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService()
    {
        return $this->services['sylius.doctrine.orm.event_subscriber.load_metadata.attribute'] = new \Sylius\Bundle\AttributeBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber($this->parameters['sylius.attribute.subjects']);
    }

    /*
     * Gets the public 'sylius.doctrine.orm.event_subscriber.load_metadata.review' shared service.
     *
     * @return \Sylius\Bundle\ReviewBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber
     */
    protected function getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService()
    {
        return $this->services['sylius.doctrine.orm.event_subscriber.load_metadata.review'] = new \Sylius\Bundle\ReviewBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber($this->parameters['sylius.review.subjects']);
    }

    /*
     * Gets the public 'sylius.event_subscriber.orm_mapped_super_class' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMMappedSuperClassSubscriber
     */
    protected function getSylius_EventSubscriber_OrmMappedSuperClassService()
    {
        return $this->services['sylius.event_subscriber.orm_mapped_super_class'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMMappedSuperClassSubscriber(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()));
    }

    /*
     * Gets the public 'sylius.event_subscriber.orm_repository_class' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMRepositoryClassSubscriber
     */
    protected function getSylius_EventSubscriber_OrmRepositoryClassService()
    {
        return $this->services['sylius.event_subscriber.orm_repository_class'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMRepositoryClassSubscriber(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()));
    }

    /*
     * Gets the public 'sylius.factory.order' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    protected function getSylius_Factory_OrderService()
    {
        return $this->services['sylius.factory.order'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Order');
    }

    /*
     * Gets the public 'sylius.factory.theme' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Factory\ThemeFactory
     */
    protected function getSylius_Factory_ThemeService()
    {
        return $this->services['sylius.factory.theme'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeFactory();
    }

    /*
     * Gets the public 'sylius.listener.non_channel_request_locale' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\NonChannelLocaleListener
     */
    protected function getSylius_Listener_NonChannelRequestLocaleService()
    {
        return $this->services['sylius.listener.non_channel_request_locale'] = new \Sylius\Bundle\ShopBundle\EventListener\NonChannelLocaleListener(($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), array(0 => 'shop'));
    }

    /*
     * Gets the public 'sylius.listener.request_locale_setter' shared service.
     *
     * @return \Sylius\Bundle\LocaleBundle\Listener\RequestLocaleSetter
     */
    protected function getSylius_Listener_RequestLocaleSetterService()
    {
        return $this->services['sylius.listener.request_locale_setter'] = new \Sylius\Bundle\LocaleBundle\Listener\RequestLocaleSetter(($this->services['sylius.context.locale'] ?? $this->getSylius_Context_LocaleService()), ($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()));
    }

    /*
     * Gets the public 'sylius.listener.session_cart' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\SessionCartSubscriber
     */
    protected function getSylius_Listener_SessionCartService()
    {
        return $this->services['sylius.listener.session_cart'] = new \Sylius\Bundle\ShopBundle\EventListener\SessionCartSubscriber(($this->services['sylius.context.cart'] ?? $this->getSylius_Context_CartService()), ($this->services['sylius.storage.cart_session'] ?? $this->getSylius_Storage_CartSessionService()));
    }

    /*
     * Gets the public 'sylius.locale_provider.channel_based' shared service.
     *
     * @return \Sylius\Component\Core\Provider\ChannelBasedLocaleProvider
     */
    protected function getSylius_LocaleProvider_ChannelBasedService()
    {
        return $this->services['sylius.locale_provider.channel_based'] = new \Sylius\Component\Core\Provider\ChannelBasedLocaleProvider(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), 'en_US');
    }

    /*
     * Gets the public 'sylius.repository.channel' shared service.
     *
     * @return \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository
     */
    protected function getSylius_Repository_ChannelService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['sylius.repository.channel'] = $this->createProxy('ChannelRepository_04960bc', function () {
                return \ChannelRepository_04960bc::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSylius_Repository_ChannelService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        return new \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\Channel'));
    }

    /*
     * Gets the public 'sylius.repository.order' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository
     */
    protected function getSylius_Repository_OrderService()
    {
        $a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        return $this->services['sylius.repository.order'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\Order'));
    }

    /*
     * Gets the public 'sylius.repository.theme' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Repository\InMemoryThemeRepository
     */
    protected function getSylius_Repository_ThemeService()
    {
        return $this->services['sylius.repository.theme'] = new \Sylius\Bundle\ThemeBundle\Repository\InMemoryThemeRepository(new \Sylius\Bundle\ThemeBundle\Loader\ThemeLoader(($this->services['sylius.theme.configuration.provider'] ?? $this->services['sylius.theme.configuration.provider'] = new \Sylius\Bundle\ThemeBundle\Configuration\CompositeConfigurationProvider(array())), ($this->services['sylius.factory.theme'] ?? $this->services['sylius.factory.theme'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeFactory()), new \Sylius\Bundle\ThemeBundle\Factory\ThemeAuthorFactory(), new \Sylius\Bundle\ThemeBundle\Factory\ThemeScreenshotFactory(), new \Zend\Hydrator\Reflection(), new \Sylius\Bundle\ThemeBundle\Loader\CircularDependencyChecker()));
    }

    /*
     * Gets the public 'sylius.storage.cart_session' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Storage\CartSessionStorage
     */
    protected function getSylius_Storage_CartSessionService()
    {
        return $this->services['sylius.storage.cart_session'] = new \Sylius\Bundle\CoreBundle\Storage\CartSessionStorage(($this->services['session'] ?? $this->getSessionService()), '_sylius.cart', ($this->services['sylius.repository.order'] ?? $this->getSylius_Repository_OrderService()));
    }

    /*
     * Gets the public 'sylius.storage.cookie' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Storage\CookieStorage
     */
    protected function getSylius_Storage_CookieService()
    {
        return $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage();
    }

    /*
     * Gets the public 'sylius.storage.currency' shared service.
     *
     * @return \Sylius\Component\Core\Currency\CurrencyStorage
     */
    protected function getSylius_Storage_CurrencyService()
    {
        return $this->services['sylius.storage.currency'] = new \Sylius\Component\Core\Currency\CurrencyStorage(($this->services['sylius.storage.cookie'] ?? $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage()));
    }

    /*
     * Gets the public 'sylius.theme.configuration.provider' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Configuration\CompositeConfigurationProvider
     */
    protected function getSylius_Theme_Configuration_ProviderService()
    {
        return $this->services['sylius.theme.configuration.provider'] = new \Sylius\Bundle\ThemeBundle\Configuration\CompositeConfigurationProvider(array());
    }

    /*
     * Gets the public 'sylius.translation.translatable_listener.doctrine.orm' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMTranslatableListener
     */
    protected function getSylius_Translation_TranslatableListener_Doctrine_OrmService()
    {
        return $this->services['sylius.translation.translatable_listener.doctrine.orm'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMTranslatableListener(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()), $this);
    }

    /*
     * Gets the public 'sylius.translator.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getSylius_Translator_ListenerService()
    {
        return $this->services['sylius.translator.listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Translation\ThemeAwareTranslator
     */
    protected function getTranslatorService()
    {
        $a = ($this->privates['translation.loader.yml'] ?? $this->getTranslation_Loader_YmlService());
        $b = ($this->privates['translation.loader.xliff'] ?? $this->getTranslation_Loader_XliffService());

        $c = new \Sylius\Bundle\ThemeBundle\Translation\Translator(new \Sylius\Bundle\ThemeBundle\Translation\Provider\Loader\TranslatorLoaderProvider(array('php' => ($this->privates['translation.loader.php'] ?? $this->getTranslation_Loader_PhpService()), 'yaml' => $a, 'yml' => $a, 'xlf' => $b, 'xliff' => $b, 'po' => ($this->privates['translation.loader.po'] ?? $this->getTranslation_Loader_PoService()), 'mo' => ($this->privates['translation.loader.mo'] ?? $this->getTranslation_Loader_MoService()), 'ts' => ($this->privates['translation.loader.qt'] ?? $this->getTranslation_Loader_QtService()), 'csv' => ($this->privates['translation.loader.csv'] ?? $this->getTranslation_Loader_CsvService()), 'res' => ($this->privates['translation.loader.res'] ?? $this->getTranslation_Loader_ResService()), 'dat' => ($this->privates['translation.loader.dat'] ?? $this->getTranslation_Loader_DatService()), 'ini' => ($this->privates['translation.loader.ini'] ?? $this->getTranslation_Loader_IniService()), 'json' => ($this->privates['translation.loader.json'] ?? $this->getTranslation_Loader_JsonService()))), new \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\CompositeTranslatorResourceProvider(array(0 => new \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\TranslatorResourceProvider(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.af.yml'), 2 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.af.yml'), 3 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.af.yml'), 4 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.af.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.af.yml'), 6 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.af.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.af.yml'), 8 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.af.yml'), 9 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.af.yml'), 10 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.af.yml'), 11 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.af.yml'), 12 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.af.yml'), 13 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.af.yml'), 14 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.af.yml'), 15 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.af.yml'), 16 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.af.yml'), 17 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.af.yml'), 18 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 19 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 20 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf'), 21 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.ar.yml'), 22 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.ar.yml'), 23 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ar.yml'), 24 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.ar.yml'), 25 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ar.yml'), 26 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.ar.yml'), 27 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.ar.yml'), 28 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ar.yml'), 29 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ar.yml'), 30 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ar.yml'), 31 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.ar.yml'), 32 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ar.yml'), 33 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.ar.yml'), 34 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ar.yml'), 35 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ar.yml'), 36 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ar.yml'), 37 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ar.yml'), 38 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.ar.yml'), 39 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ar.yml'), 40 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.ar.yml'), 41 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.ar.yml'), 42 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ar.yml'), 43 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.ar.yml'), 44 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ar.yml'), 45 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ar.yml'), 46 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ar.yml'), 47 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.ar.yml'), 48 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.ar.yml'), 49 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ar.yml'), 50 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.ar.yml'), 51 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.ar.yml'), 52 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ar.yml'), 53 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.ar.yml'), 54 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.ar.yml'), 55 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ar.yml'), 56 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.ar.yml'), 57 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.ar.yml'), 58 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.ar.yml'), 59 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ar.yml'), 60 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ar.yml'), 61 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ar.yml'), 62 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.ar.yml'), 63 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.ar.yml'), 64 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.ar.xliff'), 65 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.ar.xliff'), 66 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ar.yml'), 67 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.ar.yml'), 68 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.ar.yml'), 69 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.ar.yml'), 70 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 71 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 72 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf'), 73 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.az.xliff'), 74 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 75 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 76 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf'), 77 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.bg.yml'), 78 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.bg.yml'), 79 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.bg.yml'), 80 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.bg.yml'), 81 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.bg.yml'), 82 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.bg.yml'), 83 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.bg.yml'), 84 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.bg.yml'), 85 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.bg.yml'), 86 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.bg.yml'), 87 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.bg.yml'), 88 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.bg.yml'), 89 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.bg.yml'), 90 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.bg.yml'), 91 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.bg.yml'), 92 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.bg.yml'), 93 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.bg.yml'), 94 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.bg.yml'), 95 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.bg.yml'), 96 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.bg.yml'), 97 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.bg.yml'), 98 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.bg.yml'), 99 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.bg.yml'), 100 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.bg.yml'), 101 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.bg.yml'), 102 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.bg.yml'), 103 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.bg.yml'), 104 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.bg.yml'), 105 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.bg.yml'), 106 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.bg.yml'), 107 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.bg.yml'), 108 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.bg.yml'), 109 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.bg.yml'), 110 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.bg.yml'), 111 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.bg.yml'), 112 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.bg.yml'), 113 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.bg.yml'), 114 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.bg.yml'), 115 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.bg.yml'), 116 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.bg.yml'), 117 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.bg.yml'), 118 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.bg.yml'), 119 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.bg.yml'), 120 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.bg.xliff'), 121 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.bg.yml'), 122 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.bg.yml'), 123 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.bg.yml'), 124 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.bg.yml'), 125 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 126 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 127 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf'), 128 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ca.yml'), 129 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ca.yml'), 130 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.ca.yml'), 131 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ca.yml'), 132 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ca.yml'), 133 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.ca.yml'), 134 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ca.yml'), 135 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.ca.yml'), 136 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ca.yml'), 137 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ca.yml'), 138 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ca.yml'), 139 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ca.yml'), 140 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.ca.yml'), 141 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ca.yml'), 142 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ca.yml'), 143 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ca.yml'), 144 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ca.yml'), 145 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ca.yml'), 146 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.ca.yml'), 147 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ca.yml'), 148 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.ca.yml'), 149 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ca.yml'), 150 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.ca.yml'), 151 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ca.yml'), 152 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ca.yml'), 153 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.ca.yml'), 154 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.ca.xliff'), 155 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.ca.xliff'), 156 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ca.yml'), 157 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.ca.yml'), 158 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 159 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 160 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf'), 161 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.cs.yml'), 162 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.cs.yml'), 163 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.cs.yml'), 164 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.cs.yml'), 165 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.cs.yml'), 166 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.cs.yml'), 167 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.cs.yml'), 168 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.cs.yml'), 169 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.cs.yml'), 170 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.cs.yml'), 171 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.cs.yml'), 172 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.cs.yml'), 173 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.cs.yml'), 174 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.cs.yml'), 175 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.cs.yml'), 176 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.cs.yml'), 177 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.cs.yml'), 178 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.cs.yml'), 179 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.cs.yml'), 180 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.cs.yml'), 181 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.cs.yml'), 182 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.cs.yml'), 183 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.cs.yml'), 184 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.cs.yml'), 185 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.cs.yml'), 186 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.cs.yml'), 187 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.cs.yml'), 188 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.cs.yml'), 189 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.cs.yml'), 190 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.cs.yml'), 191 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.cs.yml'), 192 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.cs.yml'), 193 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.cs.yml'), 194 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.cs.yml'), 195 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.cs.yml'), 196 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.cs.yml'), 197 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.cs.yml'), 198 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.cs.yml'), 199 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.cs.yml'), 200 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.cs.yml'), 201 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.cs.yml'), 202 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.cs.yml'), 203 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.cs.yml'), 204 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.cs.xliff'), 205 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.cs.xliff'), 206 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.cs.yml'), 207 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.cs.yml'), 208 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.cs.yml'), 209 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.cs.yml'), 210 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf'), 211 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 212 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 213 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf'), 214 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.da.yml'), 215 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.da.yml'), 216 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.da.yml'), 217 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.da.yml'), 218 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.da.yml'), 219 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.da.yml'), 220 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.da.yml'), 221 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.da.yml'), 222 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.da.yml'), 223 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.da.yml'), 224 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.da.yml'), 225 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.da.yml'), 226 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.da.yml'), 227 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.da.yml'), 228 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.da.yml'), 229 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.da.yml'), 230 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.da.yml'), 231 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.da.yml'), 232 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.da.yml'), 233 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.da.yml'), 234 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.da.yml'), 235 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.da.yml'), 236 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.da.yml'), 237 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.da.yml'), 238 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.da.yml'), 239 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.da.yml'), 240 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.da.yml'), 241 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.da.yml'), 242 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.da.yml'), 243 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.da.yml'), 244 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.da.yml'), 245 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.da.yml'), 246 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.da.yml'), 247 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.da.yml'), 248 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.da.yml'), 249 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.da.yml'), 250 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.da.yml'), 251 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.da.yml'), 252 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.da.yml'), 253 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.da.yml'), 254 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.da.yml'), 255 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.da.yml'), 256 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.da.yml'), 257 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.da.xliff'), 258 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.da.yml'), 259 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.da.yml'), 260 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.da.yml'), 261 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.da.yml'), 262 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 263 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 264 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf'), 265 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.de.yml'), 266 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.de.yml'), 267 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.de.yml'), 268 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.de.yml'), 269 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.de.yml'), 270 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.de.yml'), 271 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.de.yml'), 272 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.de.yml'), 273 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.de.yml'), 274 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.de.yml'), 275 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.de.yml'), 276 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.de.yml'), 277 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.de.yml'), 278 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.de.yml'), 279 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.de.yml'), 280 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.de.yml'), 281 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.de.yml'), 282 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.de.yml'), 283 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.de.yml'), 284 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.de.yml'), 285 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.de.yml'), 286 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.de.yml'), 287 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.de.yml'), 288 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.de.yml'), 289 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.de.yml'), 290 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.de.yml'), 291 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.de.yml'), 292 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.de.yml'), 293 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.de.yml'), 294 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.de.yml'), 295 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.de.yml'), 296 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.de.yml'), 297 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.de.yml'), 298 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.de.yml'), 299 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.de.yml'), 300 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.de.yml'), 301 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.de.yml'), 302 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.de.yml'), 303 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.de.yml'), 304 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.de.yml'), 305 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.de.yml'), 306 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.de.yml'), 307 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.de.yml'), 308 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.de.xliff'), 309 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.de.xliff'), 310 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.de.xliff'), 311 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.de.xliff'), 312 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.de.yml'), 313 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.de.yml'), 314 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.de.yml'), 315 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.de.yml'), 316 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.de.yml'), 317 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 318 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 319 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf'), 320 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.el.yml'), 321 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.el.yml'), 322 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.el.yml'), 323 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.el.yml'), 324 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.el.yml'), 325 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.el.yml'), 326 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.el.yml'), 327 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.el.yml'), 328 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.el.yml'), 329 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.el.yml'), 330 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.el.yml'), 331 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.el.yml'), 332 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.el.yml'), 333 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.el.yml'), 334 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.el.yml'), 335 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.el.yml'), 336 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.el.yml'), 337 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.el.yml'), 338 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.el.yml'), 339 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.el.yml'), 340 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.el.yml'), 341 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.el.yml'), 342 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.el.yml'), 343 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.el.yml'), 344 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.el.yml'), 345 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.el.yml'), 346 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.el.yml'), 347 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.el.yml'), 348 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.el.yml'), 349 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.el.yml'), 350 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.el.yml'), 351 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.el.yml'), 352 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.el.yml'), 353 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.el.yml'), 354 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.el.yml'), 355 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.el.yml'), 356 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.el.yml'), 357 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.el.yml'), 358 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.el.yml'), 359 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 360 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 361 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf'), 362 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.en.yml'), 363 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.en.yml'), 364 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.en.yml'), 365 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.en.yml'), 366 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.en.yml'), 367 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.en.yml'), 368 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.en.yml'), 369 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.en.yml'), 370 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.en.yml'), 371 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.en.yml'), 372 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.en.yml'), 373 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.en.yml'), 374 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.en.yml'), 375 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.en.yml'), 376 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.en.yml'), 377 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.en.yml'), 378 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.en.yml'), 379 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.en.yml'), 380 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.en.yml'), 381 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.en.yml'), 382 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.en.yml'), 383 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.en.yml'), 384 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.en.yml'), 385 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.en.yml'), 386 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.en.yml'), 387 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.en.yml'), 388 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.en.yml'), 389 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.en.yml'), 390 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.en.yml'), 391 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.en.yml'), 392 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.en.yml'), 393 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.en.yml'), 394 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.en.yml'), 395 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.en.yml'), 396 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.en.yml'), 397 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.en.yml'), 398 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.en.yml'), 399 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.en.yml'), 400 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.en.yml'), 401 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.en.yml'), 402 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.en.yml'), 403 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.en.yml'), 404 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.en.yml'), 405 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.en.xliff'), 406 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.en.xliff'), 407 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.en.xliff'), 408 => ($this->targetDirs[3].'\\vendor\\payum\\payum-bundle/Resources/translations\\PayumBundle.en.yml'), 409 => ($this->targetDirs[3].'\\vendor\\payum\\payum-bundle/Resources/translations\\validators.en.yml'), 410 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.en.xliff'), 411 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.en.yml'), 412 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.en.yml'), 413 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.en.yml'), 414 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.en.yml'), 415 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.en.yml'), 416 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 417 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 418 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf'), 419 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.es.yml'), 420 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.es.yml'), 421 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.es.yml'), 422 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.es.yml'), 423 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.es.yml'), 424 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.es.yml'), 425 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.es.yml'), 426 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.es.yml'), 427 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.es.yml'), 428 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.es.yml'), 429 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.es.yml'), 430 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.es.yml'), 431 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.es.yml'), 432 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.es.yml'), 433 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.es.yml'), 434 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.es.yml'), 435 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.es.yml'), 436 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.es.yml'), 437 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.es.yml'), 438 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.es.yml'), 439 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.es.yml'), 440 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.es.yml'), 441 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.es.yml'), 442 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.es.yml'), 443 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.es.yml'), 444 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.es.yml'), 445 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.es.yml'), 446 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.es.yml'), 447 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.es.yml'), 448 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.es.yml'), 449 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.es.yml'), 450 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.es.yml'), 451 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.es.yml'), 452 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.es.yml'), 453 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.es.yml'), 454 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.es.yml'), 455 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.es.yml'), 456 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.es.yml'), 457 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.es.yml'), 458 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.es.yml'), 459 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.es.yml'), 460 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.es.yml'), 461 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.es.yml'), 462 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.es.xliff'), 463 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.es.xliff'), 464 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.es.yml'), 465 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.es.yml'), 466 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.es.yml'), 467 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.es.yml'), 468 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 469 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 470 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.et.yml'), 471 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.et.yml'), 472 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.et.yml'), 473 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.et.yml'), 474 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.et.yml'), 475 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.et.yml'), 476 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.et.yml'), 477 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.et.yml'), 478 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.et.yml'), 479 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.et.yml'), 480 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.et.yml'), 481 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.et.yml'), 482 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.et.yml'), 483 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.et.yml'), 484 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.et.yml'), 485 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.et.yml'), 486 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.et.yml'), 487 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.et.yml'), 488 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.et.yml'), 489 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.et.yml'), 490 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.et.yml'), 491 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.et.yml'), 492 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 493 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 494 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.eu.xliff'), 495 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 496 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 497 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf'), 498 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.fa.yml'), 499 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.fa.yml'), 500 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.fa.yml'), 501 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.fa.yml'), 502 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.fa.yml'), 503 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.fa.yml'), 504 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.fa.yml'), 505 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.fa.yml'), 506 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.fa.yml'), 507 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.fa.yml'), 508 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.fa.yml'), 509 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.fa.yml'), 510 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.fa.yml'), 511 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.fa.yml'), 512 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.fa.yml'), 513 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.fa.yml'), 514 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.fa.yml'), 515 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.fa.yml'), 516 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.fa.yml'), 517 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.fa.yml'), 518 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.fa.yml'), 519 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.fa.yml'), 520 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.fa.yml'), 521 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fa.yml'), 522 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.fa.yml'), 523 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.fa.yml'), 524 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.fa.yml'), 525 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.fa.yml'), 526 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.fa.yml'), 527 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.fa.yml'), 528 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.fa.yml'), 529 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.fa.yml'), 530 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.fa.yml'), 531 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.fa.yml'), 532 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.fa.yml'), 533 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.fa.yml'), 534 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.fa.yml'), 535 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.fa.yml'), 536 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.fa.yml'), 537 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.fa.yml'), 538 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.fa.yml'), 539 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.fa.yml'), 540 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.fa.yml'), 541 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.fa.xliff'), 542 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.fa.xliff'), 543 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.fa.yml'), 544 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.fa.yml'), 545 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.fa.yml'), 546 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.fa.yml'), 547 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 548 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 549 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.fi.yml'), 550 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.fi.yml'), 551 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.fi.yml'), 552 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.fi.yml'), 553 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.fi.yml'), 554 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.fi.yml'), 555 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.fi.yml'), 556 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.fi.yml'), 557 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.fi.yml'), 558 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.fi.yml'), 559 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.fi.yml'), 560 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.fi.yml'), 561 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.fi.yml'), 562 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fi.yml'), 563 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.fi.yml'), 564 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.fi.yml'), 565 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.fi.yml'), 566 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.fi.yml'), 567 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.fi.yml'), 568 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.fi.yml'), 569 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.fi.yml'), 570 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.fi.yml'), 571 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.fi.yml'), 572 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.fi.yml'), 573 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.fi.yml'), 574 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.fi.yml'), 575 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.fi.yml'), 576 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.fi.yml'), 577 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.fi.yml'), 578 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.fi.xliff'), 579 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.fi.xliff'), 580 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.fi.yml'), 581 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.fi.yml'), 582 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.fi.yml'), 583 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 584 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 585 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf'), 586 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.fr.yml'), 587 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.fr.yml'), 588 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.fr.yml'), 589 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.fr.yml'), 590 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.fr.yml'), 591 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.fr.yml'), 592 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.fr.yml'), 593 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.fr.yml'), 594 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.fr.yml'), 595 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.fr.yml'), 596 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.fr.yml'), 597 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.fr.yml'), 598 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.fr.yml'), 599 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.fr.yml'), 600 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.fr.yml'), 601 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.fr.yml'), 602 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.fr.yml'), 603 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.fr.yml'), 604 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.fr.yml'), 605 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.fr.yml'), 606 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.fr.yml'), 607 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.fr.yml'), 608 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.fr.yml'), 609 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fr.yml'), 610 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.fr.yml'), 611 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.fr.yml'), 612 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.fr.yml'), 613 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.fr.yml'), 614 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.fr.yml'), 615 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.fr.yml'), 616 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.fr.yml'), 617 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.fr.yml'), 618 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.fr.yml'), 619 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.fr.yml'), 620 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.fr.yml'), 621 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.fr.yml'), 622 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.fr.yml'), 623 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.fr.yml'), 624 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.fr.yml'), 625 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.fr.yml'), 626 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.fr.yml'), 627 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.fr.yml'), 628 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.fr.yml'), 629 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.fr.xliff'), 630 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.fr.xliff'), 631 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.fr.xliff'), 632 => ($this->targetDirs[3].'\\vendor\\payum\\payum-bundle/Resources/translations\\PayumBundle.fr.yml'), 633 => ($this->targetDirs[3].'\\vendor\\payum\\payum-bundle/Resources/translations\\validators.fr.yml'), 634 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.fr.xliff'), 635 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.fr.yml'), 636 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.fr.yml'), 637 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.fr.yml'), 638 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.fr.yml'), 639 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.fr.yml'), 640 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 641 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 642 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf'), 643 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.gl.xliff'), 644 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 645 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 646 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf'), 647 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.he.yml'), 648 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.he.yml'), 649 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.he.yml'), 650 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.he.yml'), 651 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.he.yml'), 652 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.he.yml'), 653 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.he.yml'), 654 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.he.yml'), 655 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.he.yml'), 656 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.he.yml'), 657 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.he.yml'), 658 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.he.yml'), 659 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.he.yml'), 660 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.he.yml'), 661 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.he.yml'), 662 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.he.yml'), 663 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.he.yml'), 664 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.he.yml'), 665 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.he.yml'), 666 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.he.yml'), 667 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.he.yml'), 668 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.he.yml'), 669 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.he.yml'), 670 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.he.yml'), 671 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.he.yml'), 672 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.he.yml'), 673 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.he.yml'), 674 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.he.yml'), 675 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.he.yml'), 676 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.he.yml'), 677 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.he.yml'), 678 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.he.yml'), 679 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 680 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 681 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf'), 682 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.hr.yml'), 683 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.hr.yml'), 684 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.hr.yml'), 685 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.hr.yml'), 686 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.hr.yml'), 687 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.hr.yml'), 688 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.hr.yml'), 689 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.hr.yml'), 690 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.hr.yml'), 691 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.hr.yml'), 692 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.hr.yml'), 693 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.hr.yml'), 694 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.hr.yml'), 695 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.hr.yml'), 696 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.hr.yml'), 697 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.hr.yml'), 698 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.hr.yml'), 699 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.hr.yml'), 700 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.hr.yml'), 701 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.hr.yml'), 702 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.hr.yml'), 703 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.hr.yml'), 704 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.hr.yml'), 705 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.hr.yml'), 706 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.hr.yml'), 707 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.hr.yml'), 708 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.hr.yml'), 709 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.hr.yml'), 710 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.hr.yml'), 711 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.hr.yml'), 712 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.hr.yml'), 713 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.hr.yml'), 714 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.hr.yml'), 715 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.hr.yml'), 716 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.hr.yml'), 717 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.hr.yml'), 718 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.hr.yml'), 719 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.hr.yml'), 720 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.hr.yml'), 721 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.hr.yml'), 722 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.hr.yml'), 723 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.hr.yml'), 724 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.hr.yml'), 725 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.hr.xliff'), 726 => ($this->targetDirs[3].'\\vendor\\payum\\payum-bundle/Resources/translations\\PayumBundle.hr.yml'), 727 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.hr.xliff'), 728 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.hr.yml'), 729 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.hr.yml'), 730 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.hr.yml'), 731 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.hr.yml'), 732 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 733 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 734 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf'), 735 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.hu.yml'), 736 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.hu.yml'), 737 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.hu.yml'), 738 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.hu.yml'), 739 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.hu.yml'), 740 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.hu.yml'), 741 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.hu.yml'), 742 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.hu.yml'), 743 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.hu.yml'), 744 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.hu.yml'), 745 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.hu.yml'), 746 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.hu.yml'), 747 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.hu.yml'), 748 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.hu.yml'), 749 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.hu.yml'), 750 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.hu.yml'), 751 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.hu.yml'), 752 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.hu.yml'), 753 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.hu.yml'), 754 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.hu.yml'), 755 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.hu.yml'), 756 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.hu.yml'), 757 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.hu.yml'), 758 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.hu.yml'), 759 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.hu.yml'), 760 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.hu.yml'), 761 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.hu.yml'), 762 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.hu.yml'), 763 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.hu.yml'), 764 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.hu.yml'), 765 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.hu.yml'), 766 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.hu.yml'), 767 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.hu.yml'), 768 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.hu.yml'), 769 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.hu.yml'), 770 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.hu.yml'), 771 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.hu.yml'), 772 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.hu.yml'), 773 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.hu.yml'), 774 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.hu.yml'), 775 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.hu.xliff'), 776 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.hu.xliff'), 777 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.hu.yml'), 778 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.hu.yml'), 779 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.hu.yml'), 780 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 781 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf'), 782 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 783 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 784 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf'), 785 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.id.yml'), 786 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.id.yml'), 787 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.id.yml'), 788 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.id.yml'), 789 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.id.yml'), 790 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.id.yml'), 791 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.id.yml'), 792 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.id.yml'), 793 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.id.yml'), 794 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.id.yml'), 795 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.id.yml'), 796 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.id.yml'), 797 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.id.yml'), 798 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.id.yml'), 799 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.id.yml'), 800 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.id.yml'), 801 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.id.yml'), 802 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.id.yml'), 803 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.id.yml'), 804 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.id.yml'), 805 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.id.yml'), 806 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.id.yml'), 807 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.id.yml'), 808 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.id.yml'), 809 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.id.yml'), 810 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.id.yml'), 811 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.id.yml'), 812 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.id.yml'), 813 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.id.yml'), 814 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.id.yml'), 815 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.id.yml'), 816 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.id.yml'), 817 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.id.yml'), 818 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.id.yml'), 819 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.id.yml'), 820 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.id.yml'), 821 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.id.yml'), 822 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.id.yml'), 823 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.id.yml'), 824 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.id.yml'), 825 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.id.yml'), 826 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.id.yml'), 827 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.id.yml'), 828 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.id.yml'), 829 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.id.yml'), 830 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.id.yml'), 831 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.id.yml'), 832 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 833 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 834 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf'), 835 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.it.yml'), 836 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.it.yml'), 837 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.it.yml'), 838 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.it.yml'), 839 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.it.yml'), 840 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.it.yml'), 841 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.it.yml'), 842 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.it.yml'), 843 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.it.yml'), 844 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.it.yml'), 845 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.it.yml'), 846 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.it.yml'), 847 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.it.yml'), 848 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.it.yml'), 849 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.it.yml'), 850 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.it.yml'), 851 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.it.yml'), 852 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.it.yml'), 853 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.it.yml'), 854 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.it.yml'), 855 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.it.yml'), 856 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.it.yml'), 857 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.it.yml'), 858 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.it.yml'), 859 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.it.yml'), 860 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.it.yml'), 861 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.it.yml'), 862 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.it.yml'), 863 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.it.yml'), 864 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.it.yml'), 865 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.it.yml'), 866 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.it.yml'), 867 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.it.yml'), 868 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.it.yml'), 869 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.it.yml'), 870 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.it.yml'), 871 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.it.yml'), 872 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.it.yml'), 873 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.it.yml'), 874 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.it.yml'), 875 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.it.yml'), 876 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.it.yml'), 877 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.it.yml'), 878 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.it.xliff'), 879 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.it.xliff'), 880 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.it.xliff'), 881 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.it.yml'), 882 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.it.yml'), 883 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.it.yml'), 884 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.it.yml'), 885 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 886 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 887 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf'), 888 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ja.yml'), 889 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ja.yml'), 890 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ja.yml'), 891 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ja.yml'), 892 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ja.yml'), 893 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ja.yml'), 894 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ja.yml'), 895 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ja.yml'), 896 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ja.yml'), 897 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ja.yml'), 898 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ja.yml'), 899 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ja.yml'), 900 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ja.yml'), 901 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ja.yml'), 902 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ja.yml'), 903 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ja.yml'), 904 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.ja.yml'), 905 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ja.yml'), 906 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.ja.yml'), 907 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ja.yml'), 908 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ja.yml'), 909 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ja.yml'), 910 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.ja.yml'), 911 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.ja.xliff'), 912 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ja.yml'), 913 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.ja.yml'), 914 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.ja.yml'), 915 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 916 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 917 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf'), 918 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.lb.xliff'), 919 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 920 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 921 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf'), 922 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.lt.yml'), 923 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.lt.yml'), 924 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.lt.yml'), 925 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.lt.yml'), 926 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.lt.yml'), 927 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.lt.yml'), 928 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.lt.yml'), 929 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.lt.yml'), 930 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.lt.yml'), 931 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.lt.yml'), 932 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.lt.yml'), 933 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.lt.yml'), 934 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.lt.yml'), 935 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.lt.yml'), 936 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.lt.yml'), 937 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.lt.yml'), 938 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.lt.yml'), 939 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.lt.yml'), 940 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.lt.yml'), 941 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.lt.yml'), 942 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.lt.yml'), 943 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.lt.yml'), 944 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.lt.yml'), 945 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.lt.yml'), 946 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.lt.yml'), 947 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.lt.yml'), 948 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.lt.yml'), 949 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.lt.yml'), 950 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.lt.yml'), 951 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.lt.yml'), 952 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.lt.yml'), 953 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.lt.yml'), 954 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.lt.yml'), 955 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.lt.yml'), 956 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.lt.yml'), 957 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.lt.yml'), 958 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.lt.yml'), 959 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.lt.yml'), 960 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.lt.yml'), 961 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.lt.yml'), 962 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.lt.yml'), 963 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.lt.xliff'), 964 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.lt.yml'), 965 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.lt.yml'), 966 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.lt.yml'), 967 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.lt.yml'), 968 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 969 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 970 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf'), 971 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.lv.yml'), 972 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.lv.yml'), 973 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.lv.yml'), 974 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.lv.yml'), 975 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.lv.yml'), 976 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.lv.yml'), 977 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.lv.yml'), 978 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.lv.yml'), 979 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.lv.yml'), 980 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.lv.yml'), 981 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.lv.yml'), 982 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.lv.yml'), 983 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.lv.yml'), 984 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.lv.yml'), 985 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.lv.yml'), 986 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.lv.yml'), 987 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 988 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf'), 989 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 990 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 991 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nb.xlf'), 992 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 993 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 994 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf'), 995 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.nl.yml'), 996 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.nl.yml'), 997 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.nl.yml'), 998 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.nl.yml'), 999 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.nl.yml'), 1000 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.nl.yml'), 1001 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.nl.yml'), 1002 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.nl.yml'), 1003 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.nl.yml'), 1004 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.nl.yml'), 1005 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.nl.yml'), 1006 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.nl.yml'), 1007 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.nl.yml'), 1008 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.nl.yml'), 1009 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.nl.yml'), 1010 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.nl.yml'), 1011 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.nl.yml'), 1012 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.nl.yml'), 1013 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.nl.yml'), 1014 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.nl.yml'), 1015 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.nl.yml'), 1016 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.nl.yml'), 1017 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.nl.yml'), 1018 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.nl.yml'), 1019 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.nl.yml'), 1020 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.nl.yml'), 1021 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.nl.yml'), 1022 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.nl.yml'), 1023 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.nl.yml'), 1024 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.nl.yml'), 1025 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.nl.yml'), 1026 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.nl.yml'), 1027 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.nl.yml'), 1028 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.nl.yml'), 1029 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.nl.yml'), 1030 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.nl.yml'), 1031 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.nl.yml'), 1032 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.nl.yml'), 1033 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.nl.yml'), 1034 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.nl.yml'), 1035 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.nl.yml'), 1036 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.nl.yml'), 1037 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.nl.yml'), 1038 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.nl.xliff'), 1039 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.nl.xliff'), 1040 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.nl.yml'), 1041 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.nl.yml'), 1042 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.nl.yml'), 1043 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.nl.yml'), 1044 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf'), 1045 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nn.xlf'), 1046 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nn.xlf'), 1047 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1048 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 1049 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf'), 1050 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.no.yml'), 1051 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.no.yml'), 1052 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.no.yml'), 1053 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.no.yml'), 1054 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.no.yml'), 1055 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.no.yml'), 1056 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.no.yml'), 1057 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.no.yml'), 1058 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.no.yml'), 1059 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.no.yml'), 1060 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.no.yml'), 1061 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.no.yml'), 1062 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.no.yml'), 1063 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.no.yml'), 1064 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.no.yml'), 1065 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.no.yml'), 1066 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.no.yml'), 1067 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.no.yml'), 1068 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.no.yml'), 1069 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.no.yml'), 1070 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.no.yml'), 1071 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.no.yml'), 1072 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.no.yml'), 1073 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.no.yml'), 1074 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.no.yml'), 1075 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.no.yml'), 1076 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.no.yml'), 1077 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.no.yml'), 1078 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.no.yml'), 1079 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.no.yml'), 1080 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.no.yml'), 1081 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.no.yml'), 1082 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.no.yml'), 1083 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.no.yml'), 1084 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.no.yml'), 1085 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.no.yml'), 1086 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.no.yml'), 1087 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.no.yml'), 1088 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.no.yml'), 1089 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.no.yml'), 1090 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.no.xliff'), 1091 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.no.yml'), 1092 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.no.yml'), 1093 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.no.yml'), 1094 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.no.yml'), 1095 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1096 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 1097 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf'), 1098 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.pl.yml'), 1099 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.pl.yml'), 1100 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.pl.yml'), 1101 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.pl.yml'), 1102 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.pl.yml'), 1103 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.pl.yml'), 1104 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.pl.yml'), 1105 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.pl.yml'), 1106 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.pl.yml'), 1107 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.pl.yml'), 1108 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.pl.yml'), 1109 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.pl.yml'), 1110 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.pl.yml'), 1111 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.pl.yml'), 1112 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.pl.yml'), 1113 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.pl.yml'), 1114 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.pl.yml'), 1115 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.pl.yml'), 1116 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.pl.yml'), 1117 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.pl.yml'), 1118 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.pl.yml'), 1119 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.pl.yml'), 1120 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.pl.yml'), 1121 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.pl.yml'), 1122 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.pl.yml'), 1123 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.pl.yml'), 1124 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.pl.yml'), 1125 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.pl.yml'), 1126 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.pl.yml'), 1127 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.pl.yml'), 1128 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.pl.yml'), 1129 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.pl.yml'), 1130 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.pl.yml'), 1131 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.pl.yml'), 1132 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.pl.yml'), 1133 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.pl.yml'), 1134 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.pl.yml'), 1135 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.pl.yml'), 1136 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.pl.yml'), 1137 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.pl.yml'), 1138 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.pl.yml'), 1139 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.pl.yml'), 1140 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.pl.yml'), 1141 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.pl.xliff'), 1142 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.pl.xliff'), 1143 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.pl.yml'), 1144 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.pl.yml'), 1145 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.pl.yml'), 1146 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.pl.yml'), 1147 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1148 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 1149 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.pt.yml'), 1150 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.pt.yml'), 1151 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.pt.yml'), 1152 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.pt.yml'), 1153 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.pt.yml'), 1154 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.pt.yml'), 1155 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.pt.yml'), 1156 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.pt.yml'), 1157 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.pt.yml'), 1158 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.pt.yml'), 1159 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.pt.yml'), 1160 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.pt.yml'), 1161 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.pt.yml'), 1162 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.pt.yml'), 1163 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.pt.yml'), 1164 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.pt.yml'), 1165 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.pt.yml'), 1166 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.pt.yml'), 1167 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.pt.yml'), 1168 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.pt.yml'), 1169 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.pt.yml'), 1170 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.pt.yml'), 1171 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.pt.yml'), 1172 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.pt.yml'), 1173 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.pt.yml'), 1174 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.pt.yml'), 1175 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.pt.yml'), 1176 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.pt.yml'), 1177 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.pt.yml'), 1178 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.pt.yml'), 1179 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.pt.yml'), 1180 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.pt.yml'), 1181 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.pt.yml'), 1182 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.pt.yml'), 1183 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.pt.yml'), 1184 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.pt.yml'), 1185 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.pt.yml'), 1186 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.pt.yml'), 1187 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.pt.yml'), 1188 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.pt.yml'), 1189 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.pt.yml'), 1190 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.pt.xliff'), 1191 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.pt.xliff'), 1192 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.pt.yml'), 1193 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.pt.yml'), 1194 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.pt.yml'), 1195 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.pt.yml'), 1196 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1197 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 1198 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf'), 1199 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.pt_BR.yml'), 1200 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.pt_BR.yml'), 1201 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.pt_BR.yml'), 1202 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.pt_BR.yml'), 1203 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.pt_BR.yml'), 1204 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.pt_BR.yml'), 1205 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.pt_BR.yml'), 1206 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.pt_BR.yml'), 1207 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.pt_BR.yml'), 1208 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.pt_BR.yml'), 1209 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.pt_BR.yml'), 1210 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.pt_BR.yml'), 1211 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.pt_BR.yml'), 1212 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.pt_BR.yml'), 1213 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.pt_BR.yml'), 1214 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.pt_BR.yml'), 1215 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.pt_BR.yml'), 1216 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.pt_BR.yml'), 1217 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.pt_BR.yml'), 1218 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.pt_BR.yml'), 1219 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.pt_BR.yml'), 1220 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.pt_BR.yml'), 1221 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.pt_BR.yml'), 1222 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.pt_BR.yml'), 1223 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.pt_BR.yml'), 1224 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.pt_BR.yml'), 1225 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.pt_BR.yml'), 1226 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.pt_BR.yml'), 1227 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.pt_BR.yml'), 1228 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.pt_BR.yml'), 1229 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.pt_BR.yml'), 1230 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.pt_BR.yml'), 1231 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.pt_BR.yml'), 1232 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.pt_BR.yml'), 1233 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.pt_BR.yml'), 1234 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.pt_BR.yml'), 1235 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.pt_BR.yml'), 1236 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.pt_BR.yml'), 1237 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.pt_BR.yml'), 1238 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.pt_BR.yml'), 1239 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.pt_BR.yml'), 1240 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.pt_BR.yml'), 1241 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.pt_BR.yml'), 1242 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.pt_BR.xliff'), 1243 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.pt_BR.yml'), 1244 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.pt_BR.yml'), 1245 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.pt_BR.yml'), 1246 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.pt_BR.yml'), 1247 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1248 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 1249 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf'), 1250 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.ro.yml'), 1251 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.ro.yml'), 1252 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ro.yml'), 1253 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.ro.yml'), 1254 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ro.yml'), 1255 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.ro.yml'), 1256 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.ro.yml'), 1257 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ro.yml'), 1258 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ro.yml'), 1259 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ro.yml'), 1260 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.ro.yml'), 1261 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ro.yml'), 1262 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.ro.yml'), 1263 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ro.yml'), 1264 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ro.yml'), 1265 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ro.yml'), 1266 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ro.yml'), 1267 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.ro.yml'), 1268 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ro.yml'), 1269 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.ro.yml'), 1270 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.ro.yml'), 1271 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ro.yml'), 1272 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.ro.yml'), 1273 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ro.yml'), 1274 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ro.yml'), 1275 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ro.yml'), 1276 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.ro.yml'), 1277 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.ro.yml'), 1278 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ro.yml'), 1279 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.ro.yml'), 1280 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.ro.yml'), 1281 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ro.yml'), 1282 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.ro.yml'), 1283 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.ro.yml'), 1284 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ro.yml'), 1285 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.ro.yml'), 1286 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.ro.yml'), 1287 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.ro.yml'), 1288 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ro.yml'), 1289 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ro.yml'), 1290 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ro.yml'), 1291 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.ro.yml'), 1292 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.ro.yml'), 1293 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.ro.xliff'), 1294 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.ro.xliff'), 1295 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ro.yml'), 1296 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.ro.yml'), 1297 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.ro.yml'), 1298 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.ro.yml'), 1299 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1300 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 1301 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf'), 1302 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.ru.yml'), 1303 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.ru.yml'), 1304 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ru.yml'), 1305 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.ru.yml'), 1306 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ru.yml'), 1307 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.ru.yml'), 1308 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.ru.yml'), 1309 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ru.yml'), 1310 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.ru.yml'), 1311 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ru.yml'), 1312 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.ru.yml'), 1313 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ru.yml'), 1314 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.ru.yml'), 1315 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ru.yml'), 1316 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.ru.yml'), 1317 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ru.yml'), 1318 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.ru.yml'), 1319 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.ru.yml'), 1320 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ru.yml'), 1321 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.ru.yml'), 1322 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.ru.yml'), 1323 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ru.yml'), 1324 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.ru.yml'), 1325 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ru.yml'), 1326 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ru.yml'), 1327 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ru.yml'), 1328 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.ru.yml'), 1329 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.ru.yml'), 1330 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ru.yml'), 1331 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.ru.yml'), 1332 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.ru.yml'), 1333 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ru.yml'), 1334 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.ru.yml'), 1335 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.ru.yml'), 1336 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ru.yml'), 1337 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.ru.yml'), 1338 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.ru.yml'), 1339 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.ru.yml'), 1340 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ru.yml'), 1341 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.ru.yml'), 1342 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.ru.yml'), 1343 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.ru.yml'), 1344 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.ru.yml'), 1345 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.ru.xliff'), 1346 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.ru.xliff'), 1347 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.ru.xliff'), 1348 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ru.yml'), 1349 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.ru.yml'), 1350 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.ru.yml'), 1351 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.ru.yml'), 1352 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1353 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 1354 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf'), 1355 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.sk.yml'), 1356 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.sk.yml'), 1357 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.sk.yml'), 1358 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.sk.yml'), 1359 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.sk.yml'), 1360 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.sk.yml'), 1361 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.sk.yml'), 1362 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sk.yml'), 1363 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sk.yml'), 1364 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.sk.yml'), 1365 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.sk.yml'), 1366 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.sk.yml'), 1367 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.sk.yml'), 1368 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sk.yml'), 1369 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sk.yml'), 1370 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sk.yml'), 1371 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sk.yml'), 1372 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.sk.yml'), 1373 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.sk.yml'), 1374 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.sk.yml'), 1375 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.sk.yml'), 1376 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.sk.yml'), 1377 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.sk.yml'), 1378 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sk.yml'), 1379 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sk.yml'), 1380 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.sk.yml'), 1381 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.sk.yml'), 1382 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.sk.yml'), 1383 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.sk.yml'), 1384 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.sk.yml'), 1385 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.sk.yml'), 1386 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.sk.yml'), 1387 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.sk.yml'), 1388 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.sk.yml'), 1389 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.sk.yml'), 1390 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.sk.yml'), 1391 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.sk.yml'), 1392 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.sk.yml'), 1393 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sk.yml'), 1394 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sk.yml'), 1395 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sk.yml'), 1396 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.sk.yml'), 1397 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.sk.yml'), 1398 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.sk.xliff'), 1399 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.sk.xliff'), 1400 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.sk.yml'), 1401 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.sk.yml'), 1402 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.sk.yml'), 1403 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.sk.yml'), 1404 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1405 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 1406 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf'), 1407 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.sl.yml'), 1408 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.sl.yml'), 1409 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.sl.yml'), 1410 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.sl.yml'), 1411 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.sl.yml'), 1412 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sl.yml'), 1413 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sl.yml'), 1414 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.sl.yml'), 1415 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.sl.yml'), 1416 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.sl.yml'), 1417 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.sl.yml'), 1418 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sl.yml'), 1419 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sl.yml'), 1420 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sl.yml'), 1421 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sl.yml'), 1422 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.sl.yml'), 1423 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.sl.yml'), 1424 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.sl.yml'), 1425 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.sl.yml'), 1426 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.sl.yml'), 1427 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.sl.yml'), 1428 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sl.yml'), 1429 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sl.yml'), 1430 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.sl.yml'), 1431 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.sl.yml'), 1432 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.sl.yml'), 1433 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.sl.yml'), 1434 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.sl.yml'), 1435 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.sl.yml'), 1436 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.sl.yml'), 1437 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.sl.yml'), 1438 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.sl.yml'), 1439 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.sl.yml'), 1440 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.sl.yml'), 1441 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.sl.yml'), 1442 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sl.yml'), 1443 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sl.yml'), 1444 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sl.yml'), 1445 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.sl.yml'), 1446 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.sl.yml'), 1447 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.sl.xliff'), 1448 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.sl.xliff'), 1449 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.sl.yml'), 1450 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.sl.yml'), 1451 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.sl.yml'), 1452 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.sl.yml'), 1453 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf'), 1454 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.sq.yml'), 1455 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.sq.yml'), 1456 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.sq.yml'), 1457 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.sq.yml'), 1458 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sq.yml'), 1459 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sq.yml'), 1460 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.sq.yml'), 1461 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.sq.yml'), 1462 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.sq.yml'), 1463 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.sq.yml'), 1464 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sq.yml'), 1465 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sq.yml'), 1466 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sq.yml'), 1467 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sq.yml'), 1468 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.sq.yml'), 1469 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.sq.yml'), 1470 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.sq.yml'), 1471 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.sq.yml'), 1472 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.sq.yml'), 1473 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.sq.yml'), 1474 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sq.yml'), 1475 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sq.yml'), 1476 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.sq.yml'), 1477 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.sq.yml'), 1478 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.sq.yml'), 1479 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.sq.yml'), 1480 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.sq.yml'), 1481 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.sq.yml'), 1482 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.sq.yml'), 1483 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.sq.yml'), 1484 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.sq.yml'), 1485 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.sq.yml'), 1486 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.sq.yml'), 1487 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sq.yml'), 1488 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sq.yml'), 1489 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sq.yml'), 1490 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.sq.yml'), 1491 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.sq.yml'), 1492 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.sq.yml'), 1493 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.sq.yml'), 1494 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.sq.yml'), 1495 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1496 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 1497 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf'), 1498 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.sr_Cyrl.xliff'), 1499 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1500 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 1501 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf'), 1502 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.sr_Latn.xliff'), 1503 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1504 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 1505 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf'), 1506 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.sv.yml'), 1507 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.sv.yml'), 1508 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.sv.yml'), 1509 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.sv.yml'), 1510 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.sv.yml'), 1511 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sv.yml'), 1512 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sv.yml'), 1513 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.sv.yml'), 1514 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.sv.yml'), 1515 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.sv.yml'), 1516 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.sv.yml'), 1517 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sv.yml'), 1518 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sv.yml'), 1519 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sv.yml'), 1520 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.sv.yml'), 1521 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.sv.yml'), 1522 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.sv.yml'), 1523 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.sv.yml'), 1524 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sv.yml'), 1525 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sv.yml'), 1526 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.sv.yml'), 1527 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.sv.yml'), 1528 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.sv.yml'), 1529 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.sv.yml'), 1530 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.sv.yml'), 1531 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.sv.yml'), 1532 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.sv.yml'), 1533 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.sv.yml'), 1534 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.sv.yml'), 1535 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.sv.yml'), 1536 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.sv.yml'), 1537 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.sv.yml'), 1538 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sv.yml'), 1539 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sv.yml'), 1540 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.sv.yml'), 1541 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.sv.xliff'), 1542 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.sv.yml'), 1543 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.sv.yml'), 1544 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.sv.yml'), 1545 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1546 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf'), 1547 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.th.yml'), 1548 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.th.yml'), 1549 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.th.yml'), 1550 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.th.yml'), 1551 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.th.yml'), 1552 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.th.yml'), 1553 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.th.yml'), 1554 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.th.yml'), 1555 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.th.yml'), 1556 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.th.yml'), 1557 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.th.yml'), 1558 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.th.yml'), 1559 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.th.yml'), 1560 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.th.yml'), 1561 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.th.yml'), 1562 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.th.yml'), 1563 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.th.yml'), 1564 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.th.yml'), 1565 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.th.yml'), 1566 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.th.yml'), 1567 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.th.yml'), 1568 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.th.yml'), 1569 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.th.yml'), 1570 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.th.yml'), 1571 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.th.yml'), 1572 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.th.yml'), 1573 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.th.yml'), 1574 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.th.yml'), 1575 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.th.yml'), 1576 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.th.yml'), 1577 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.th.yml'), 1578 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.th.yml'), 1579 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.th.yml'), 1580 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.th.yml'), 1581 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.th.yml'), 1582 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.th.yml'), 1583 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.th.yml'), 1584 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.th.yml'), 1585 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.th.yml'), 1586 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.th.yml'), 1587 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.th.yml'), 1588 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.th.yml'), 1589 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.th.xliff'), 1590 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.th.yml'), 1591 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.th.yml'), 1592 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.th.yml'), 1593 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tl.xlf'), 1594 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tl.xlf'), 1595 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tl.xlf'), 1596 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1597 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf'), 1598 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.tr.yml'), 1599 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.tr.yml'), 1600 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.tr.yml'), 1601 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.tr.yml'), 1602 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.tr.yml'), 1603 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.tr.yml'), 1604 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.tr.yml'), 1605 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.tr.yml'), 1606 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.tr.yml'), 1607 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.tr.yml'), 1608 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.tr.yml'), 1609 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.tr.yml'), 1610 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.tr.yml'), 1611 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.tr.yml'), 1612 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.tr.yml'), 1613 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.tr.yml'), 1614 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.tr.yml'), 1615 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.tr.yml'), 1616 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.tr.yml'), 1617 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.tr.yml'), 1618 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.tr.yml'), 1619 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.tr.yml'), 1620 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.tr.yml'), 1621 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.tr.yml'), 1622 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.tr.yml'), 1623 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.tr.yml'), 1624 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.tr.yml'), 1625 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.tr.yml'), 1626 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.tr.yml'), 1627 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.tr.yml'), 1628 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.tr.yml'), 1629 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.tr.yml'), 1630 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.tr.yml'), 1631 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.tr.yml'), 1632 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.tr.yml'), 1633 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.tr.yml'), 1634 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.tr.yml'), 1635 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.tr.yml'), 1636 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.tr.yml'), 1637 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.tr.yml'), 1638 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.tr.yml'), 1639 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.tr.yml'), 1640 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.tr.yml'), 1641 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.tr.xliff'), 1642 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.tr.yml'), 1643 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.tr.yml'), 1644 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.tr.yml'), 1645 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.tr.yml'), 1646 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1647 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 1648 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.uk.yml'), 1649 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.uk.yml'), 1650 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.uk.yml'), 1651 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.uk.yml'), 1652 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.uk.yml'), 1653 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.uk.yml'), 1654 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.uk.yml'), 1655 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.uk.yml'), 1656 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.uk.yml'), 1657 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.uk.yml'), 1658 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.uk.yml'), 1659 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.uk.yml'), 1660 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.uk.yml'), 1661 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.uk.yml'), 1662 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.uk.yml'), 1663 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.uk.yml'), 1664 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.uk.yml'), 1665 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.uk.yml'), 1666 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.uk.yml'), 1667 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.uk.yml'), 1668 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.uk.yml'), 1669 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.uk.yml'), 1670 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.uk.yml'), 1671 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.uk.yml'), 1672 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.uk.yml'), 1673 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.uk.yml'), 1674 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.uk.yml'), 1675 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.uk.yml'), 1676 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.uk.yml'), 1677 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.uk.yml'), 1678 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.uk.yml'), 1679 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.uk.yml'), 1680 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.uk.yml'), 1681 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.uk.yml'), 1682 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.uk.yml'), 1683 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.uk.yml'), 1684 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.uk.yml'), 1685 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.uk.yml'), 1686 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.uk.yml'), 1687 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.uk.yml'), 1688 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.uk.yml'), 1689 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.uk.yml'), 1690 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.uk.yml'), 1691 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.uk.xliff'), 1692 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.uk.xliff'), 1693 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.uk.yml'), 1694 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.uk.yml'), 1695 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.uk.yml'), 1696 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.uk.yml'), 1697 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1698 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf'), 1699 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.vi.yml'), 1700 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.vi.yml'), 1701 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.vi.yml'), 1702 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.vi.yml'), 1703 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.vi.yml'), 1704 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.vi.yml'), 1705 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.vi.yml'), 1706 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.vi.yml'), 1707 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.vi.yml'), 1708 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.vi.yml'), 1709 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.vi.yml'), 1710 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.vi.yml'), 1711 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.vi.yml'), 1712 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.vi.yml'), 1713 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.vi.yml'), 1714 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.vi.yml'), 1715 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.vi.yml'), 1716 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.vi.yml'), 1717 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.vi.yml'), 1718 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.vi.yml'), 1719 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.vi.yml'), 1720 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1721 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 1722 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf'), 1723 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.zh_CN.yml'), 1724 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.zh_CN.yml'), 1725 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.zh_CN.yml'), 1726 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.zh_CN.yml'), 1727 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.zh_CN.yml'), 1728 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.zh_CN.yml'), 1729 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.zh_CN.yml'), 1730 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.zh_CN.yml'), 1731 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.zh_CN.yml'), 1732 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.zh_CN.yml'), 1733 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.zh_CN.yml'), 1734 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.zh_CN.yml'), 1735 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.zh_CN.yml'), 1736 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.zh_CN.yml'), 1737 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.zh_CN.yml'), 1738 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.zh_CN.yml'), 1739 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.zh_CN.yml'), 1740 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.zh_CN.yml'), 1741 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.zh_CN.yml'), 1742 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.zh_CN.yml'), 1743 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.zh_CN.yml'), 1744 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.zh_CN.yml'), 1745 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.zh_CN.yml'), 1746 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.zh_CN.yml'), 1747 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.zh_CN.yml'), 1748 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.zh_CN.yml'), 1749 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.zh_CN.yml'), 1750 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.zh_CN.yml'), 1751 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.zh_CN.yml'), 1752 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.zh_CN.yml'), 1753 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.zh_CN.yml'), 1754 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.zh_CN.yml'), 1755 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.zh_CN.yml'), 1756 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.zh_CN.yml'), 1757 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.zh_CN.yml'), 1758 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.zh_CN.yml'), 1759 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.zh_CN.yml'), 1760 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.zh_CN.yml'), 1761 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.zh_CN.yml'), 1762 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.zh_CN.yml'), 1763 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.zh_CN.yml'), 1764 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.zh_CN.yml'), 1765 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.zh_CN.yml'), 1766 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src/Resources/translations\\SonataCoreBundle.zh_CN.xliff'), 1767 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.zh_CN.xliff'), 1768 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.zh_CN.yml'), 1769 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.zh_CN.yml'), 1770 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.zh_CN.yml'), 1771 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.zh_CN.yml'), 1772 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf'), 1773 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.zh_TW.yml'), 1774 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.zh_TW.yml'), 1775 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.zh_TW.yml'), 1776 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.zh_TW.yml'), 1777 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.zh_TW.yml'), 1778 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.zh_TW.yml'), 1779 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.zh_TW.yml'), 1780 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.zh_TW.yml'), 1781 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.zh_TW.yml'), 1782 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.zh_TW.yml'), 1783 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.zh_TW.yml'), 1784 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.zh_TW.yml'), 1785 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.zh_TW.yml'), 1786 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.zh_TW.yml'), 1787 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.zh_TW.yml'), 1788 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.zh_TW.yml'), 1789 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.zh_TW.yml'), 1790 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.zh_TW.yml'), 1791 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.zh_TW.yml'), 1792 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.zh_TW.yml'), 1793 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.zh_TW.yml'), 1794 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.zh_TW.yml'), 1795 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.zh_TW.yml'), 1796 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.zh_TW.yml'), 1797 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.zh_TW.yml'), 1798 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.zh_TW.yml'), 1799 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.zh_TW.yml'), 1800 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.zh_TW.yml'), 1801 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.zh_TW.yml'), 1802 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.zh_TW.yml'), 1803 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.zh_TW.yml'), 1804 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.zh_TW.yml'), 1805 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.zh_TW.yml'), 1806 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.zh_TW.yml'), 1807 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf'), 1808 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ua.xlf'), 1809 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.de_CH.yml'), 1810 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.de_CH.yml'), 1811 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.de_CH.yml'), 1812 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.de_CH.yml'), 1813 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.de_CH.yml'), 1814 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.de_CH.yml'), 1815 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.de_CH.yml'), 1816 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.de_CH.yml'), 1817 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.de_CH.yml'), 1818 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.de_CH.yml'), 1819 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.de_CH.yml'), 1820 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.de_CH.yml'), 1821 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.de_CH.yml'), 1822 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.de_CH.yml'), 1823 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.de_CH.yml'), 1824 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.de_CH.yml'), 1825 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.de_CH.yml'), 1826 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.de_CH.yml'), 1827 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.de_CH.yml'), 1828 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.de_CH.yml'), 1829 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.de_CH.yml'), 1830 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.de_CH.yml'), 1831 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.de_CH.yml'), 1832 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.de_CH.yml'), 1833 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.de_CH.yml'), 1834 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.de_CH.yml'), 1835 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.de_CH.yml'), 1836 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.de_CH.yml'), 1837 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.de_CH.yml'), 1838 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.de_CH.yml'), 1839 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.de_CH.yml'), 1840 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.de_CH.yml'), 1841 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.de_CH.yml'), 1842 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.de_CH.yml'), 1843 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.de_CH.yml'), 1844 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.de_CH.yml'), 1845 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.de_CH.yml'), 1846 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.de_CH.yml'), 1847 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.de_CH.yml'), 1848 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.de_CH.yml'), 1849 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.de_CH.yml'), 1850 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.de_CH.yml'), 1851 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.de_CH.yml'), 1852 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.de_CH.yml'), 1853 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.de_CH.yml'), 1854 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.de_CH.yml'), 1855 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.de_CH.yml'), 1856 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\flashes.sr_CS.yml'), 1857 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle/Resources/translations\\validators.sr_CS.yml'), 1858 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.sr_CS.yml'), 1859 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.sr_CS.yml'), 1860 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.sr_CS.yml'), 1861 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.sr_CS.yml'), 1862 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\flashes.sr_CS.yml'), 1863 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sr_CS.yml'), 1864 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.sr_CS.yml'), 1865 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.sr_CS.yml'), 1866 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.sr_CS.yml'), 1867 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.sr_CS.yml'), 1868 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.sr_CS.yml'), 1869 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sr_CS.yml'), 1870 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.sr_CS.yml'), 1871 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sr_CS.yml'), 1872 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.sr_CS.yml'), 1873 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.sr_CS.yml'), 1874 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.sr_CS.yml'), 1875 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.sr_CS.yml'), 1876 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.sr_CS.yml'), 1877 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.sr_CS.yml'), 1878 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.sr_CS.yml'), 1879 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sr_CS.yml'), 1880 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sr_CS.yml'), 1881 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.sr_CS.yml'), 1882 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.sr_CS.yml'), 1883 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.sr_CS.yml'), 1884 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.sr_CS.yml'), 1885 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.sr_CS.yml'), 1886 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\flashes.sr_CS.yml'), 1887 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.sr_CS.yml'), 1888 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.sr_CS.yml'), 1889 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\flashes.sr_CS.yml'), 1890 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.sr_CS.yml'), 1891 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\flashes.sr_CS.yml'), 1892 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.sr_CS.yml'), 1893 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\validators.sr_CS.yml'), 1894 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sr_CS.yml'), 1895 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.sr_CS.yml'), 1896 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr_CS.yml'), 1897 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.sr_CS.yml'), 1898 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\validators.sr_CS.yml'), 1899 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.sr_CS.yml'), 1900 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\validators.sr_CS.yml'), 1901 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.sr_CS.yml'), 1902 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.sr_CS.yml'), 1903 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.be.yml'), 1904 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\validators.be.yml'), 1905 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.be.yml'), 1906 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\validators.be.yml'), 1907 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.be.yml'), 1908 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\validators.be.yml'), 1909 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.be.yml'), 1910 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\validators.be.yml'), 1911 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.be.yml'), 1912 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.be.yml'), 1913 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.be.yml'), 1914 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.be.yml'), 1915 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.be.yml'), 1916 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.be.yml'), 1917 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\flashes.be.yml'), 1918 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.be.yml'), 1919 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\validators.be.yml'), 1920 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\flashes.be.yml'), 1921 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.be.yml'), 1922 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\validators.be.yml'), 1923 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.be.yml'), 1924 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.be.yml'), 1925 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.be.yml'), 1926 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\validators.be.yml'), 1927 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.be.yml'), 1928 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.be.yml'), 1929 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.be.yml'), 1930 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.be.yml'), 1931 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.be.yml'), 1932 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.be.yml'), 1933 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.be.yml'), 1934 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.be.yml'), 1935 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.be.yml'), 1936 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.be.yml'), 1937 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.be.yml'), 1938 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.be.yml'), 1939 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.be.yml'), 1940 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.be.yml'), 1941 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ko.yml'), 1942 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ko.yml'), 1943 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ko.yml'), 1944 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ko.yml'), 1945 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ko.yml'), 1946 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ko.yml'), 1947 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ko.yml'), 1948 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ko.yml'), 1949 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ko.yml'), 1950 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ko.yml'), 1951 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ko.yml'), 1952 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ko.yml'), 1953 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ko.yml'), 1954 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ko.yml'), 1955 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ko.yml'), 1956 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ko.yml'), 1957 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ko.yml'), 1958 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.ko.yml'), 1959 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.mk.yml'), 1960 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.mk.yml'), 1961 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.mk.yml'), 1962 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.mk.yml'), 1963 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.mk.yml'), 1964 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.mk.yml'), 1965 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.mk.yml'), 1966 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.mk.yml'), 1967 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.mk.yml'), 1968 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.mk.yml'), 1969 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.mk.yml'), 1970 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.mk.yml'), 1971 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\flashes.mk.yml'), 1972 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.mk.yml'), 1973 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\validators.mk.yml'), 1974 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.mk.yml'), 1975 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\validators.mk.yml'), 1976 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.mk.yml'), 1977 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.mk.yml'), 1978 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.mk.yml'), 1979 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.mk.yml'), 1980 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.mk.yml'), 1981 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.ms.yml'), 1982 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.ms.yml'), 1983 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.ms.yml'), 1984 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.ms.yml'), 1985 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.ms.yml'), 1986 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.ms.yml'), 1987 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.ms.yml'), 1988 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.ms.yml'), 1989 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.ms.yml'), 1990 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ms.yml'), 1991 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ms.yml'), 1992 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.ms.yml'), 1993 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.ms.yml'), 1994 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.ms.yml'), 1995 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.ms.yml'), 1996 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.ms.yml'), 1997 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.ms.yml'), 1998 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle/Resources/translations\\messages.sr.yml'), 1999 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle/Resources/translations\\messages.sr.yml'), 2000 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle/Resources/translations\\messages.sr.yml'), 2001 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/translations\\messages.sr.yml'), 2002 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\messages.sr.yml'), 2003 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/translations\\validators.sr.yml'), 2004 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.sr.yml'), 2005 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.sr.yml'), 2006 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle/Resources/translations\\messages.sr.yml'), 2007 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle/Resources/translations\\messages.sr.yml'), 2008 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.sr.yml'), 2009 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.sr.yml'), 2010 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle/Resources/translations\\messages.sr.yml'), 2011 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle/Resources/translations\\messages.sr.yml'), 2012 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle/Resources/translations\\messages.sr.yml'), 2013 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/translations\\messages.sr.yml'), 2014 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle/Resources/translations\\messages.sr.yml'), 2015 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.sr.yml'), 2016 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr.yml'), 2017 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\messages.sr.yml'), 2018 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/translations\\messages.sr.yml'), 2019 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/translations\\messages.sr.yml'), 2020 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/translations\\messages.sr.yml'), 2021 => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.is.yml'), 2022 => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle/Resources/translations\\pagerfanta.oc.xliff'))), 1 => new \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\ThemeTranslatorResourceProvider(new \Sylius\Bundle\ThemeBundle\Translation\Finder\OrderingTranslationFilesFinder(new \Sylius\Bundle\ThemeBundle\Translation\Finder\TranslationFilesFinder(new \Sylius\Bundle\ThemeBundle\Factory\FinderFactory())), ($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()), ($this->privates['sylius.theme.hierarchy_provider'] ?? $this->privates['sylius.theme.hierarchy_provider'] = new \Sylius\Bundle\ThemeBundle\HierarchyProvider\ThemeHierarchyProvider())))), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en_US', array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false));
        $c->setFallbackLocales(array(0 => 'en_US'));

        return $this->services['translator'] = new \Sylius\Bundle\ThemeBundle\Translation\ThemeAwareTranslator($c, ($this->privates['sylius.theme.context.channel_based'] ?? $this->getSylius_Theme_Context_ChannelBasedService()));
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->load('getAnnotations_CacheService.php')), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), false);
    }

    /*
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('fos_rest.decoder.json' => function () {
            return ($this->privates['fos_rest.decoder.json'] ?? $this->privates['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder());
        }, 'fos_rest.decoder.xml' => function () {
            return ($this->privates['fos_rest.decoder.xml'] ?? $this->privates['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder());
        })), array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml')), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /*
     * Gets the private 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        $a = new \FOS\RestBundle\Negotiation\FormatNegotiator(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $a->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api', NULL, NULL, NULL, array()), array('priorities' => array(0 => 'json', 1 => 'xml'), 'fallback_format' => 'json', 'prefer_extension' => '2.0', 'methods' => NULL, 'attributes' => array(), 'stop' => false));
        $a->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, array()), array('stop' => true, 'methods' => NULL, 'attributes' => array(), 'prefer_extension' => '2.0', 'fallback_format' => 'html', 'priorities' => array()));

        return $this->privates['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($a);
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'en_US', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Processor\PsrLogMessageProcessor();

        $b = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);
        $b->pushProcessor($a);

        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($b, 400, 0, true, true, NULL);

        $instance->pushProcessor($a);

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? $this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter());
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php'));
            yield 1 => ($this->privates['security.authentication.provider.rememberme.admin'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_AdminService.php'));
            yield 2 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? $this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')));
            yield 3 => ($this->privates['security.authentication.provider.fos_oauth_server.api'] ?? $this->load('getSecurity_Authentication_Provider_FosOauthServer_ApiService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.api'] ?? $this->privates['security.authentication.provider.anonymous.api'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')));
            yield 5 => ($this->privates['security.authentication.provider.dao.shop'] ?? $this->load('getSecurity_Authentication_Provider_Dao_ShopService.php'));
            yield 6 => ($this->privates['security.authentication.provider.rememberme.shop'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_ShopService.php'));
            yield 7 => ($this->privates['security.authentication.provider.anonymous.shop'] ?? $this->privates['security.authentication.provider.anonymous.shop'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')));
        }, 8), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.admin' => function () {
            return ($this->privates['security.firewall.map.context.admin'] ?? $this->load('getSecurity_Firewall_Map_Context_AdminService.php'));
        }, 'security.firewall.map.context.api' => function () {
            return ($this->privates['security.firewall.map.context.api'] ?? $this->load('getSecurity_Firewall_Map_Context_ApiService.php'));
        }, 'security.firewall.map.context.dev' => function () {
            return ($this->privates['security.firewall.map.context.dev'] ?? $this->load('getSecurity_Firewall_Map_Context_DevService.php'));
        }, 'security.firewall.map.context.oauth_token' => function () {
            return ($this->privates['security.firewall.map.context.oauth_token'] ?? $this->load('getSecurity_Firewall_Map_Context_OauthTokenService.php'));
        }, 'security.firewall.map.context.shop' => function () {
            return ($this->privates['security.firewall.map.context.shop'] ?? $this->load('getSecurity_Firewall_Map_Context_ShopService.php'));
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.zfHj2lW'] ?? $this->privates['.security.request_matcher.zfHj2lW'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'));
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.z8XqMvS'] ?? $this->privates['.security.request_matcher.z8XqMvS'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'));
            yield 'security.firewall.map.context.oauth_token' => ($this->privates['.security.request_matcher.4mTgYIV'] ?? $this->privates['.security.request_matcher.4mTgYIV'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/oauth/v2/token'));
            yield 'security.firewall.map.context.api' => ($this->privates['.security.request_matcher.IU9Lt00'] ?? $this->privates['.security.request_matcher.IU9Lt00'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/.*'));
            yield 'security.firewall.map.context.shop' => ($this->privates['.security.request_matcher.Q0yO_1g'] ?? $this->privates['.security.request_matcher.Q0yO_1g'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(?!admin|api/.*|api$|media/.*)[^/]++'));
        }, 5));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));

        $instance->registerListener('admin', 'sylius_admin_logout', 'logout', '_csrf_token', NULL, 'admin');
        $instance->registerListener('shop', 'sylius_shop_logout', 'logout', '_csrf_token', NULL, 'shop');

        return $instance;
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('initialized_session' => function () {
            return ($this->services['session'] ?? null);
        }, 'session' => function () {
            return ($this->services['session'] ?? $this->getSessionService());
        })));
    }

    /*
     * Gets the private 'stof_doctrine_extensions.event_listener.logger' shared service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener
     */
    protected function getStofDoctrineExtensions_EventListener_LoggerService()
    {
        return $this->privates['stof_doctrine_extensions.event_listener.logger'] = new \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener(($this->privates['stof_doctrine_extensions.listener.loggable'] ?? $this->getStofDoctrineExtensions_Listener_LoggableService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'stof_doctrine_extensions.listener.loggable' shared service.
     *
     * @return \Gedmo\Loggable\LoggableListener
     */
    protected function getStofDoctrineExtensions_Listener_LoggableService()
    {
        $this->privates['stof_doctrine_extensions.listener.loggable'] = $instance = new \Gedmo\Loggable\LoggableListener();

        $instance->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        return $instance;
    }

    /*
     * Gets the private 'sylius.context.channel.composite' shared service.
     *
     * @return \Sylius\Component\Channel\Context\CompositeChannelContext
     */
    protected function getSylius_Context_Channel_CompositeService()
    {
        $this->privates['sylius.context.channel.composite'] = $instance = new \Sylius\Component\Channel\Context\CompositeChannelContext();

        $a = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
        $b = ($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService());

        $instance->addContext(new \Sylius\Component\Channel\Context\RequestBased\ChannelContext(($this->services['sylius.context.channel.request_based.resolver'] ?? $this->getSylius_Context_Channel_RequestBased_ResolverService()), $a), 0);
        $instance->addContext(new \Sylius\Component\Channel\Context\SingleChannelContext($b), -128);
        $instance->addContext(new \Sylius\Bundle\ChannelBundle\Context\FakeChannel\FakeChannelContext(($this->privates['sylius.context.channel.fake_channel.code_provider'] ?? $this->privates['sylius.context.channel.fake_channel.code_provider'] = new \Sylius\Bundle\ChannelBundle\Context\FakeChannel\FakeChannelCodeProvider()), $b, $a), 128);

        return $instance;
    }

    /*
     * Gets the private 'sylius.resolver.checkout' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Checkout\CheckoutResolver
     */
    protected function getSylius_Resolver_CheckoutService()
    {
        return $this->privates['sylius.resolver.checkout'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutResolver(($this->services['sylius.context.cart'] ?? $this->getSylius_Context_CartService()), ($this->privates['sylius.router.checkout_state'] ?? $this->getSylius_Router_CheckoutStateService()), new \Symfony\Component\HttpFoundation\RequestMatcher('/checkout/.+'), ($this->services['sm.factory'] ?? $this->getSm_FactoryService()));
    }

    /*
     * Gets the private 'sylius.resource_registry' shared service.
     *
     * @return \Sylius\Component\Resource\Metadata\Registry
     */
    protected function getSylius_ResourceRegistryService()
    {
        $this->privates['sylius.resource_registry'] = $instance = new \Sylius\Component\Resource\Metadata\Registry();

        $instance->addFromAliasAndConfiguration('sylius.order', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Order', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderType')));
        $instance->addFromAliasAndConfiguration('sylius.order_item', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\OrderItem', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemInterface', 'controller' => 'Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType')));
        $instance->addFromAliasAndConfiguration('sylius.order_item_unit', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemUnitInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory')));
        $instance->addFromAliasAndConfiguration('sylius.order_sequence', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\OrderSequence', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderSequenceInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.adjustment', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Order\\Model\\Adjustment', 'interface' => 'Sylius\\Component\\Order\\Model\\AdjustmentInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.currency', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Currency\\Model\\Currency', 'interface' => 'Sylius\\Component\\Currency\\Model\\CurrencyInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyType')));
        $instance->addFromAliasAndConfiguration('sylius.exchange_rate', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Currency\\Model\\ExchangeRate', 'interface' => 'Sylius\\Component\\Currency\\Model\\ExchangeRateInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\ExchangeRateType')));
        $instance->addFromAliasAndConfiguration('sylius.locale', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Locale\\Model\\Locale', 'interface' => 'Sylius\\Component\\Locale\\Model\\LocaleInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type\\LocaleType')));
        $instance->addFromAliasAndConfiguration('sylius.product', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Product', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ProductTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.product_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ProductTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.product_variant', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ProductVariant', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductVariantController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductVariantRepository', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.product_variant_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.product_option', array('driver' => 'doctrine/orm', 'classes' => array('repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductOptionRepository', 'model' => 'Sylius\\Component\\Product\\Model\\ProductOption', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.product_option_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.product_association_type', array('driver' => 'doctrine/orm', 'classes' => array('repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository', 'model' => 'Sylius\\Component\\Product\\Model\\ProductAssociationType', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.product_association_type_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.product_option_value', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductOptionValue', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.product_option_value_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.product_association', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAssociation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationType')));
        $instance->addFromAliasAndConfiguration('sylius.channel', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Channel', 'interface' => 'Sylius\\Component\\Channel\\Model\\ChannelInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type\\ChannelType')));
        $instance->addFromAliasAndConfiguration('sylius.product_attribute', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAttribute', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeInterface', 'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'))));
        $instance->addFromAliasAndConfiguration('sylius.product_attribute_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.product_attribute_value', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValue', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface', 'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.tax_rate', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\TaxRate', 'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxRateInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxRateType')));
        $instance->addFromAliasAndConfiguration('sylius.tax_category', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Taxation\\Model\\TaxCategory', 'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType')));
        $instance->addFromAliasAndConfiguration('sylius.shipment', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Shipment', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType')));
        $instance->addFromAliasAndConfiguration('sylius.shipment_unit', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.shipping_method', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ShippingMethod', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.shipping_method_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.shipping_category', array('driver' => 'doctrine/orm', 'classes' => array('repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository', 'model' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategory', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType')));
        $instance->addFromAliasAndConfiguration('sylius.payment', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Payment', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentRepository', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType')));
        $instance->addFromAliasAndConfiguration('sylius.payment_method', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\PaymentMethod', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentMethodController', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.payment_method_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.promotion_subject', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Order')));
        $instance->addFromAliasAndConfiguration('sylius.promotion', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Promotion', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PromotionRepository', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionType')));
        $instance->addFromAliasAndConfiguration('sylius.promotion_coupon', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\PromotionCoupon', 'repository' => 'Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface', 'controller' => 'Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponType')));
        $instance->addFromAliasAndConfiguration('sylius.promotion_rule', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Promotion\\Model\\PromotionRule', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleType')));
        $instance->addFromAliasAndConfiguration('sylius.promotion_action', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Promotion\\Model\\PromotionAction', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionActionInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType')));
        $instance->addFromAliasAndConfiguration('sylius.address', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Address', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AddressRepository', 'interface' => 'Sylius\\Component\\Addressing\\Model\\AddressInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType')));
        $instance->addFromAliasAndConfiguration('sylius.address_log_entry', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'repository' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.country', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Addressing\\Model\\Country', 'interface' => 'Sylius\\Component\\Addressing\\Model\\CountryInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType')));
        $instance->addFromAliasAndConfiguration('sylius.province', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Addressing\\Model\\Province', 'interface' => 'Sylius\\Component\\Addressing\\Model\\ProvinceInterface', 'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType')));
        $instance->addFromAliasAndConfiguration('sylius.zone', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Addressing\\Model\\Zone', 'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType')));
        $instance->addFromAliasAndConfiguration('sylius.zone_member', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Addressing\\Model\\ZoneMember', 'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType')));
        $instance->addFromAliasAndConfiguration('sylius.inventory_unit', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit', 'interface' => 'Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.taxon', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Taxon', 'repository' => 'Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository', 'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType'), 'translation' => array('classes' => array('model' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation', 'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType'))));
        $instance->addFromAliasAndConfiguration('sylius.taxon_translation', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation', 'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType')));
        $instance->addFromAliasAndConfiguration('sylius.admin_user', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\AdminUser', 'repository' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType', 'interface' => 'Sylius\\Component\\User\\Model\\UserInterface', 'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'), 'templates' => 'SyliusUserBundle:User', 'resetting' => array('token' => array('ttl' => 'P1D', 'length' => 16, 'field_name' => 'passwordResetToken'), 'pin' => array('length' => 4, 'field_name' => 'passwordResetToken')), 'verification' => array('token' => array('length' => 16, 'field_name' => 'emailVerificationToken'))));
        $instance->addFromAliasAndConfiguration('sylius.shop_user', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ShopUser', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType', 'interface' => 'Sylius\\Component\\User\\Model\\UserInterface', 'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'), 'templates' => 'SyliusUserBundle:User', 'resetting' => array('token' => array('ttl' => 'P1D', 'length' => 16, 'field_name' => 'passwordResetToken'), 'pin' => array('length' => 4, 'field_name' => 'passwordResetToken')), 'verification' => array('token' => array('length' => 16, 'field_name' => 'emailVerificationToken'))));
        $instance->addFromAliasAndConfiguration('sylius.oauth_user', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\User\\Model\\UserOAuth', 'interface' => 'Sylius\\Component\\User\\Model\\UserOAuthInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'), 'templates' => 'SyliusUserBundle:User', 'resetting' => array('token' => array('ttl' => 'P1D', 'length' => 16, 'field_name' => 'passwordResetToken'), 'pin' => array('length' => 4, 'field_name' => 'passwordResetToken')), 'verification' => array('token' => array('length' => 16, 'field_name' => 'emailVerificationToken'))));
        $instance->addFromAliasAndConfiguration('sylius.customer', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Customer', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\CustomerRepository', 'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerType')));
        $instance->addFromAliasAndConfiguration('sylius.customer_group', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Customer\\Model\\CustomerGroup', 'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerGroupInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupType')));
        $instance->addFromAliasAndConfiguration('sylius.product_review', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ProductReview', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'interface' => 'Sylius\\Component\\Review\\Model\\ReviewInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.product_reviewer', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\Customer', 'interface' => 'Sylius\\Component\\Review\\Model\\ReviewerInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.product_taxon', array('driver' => 'doctrine/orm', 'classes' => array('repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository', 'model' => 'Sylius\\Component\\Core\\Model\\ProductTaxon', 'interface' => 'Sylius\\Component\\Core\\Model\\ProductTaxonInterface', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.product_image', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ProductImage', 'interface' => 'Sylius\\Component\\Core\\Model\\ProductImageInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.taxon_image', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\TaxonImage', 'interface' => 'Sylius\\Component\\Core\\Model\\TaxonImageInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.channel_pricing', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\ChannelPricing', 'interface' => 'Sylius\\Component\\Core\\Model\\ChannelPricingInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ChannelPricingType')));
        $instance->addFromAliasAndConfiguration('sylius.payment_security_token', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.gateway_config', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfig', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\GatewayConfigType')));
        $instance->addFromAliasAndConfiguration('sylius.api_user', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Component\\Core\\Model\\AdminUser', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface')));
        $instance->addFromAliasAndConfiguration('sylius.api_client', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\Client', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ClientType')));
        $instance->addFromAliasAndConfiguration('sylius.api_access_token', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessToken', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.api_refresh_token', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshToken', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));
        $instance->addFromAliasAndConfiguration('sylius.api_auth_code', array('driver' => 'doctrine/orm', 'classes' => array('model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCode', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory')));

        return $instance;
    }

    /*
     * Gets the private 'sylius.router.checkout_state' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Checkout\CheckoutStateUrlGenerator
     */
    protected function getSylius_Router_CheckoutStateService()
    {
        return $this->privates['sylius.router.checkout_state'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutStateUrlGenerator(($this->services['router'] ?? $this->getRouterService()), array('empty_order' => array('route' => 'sylius_shop_cart_summary'), 'cart' => array('route' => 'sylius_shop_checkout_address'), 'addressed' => array('route' => 'sylius_shop_checkout_select_shipping'), 'shipping_selected' => array('route' => 'sylius_shop_checkout_select_payment'), 'shipping_skipped' => array('route' => 'sylius_shop_checkout_select_payment'), 'payment_selected' => array('route' => 'sylius_shop_checkout_complete'), 'payment_skipped' => array('route' => 'sylius_shop_checkout_complete')));
    }

    /*
     * Gets the private 'sylius.theme.context.channel_based' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Theme\ChannelBasedThemeContext
     */
    protected function getSylius_Theme_Context_ChannelBasedService()
    {
        return $this->privates['sylius.theme.context.channel_based'] = new \Sylius\Bundle\CoreBundle\Theme\ChannelBasedThemeContext(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()));
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.csv'] = $this->createProxy('CsvFileLoader_5cc7c8f', function () {
                return \CsvFileLoader_5cc7c8f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_CsvService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.dat'] = $this->createProxy('IcuDatFileLoader_a54a424', function () {
                return \IcuDatFileLoader_a54a424::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_DatService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.ini'] = $this->createProxy('IniFileLoader_d75c726', function () {
                return \IniFileLoader_d75c726::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_IniService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.json'] = $this->createProxy('JsonFileLoader_6854993', function () {
                return \JsonFileLoader_6854993::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_JsonService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.mo'] = $this->createProxy('MoFileLoader_067a4cd', function () {
                return \MoFileLoader_067a4cd::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_MoService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.php'] = $this->createProxy('PhpFileLoader_e63c58d', function () {
                return \PhpFileLoader_e63c58d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_PhpService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.po'] = $this->createProxy('PoFileLoader_8acad7f', function () {
                return \PoFileLoader_8acad7f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_PoService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.qt'] = $this->createProxy('QtFileLoader_b0bf5a8', function () {
                return \QtFileLoader_b0bf5a8::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_QtService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.res'] = $this->createProxy('IcuResFileLoader_54be3cf', function () {
                return \IcuResFileLoader_54be3cf::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_ResService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.xliff'] = $this->createProxy('XliffFileLoader_17bf9c6', function () {
                return \XliffFileLoader_17bf9c6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_XliffService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.yml'] = $this->createProxy('YamlFileLoader_53c0405', function () {
                return \YamlFileLoader_53c0405::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_YmlService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'database_driver' => false,
        'database_host' => false,
        'database_port' => false,
        'database_name' => false,
        'mailer_transport' => false,
        'mailer_host' => false,
        'mailer_user' => false,
        'mailer_password' => false,
        'secret' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'router.resource' => false,
        'twig.default_path' => false,
        'doctrine.orm.proxy_dir' => false,
        'liip_imagine.resolvers' => false,
        'liip_imagine.loaders' => false,
        'doctrine_migrations.dir_name' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = $this->targetDirs[2]; break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'MonologBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'SwiftmailerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'SyliusOrderBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\OrderBundle'),
                    'namespace' => 'Sylius\\Bundle\\OrderBundle',
                ),
                'SyliusMoneyBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\MoneyBundle'),
                    'namespace' => 'Sylius\\Bundle\\MoneyBundle',
                ),
                'SyliusCurrencyBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle'),
                    'namespace' => 'Sylius\\Bundle\\CurrencyBundle',
                ),
                'SyliusLocaleBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\LocaleBundle'),
                    'namespace' => 'Sylius\\Bundle\\LocaleBundle',
                ),
                'SyliusProductBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle'),
                    'namespace' => 'Sylius\\Bundle\\ProductBundle',
                ),
                'SyliusChannelBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle'),
                    'namespace' => 'Sylius\\Bundle\\ChannelBundle',
                ),
                'SyliusAttributeBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle'),
                    'namespace' => 'Sylius\\Bundle\\AttributeBundle',
                ),
                'SyliusTaxationBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxationBundle'),
                    'namespace' => 'Sylius\\Bundle\\TaxationBundle',
                ),
                'SyliusShippingBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle'),
                    'namespace' => 'Sylius\\Bundle\\ShippingBundle',
                ),
                'SyliusPaymentBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PaymentBundle'),
                    'namespace' => 'Sylius\\Bundle\\PaymentBundle',
                ),
                'SyliusMailerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\MailerBundle'),
                    'namespace' => 'Sylius\\Bundle\\MailerBundle',
                ),
                'SyliusPromotionBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle'),
                    'namespace' => 'Sylius\\Bundle\\PromotionBundle',
                ),
                'SyliusAddressingBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AddressingBundle'),
                    'namespace' => 'Sylius\\Bundle\\AddressingBundle',
                ),
                'SyliusInventoryBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\InventoryBundle'),
                    'namespace' => 'Sylius\\Bundle\\InventoryBundle',
                ),
                'SyliusTaxonomyBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\TaxonomyBundle'),
                    'namespace' => 'Sylius\\Bundle\\TaxonomyBundle',
                ),
                'SyliusUserBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle'),
                    'namespace' => 'Sylius\\Bundle\\UserBundle',
                ),
                'SyliusCustomerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CustomerBundle'),
                    'namespace' => 'Sylius\\Bundle\\CustomerBundle',
                ),
                'SyliusUiBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle'),
                    'namespace' => 'Sylius\\Bundle\\UiBundle',
                ),
                'SyliusReviewBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ReviewBundle'),
                    'namespace' => 'Sylius\\Bundle\\ReviewBundle',
                ),
                'SyliusCoreBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle'),
                    'namespace' => 'Sylius\\Bundle\\CoreBundle',
                ),
                'SyliusResourceBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle'),
                    'namespace' => 'Sylius\\Bundle\\ResourceBundle',
                ),
                'SyliusGridBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\GridBundle'),
                    'namespace' => 'Sylius\\Bundle\\GridBundle',
                ),
                'winzouStateMachineBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\winzou\\state-machine-bundle'),
                    'namespace' => 'winzou\\Bundle\\StateMachineBundle',
                ),
                'SonataCoreBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src'),
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'SonataIntlBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src'),
                    'namespace' => 'Sonata\\IntlBundle',
                ),
                'BazingaHateoasBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\willdurand\\hateoas-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\HateoasBundle',
                ),
                'JMSSerializerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'FOSRestBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'KnpGaufretteBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-gaufrette-bundle'),
                    'namespace' => 'Knp\\Bundle\\GaufretteBundle',
                ),
                'KnpMenuBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'LiipImagineBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\liip\\imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'PayumBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\payum\\payum-bundle'),
                    'namespace' => 'Payum\\Bundle\\PayumBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\stof\\doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'WhiteOctoberPagerfantaBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\white-october\\pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'SyliusFixturesBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\FixturesBundle'),
                    'namespace' => 'Sylius\\Bundle\\FixturesBundle',
                ),
                'SyliusPayumBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle'),
                    'namespace' => 'Sylius\\Bundle\\PayumBundle',
                ),
                'SyliusThemeBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle'),
                    'namespace' => 'Sylius\\Bundle\\ThemeBundle',
                ),
                'WebServerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'SyliusAdminBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle'),
                    'namespace' => 'Sylius\\Bundle\\AdminBundle',
                ),
                'SyliusShopBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle'),
                    'namespace' => 'Sylius\\Bundle\\ShopBundle',
                ),
                'FOSOAuthServerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle'),
                    'namespace' => 'FOS\\OAuthServerBundle',
                ),
                'SyliusAdminApiBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle'),
                    'namespace' => 'Sylius\\Bundle\\AdminApiBundle',
                ),
                'AppBundle' => array(
                    'path' => ($this->targetDirs[3].'\\src\\AppBundle'),
                    'namespace' => 'AppBundle',
                ),
            ); break;
            case 'database_driver': $value = $this->getEnv('SYLIUS_DATABASE_DRIVER'); break;
            case 'database_host': $value = $this->getEnv('SYLIUS_DATABASE_HOST'); break;
            case 'database_port': $value = $this->getEnv('SYLIUS_DATABASE_PORT'); break;
            case 'database_name': $value = $this->getEnv('SYLIUS_DATABASE_NAME'); break;
            case 'mailer_transport': $value = $this->getEnv('SYLIUS_MAILER_TRANSPORT'); break;
            case 'mailer_host': $value = $this->getEnv('SYLIUS_MAILER_HOST'); break;
            case 'mailer_user': $value = $this->getEnv('SYLIUS_MAILER_USER'); break;
            case 'mailer_password': $value = $this->getEnv('SYLIUS_MAILER_PASSWORD'); break;
            case 'secret': $value = $this->getEnv('SYLIUS_SECRET'); break;
            case 'kernel.secret': $value = $this->getEnv('SYLIUS_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing.yml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'liip_imagine.resolvers': $value = array(
                'default' => array(
                    'web_path' => array(
                        'web_root' => ($this->targetDirs[3].'/web'),
                        'cache_prefix' => 'media/cache',
                    ),
                ),
            ); break;
            case 'liip_imagine.loaders': $value = array(
                'default' => array(
                    'filesystem' => array(
                        'data_root' => array(
                            0 => ($this->targetDirs[3].'/web/media/image'),
                        ),
                        'locator' => 'filesystem',
                        'bundle_resources' => array(
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => array(

                            ),
                        ),
                    ),
                ),
            ); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/app/migrations'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'SyliusOrderBundle' => 'Sylius\\Bundle\\OrderBundle\\SyliusOrderBundle',
                'SyliusMoneyBundle' => 'Sylius\\Bundle\\MoneyBundle\\SyliusMoneyBundle',
                'SyliusCurrencyBundle' => 'Sylius\\Bundle\\CurrencyBundle\\SyliusCurrencyBundle',
                'SyliusLocaleBundle' => 'Sylius\\Bundle\\LocaleBundle\\SyliusLocaleBundle',
                'SyliusProductBundle' => 'Sylius\\Bundle\\ProductBundle\\SyliusProductBundle',
                'SyliusChannelBundle' => 'Sylius\\Bundle\\ChannelBundle\\SyliusChannelBundle',
                'SyliusAttributeBundle' => 'Sylius\\Bundle\\AttributeBundle\\SyliusAttributeBundle',
                'SyliusTaxationBundle' => 'Sylius\\Bundle\\TaxationBundle\\SyliusTaxationBundle',
                'SyliusShippingBundle' => 'Sylius\\Bundle\\ShippingBundle\\SyliusShippingBundle',
                'SyliusPaymentBundle' => 'Sylius\\Bundle\\PaymentBundle\\SyliusPaymentBundle',
                'SyliusMailerBundle' => 'Sylius\\Bundle\\MailerBundle\\SyliusMailerBundle',
                'SyliusPromotionBundle' => 'Sylius\\Bundle\\PromotionBundle\\SyliusPromotionBundle',
                'SyliusAddressingBundle' => 'Sylius\\Bundle\\AddressingBundle\\SyliusAddressingBundle',
                'SyliusInventoryBundle' => 'Sylius\\Bundle\\InventoryBundle\\SyliusInventoryBundle',
                'SyliusTaxonomyBundle' => 'Sylius\\Bundle\\TaxonomyBundle\\SyliusTaxonomyBundle',
                'SyliusUserBundle' => 'Sylius\\Bundle\\UserBundle\\SyliusUserBundle',
                'SyliusCustomerBundle' => 'Sylius\\Bundle\\CustomerBundle\\SyliusCustomerBundle',
                'SyliusUiBundle' => 'Sylius\\Bundle\\UiBundle\\SyliusUiBundle',
                'SyliusReviewBundle' => 'Sylius\\Bundle\\ReviewBundle\\SyliusReviewBundle',
                'SyliusCoreBundle' => 'Sylius\\Bundle\\CoreBundle\\SyliusCoreBundle',
                'SyliusResourceBundle' => 'Sylius\\Bundle\\ResourceBundle\\SyliusResourceBundle',
                'SyliusGridBundle' => 'Sylius\\Bundle\\GridBundle\\SyliusGridBundle',
                'winzouStateMachineBundle' => 'winzou\\Bundle\\StateMachineBundle\\winzouStateMachineBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataIntlBundle' => 'Sonata\\IntlBundle\\SonataIntlBundle',
                'BazingaHateoasBundle' => 'Bazinga\\Bundle\\HateoasBundle\\BazingaHateoasBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'PayumBundle' => 'Payum\\Bundle\\PayumBundle\\PayumBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SyliusFixturesBundle' => 'Sylius\\Bundle\\FixturesBundle\\SyliusFixturesBundle',
                'SyliusPayumBundle' => 'Sylius\\Bundle\\PayumBundle\\SyliusPayumBundle',
                'SyliusThemeBundle' => 'Sylius\\Bundle\\ThemeBundle\\SyliusThemeBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SyliusAdminBundle' => 'Sylius\\Bundle\\AdminBundle\\SyliusAdminBundle',
                'SyliusShopBundle' => 'Sylius\\Bundle\\ShopBundle\\SyliusShopBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'SyliusAdminApiBundle' => 'Sylius\\Bundle\\AdminApiBundle\\SyliusAdminApiBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'sylius.cache' => array(
                'type' => 'file_system',
            ),
            'sylius.uploader.filesystem' => 'sylius_image',
            'database_user' => 'sylius-owner',
            'database_password' => 'sylius123',
            'env(SYLIUS_DATABASE_DRIVER)' => 'pdo_mysql',
            'env(SYLIUS_DATABASE_HOST)' => '127.0.0.1',
            'env(SYLIUS_DATABASE_PORT)' => NULL,
            'env(SYLIUS_DATABASE_NAME)' => 'sylius',
            'env(SYLIUS_DATABASE_USER)' => 'sylius-owner',
            'env(SYLIUS_DATABASE_PASSWORD)' => 'sylius123',
            'env(SYLIUS_MAILER_TRANSPORT)' => 'smtp',
            'env(SYLIUS_MAILER_HOST)' => '127.0.0.1',
            'env(SYLIUS_MAILER_USER)' => NULL,
            'env(SYLIUS_MAILER_PASSWORD)' => NULL,
            'env(SYLIUS_SECRET)' => 'EDITME',
            'sylius.security.admin_regex' => '^/admin',
            'sylius.security.api_regex' => '^/api',
            'sylius.security.shop_regex' => '^/(?!admin|api/.*|api$|media/.*)[^/]++',
            'locale' => 'en_US',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en_US',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => '@LiipImagine/Form/form_div_layout.html.twig',
            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sylius.repository.order.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository',
            'sylius.repository.order_item.class' => 'Sylius\\Bundle\\OrderBundle\\Doctrine\\ORM\\OrderItemRepository',
            'sylius_order.driver.doctrine/orm' => true,
            'sylius_order.driver' => 'doctrine/orm',
            'sylius.resources' => array(
                'sylius.order' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Order',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderType',
                    ),
                ),
                'sylius.order_item' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\OrderItem',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemInterface',
                        'controller' => 'Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType',
                    ),
                ),
                'sylius.order_item_unit' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemUnitInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory',
                    ),
                ),
                'sylius.order_sequence' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\OrderSequence',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderSequenceInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.adjustment' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Order\\Model\\Adjustment',
                        'interface' => 'Sylius\\Component\\Order\\Model\\AdjustmentInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.currency' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Currency\\Model\\Currency',
                        'interface' => 'Sylius\\Component\\Currency\\Model\\CurrencyInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyType',
                    ),
                ),
                'sylius.exchange_rate' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Currency\\Model\\ExchangeRate',
                        'interface' => 'Sylius\\Component\\Currency\\Model\\ExchangeRateInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\ExchangeRateType',
                    ),
                ),
                'sylius.locale' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Locale\\Model\\Locale',
                        'interface' => 'Sylius\\Component\\Locale\\Model\\LocaleInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type\\LocaleType',
                    ),
                ),
                'sylius.product' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Product',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Core\\Model\\ProductTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType',
                        ),
                    ),
                ),
                'sylius.product_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ProductTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType',
                    ),
                ),
                'sylius.product_variant' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ProductVariant',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductVariantController',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductVariantRepository',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType',
                        ),
                    ),
                ),
                'sylius.product_variant_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType',
                    ),
                ),
                'sylius.product_option' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductOptionRepository',
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductOption',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType',
                        ),
                    ),
                ),
                'sylius.product_option_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType',
                    ),
                ),
                'sylius.product_association_type' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository',
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductAssociationType',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType',
                        ),
                    ),
                ),
                'sylius.product_association_type_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType',
                    ),
                ),
                'sylius.product_option_value' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductOptionValue',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType',
                        ),
                    ),
                ),
                'sylius.product_option_value_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType',
                    ),
                ),
                'sylius.product_association' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductAssociation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationType',
                    ),
                ),
                'sylius.channel' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Channel',
                        'interface' => 'Sylius\\Component\\Channel\\Model\\ChannelInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type\\ChannelType',
                    ),
                ),
                'sylius.product_attribute' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductAttribute',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeInterface',
                        'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                    ),
                ),
                'sylius.product_attribute_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.product_attribute_value' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValue',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface',
                        'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.tax_rate' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\TaxRate',
                        'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxRateInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxRateType',
                    ),
                ),
                'sylius.tax_category' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Taxation\\Model\\TaxCategory',
                        'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
                    ),
                ),
                'sylius.shipment' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Shipment',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
                    ),
                ),
                'sylius.shipment_unit' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.shipping_method' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ShippingMethod',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation',
                            'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType',
                        ),
                    ),
                ),
                'sylius.shipping_method_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType',
                    ),
                ),
                'sylius.shipping_category' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository',
                        'model' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategory',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
                    ),
                ),
                'sylius.payment' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Payment',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentRepository',
                        'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType',
                    ),
                ),
                'sylius.payment_method' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\PaymentMethod',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentMethodController',
                        'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation',
                            'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType',
                        ),
                    ),
                ),
                'sylius.payment_method_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation',
                        'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType',
                    ),
                ),
                'sylius.promotion_subject' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Order',
                    ),
                ),
                'sylius.promotion' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Promotion',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PromotionRepository',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionType',
                    ),
                ),
                'sylius.promotion_coupon' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\PromotionCoupon',
                        'repository' => 'Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface',
                        'controller' => 'Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponType',
                    ),
                ),
                'sylius.promotion_rule' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Promotion\\Model\\PromotionRule',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleType',
                    ),
                ),
                'sylius.promotion_action' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Promotion\\Model\\PromotionAction',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionActionInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType',
                    ),
                ),
                'sylius.address' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Address',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AddressRepository',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\AddressInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType',
                    ),
                ),
                'sylius.address_log_entry' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'repository' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.country' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Addressing\\Model\\Country',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\CountryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
                    ),
                ),
                'sylius.province' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Addressing\\Model\\Province',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\ProvinceInterface',
                        'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
                    ),
                ),
                'sylius.zone' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Addressing\\Model\\Zone',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
                    ),
                ),
                'sylius.zone_member' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Addressing\\Model\\ZoneMember',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
                    ),
                ),
                'sylius.inventory_unit' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit',
                        'interface' => 'Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.taxon' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Taxon',
                        'repository' => 'Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository',
                        'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType',
                    ),
                    'translation' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation',
                            'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType',
                        ),
                    ),
                ),
                'sylius.taxon_translation' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation',
                        'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType',
                    ),
                ),
                'sylius.admin_user' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\AdminUser',
                        'repository' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType',
                        'interface' => 'Sylius\\Component\\User\\Model\\UserInterface',
                        'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                    'templates' => 'SyliusUserBundle:User',
                    'resetting' => array(
                        'token' => array(
                            'ttl' => 'P1D',
                            'length' => 16,
                            'field_name' => 'passwordResetToken',
                        ),
                        'pin' => array(
                            'length' => 4,
                            'field_name' => 'passwordResetToken',
                        ),
                    ),
                    'verification' => array(
                        'token' => array(
                            'length' => 16,
                            'field_name' => 'emailVerificationToken',
                        ),
                    ),
                ),
                'sylius.shop_user' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ShopUser',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType',
                        'interface' => 'Sylius\\Component\\User\\Model\\UserInterface',
                        'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                    'templates' => 'SyliusUserBundle:User',
                    'resetting' => array(
                        'token' => array(
                            'ttl' => 'P1D',
                            'length' => 16,
                            'field_name' => 'passwordResetToken',
                        ),
                        'pin' => array(
                            'length' => 4,
                            'field_name' => 'passwordResetToken',
                        ),
                    ),
                    'verification' => array(
                        'token' => array(
                            'length' => 16,
                            'field_name' => 'emailVerificationToken',
                        ),
                    ),
                ),
                'sylius.oauth_user' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\User\\Model\\UserOAuth',
                        'interface' => 'Sylius\\Component\\User\\Model\\UserOAuthInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                    'templates' => 'SyliusUserBundle:User',
                    'resetting' => array(
                        'token' => array(
                            'ttl' => 'P1D',
                            'length' => 16,
                            'field_name' => 'passwordResetToken',
                        ),
                        'pin' => array(
                            'length' => 4,
                            'field_name' => 'passwordResetToken',
                        ),
                    ),
                    'verification' => array(
                        'token' => array(
                            'length' => 16,
                            'field_name' => 'emailVerificationToken',
                        ),
                    ),
                ),
                'sylius.customer' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Customer',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\CustomerRepository',
                        'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerType',
                    ),
                ),
                'sylius.customer_group' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Customer\\Model\\CustomerGroup',
                        'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerGroupInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupType',
                    ),
                ),
                'sylius.product_review' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ProductReview',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType',
                        'interface' => 'Sylius\\Component\\Review\\Model\\ReviewInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.product_reviewer' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\Customer',
                        'interface' => 'Sylius\\Component\\Review\\Model\\ReviewerInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.product_taxon' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository',
                        'model' => 'Sylius\\Component\\Core\\Model\\ProductTaxon',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ProductTaxonInterface',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.product_image' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ProductImage',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ProductImageInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.taxon_image' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\TaxonImage',
                        'interface' => 'Sylius\\Component\\Core\\Model\\TaxonImageInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.channel_pricing' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\ChannelPricing',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ChannelPricingInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ChannelPricingType',
                    ),
                ),
                'sylius.payment_security_token' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.gateway_config' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfig',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\GatewayConfigType',
                    ),
                ),
                'sylius.api_user' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Component\\Core\\Model\\AdminUser',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface',
                    ),
                ),
                'sylius.api_client' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\Client',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ClientType',
                    ),
                ),
                'sylius.api_access_token' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessToken',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.api_refresh_token' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshToken',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
                'sylius.api_auth_code' => array(
                    'driver' => 'doctrine/orm',
                    'classes' => array(
                        'model' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCode',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ),
                ),
            ),
            'sylius.model.order.class' => 'Sylius\\Component\\Core\\Model\\Order',
            'sylius.controller.order.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
            'sylius.factory.order.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.order_item.class' => 'Sylius\\Component\\Core\\Model\\OrderItem',
            'sylius.controller.order_item.class' => 'Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController',
            'sylius.factory.order_item.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.order_item_unit.class' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit',
            'sylius.controller.order_item_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.order_item_unit.class' => 'Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory',
            'sylius.model.order_sequence.class' => 'Sylius\\Component\\Core\\Model\\OrderSequence',
            'sylius.factory.order_sequence.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.adjustment.class' => 'Sylius\\Component\\Order\\Model\\Adjustment',
            'sylius.controller.adjustment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.adjustment.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.order.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.order_item.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.cart.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.cart_item.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius_order.cart_expiration_period' => '2 days',
            'sylius_order.order_expiration_period' => '5 days',
            'sylius_money.locale' => 'en_US',
            'sylius.repository.exchange_rate.class' => 'Sylius\\Bundle\\CurrencyBundle\\Doctrine\\ORM\\ExchangeRateRepository',
            'sylius_currency.driver.doctrine/orm' => true,
            'sylius_currency.driver' => 'doctrine/orm',
            'sylius.model.currency.class' => 'Sylius\\Component\\Currency\\Model\\Currency',
            'sylius.controller.currency.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.currency.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.exchange_rate.class' => 'Sylius\\Component\\Currency\\Model\\ExchangeRate',
            'sylius.controller.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.exchange_rate.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.currency.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.exchange_rate.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius_locale.driver.doctrine/orm' => true,
            'sylius_locale.driver' => 'doctrine/orm',
            'sylius.model.locale.class' => 'Sylius\\Component\\Locale\\Model\\Locale',
            'sylius.controller.locale.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.locale.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.locale.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius_locale.locale' => 'en_US',
            'sylius.repository.product.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository',
            'sylius.repository.product_variant.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductVariantRepository',
            'sylius.repository.product_attribute.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.product_option.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductOptionRepository',
            'sylius_product.driver.doctrine/orm' => true,
            'sylius_product.driver' => 'doctrine/orm',
            'sylius.model.product.class' => 'Sylius\\Component\\Core\\Model\\Product',
            'sylius.controller.product.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_translation.class' => 'Sylius\\Component\\Core\\Model\\ProductTranslation',
            'sylius.controller.product_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_variant.class' => 'Sylius\\Component\\Core\\Model\\ProductVariant',
            'sylius.controller.product_variant.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductVariantController',
            'sylius.factory.product_variant.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_variant_translation.class' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslation',
            'sylius.controller.product_variant_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_variant_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_option.class' => 'Sylius\\Component\\Product\\Model\\ProductOption',
            'sylius.controller.product_option.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_option_translation.class' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslation',
            'sylius.controller.product_option_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_association_type.class' => 'Sylius\\Component\\Product\\Model\\ProductAssociationType',
            'sylius.controller.product_association_type.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_association_type.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.repository.product_association_type.class' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository',
            'sylius.model.product_association_type_translation.class' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation',
            'sylius.controller.product_association_type_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_association_type_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_option_value.class' => 'Sylius\\Component\\Product\\Model\\ProductOptionValue',
            'sylius.controller.product_option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option_value.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_option_value_translation.class' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation',
            'sylius.controller.product_option_value_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option_value_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_association.class' => 'Sylius\\Component\\Product\\Model\\ProductAssociation',
            'sylius.controller.product_association.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_association.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.product_association.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_association_type.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_association_type_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_attribute.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_attribute_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_attribute_value.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_generate_variants.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_option.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_option_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_option_value.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_option_value_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_variant.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_variant_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_variant_generation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.repository.channel.class' => 'Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository',
            'sylius_channel.driver.doctrine/orm' => true,
            'sylius_channel.driver' => 'doctrine/orm',
            'sylius.model.channel.class' => 'Sylius\\Component\\Core\\Model\\Channel',
            'sylius.controller.channel.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.channel.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.channel.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.model.attribute.interface' => 'Sylius\\Component\\Attribute\\AttributeType\\AttributeTypeInterface',
            'sylius.attribute.subjects' => array(
                'product' => array(
                    'subject' => 'Sylius\\Component\\Core\\Model\\Product',
                    'attribute' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductAttribute',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeInterface',
                            'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        ),
                        'translation' => array(
                            'classes' => array(
                                'model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation',
                                'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface',
                                'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType',
                                'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                                'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            ),
                        ),
                    ),
                    'attribute_value' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValue',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface',
                            'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                    ),
                ),
            ),
            'sylius_attribute.driver.doctrine/orm' => true,
            'sylius_attribute.driver' => 'doctrine/orm',
            'sylius.model.product_attribute.class' => 'Sylius\\Component\\Product\\Model\\ProductAttribute',
            'sylius.controller.product_attribute.class' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController',
            'sylius.factory.product_attribute.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_attribute_translation.class' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslation',
            'sylius.controller.product_attribute_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_attribute_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_attribute_value.class' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValue',
            'sylius.controller.product_attribute_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_attribute_value.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.product_attribute_value.class' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository',
            'sylius.repository.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Doctrine\\ORM\\TaxCategoryRepository',
            'sylius_taxation.driver.doctrine/orm' => true,
            'sylius_taxation.driver' => 'doctrine/orm',
            'sylius.model.tax_rate.class' => 'Sylius\\Component\\Core\\Model\\TaxRate',
            'sylius.controller.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.tax_rate.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.tax_category.class' => 'Sylius\\Component\\Taxation\\Model\\TaxCategory',
            'sylius.controller.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.tax_category.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.tax_category.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.tax_rate.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.tax_calculation_strategy.interface' => 'Sylius\\Component\\Core\\Taxation\\Strategy\\TaxCalculationStrategyInterface',
            'sylius.tax_calculator.interface' => 'Sylius\\Component\\Taxation\\Calculator\\CalculatorInterface',
            'sylius.repository.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository',
            'sylius_shipping.driver.doctrine/orm' => true,
            'sylius_shipping.driver' => 'doctrine/orm',
            'sylius.model.shipment.class' => 'Sylius\\Component\\Core\\Model\\Shipment',
            'sylius.controller.shipment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipment.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository',
            'sylius.model.shipment_unit.class' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit',
            'sylius.controller.shipment_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipment_unit.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.shipping_method.class' => 'Sylius\\Component\\Core\\Model\\ShippingMethod',
            'sylius.controller.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipping_method.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.shipping_method_translation.class' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation',
            'sylius.controller.shipping_method_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipping_method_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.shipping_category.class' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategory',
            'sylius.controller.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipping_category.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.shipping_category.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository',
            'sylius.form.type.shipping_method.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipping_method_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipping_category.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipment.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipment_ship.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.shipping_methods_resolver.interface' => 'Sylius\\Component\\Shipping\\Resolver\\ShippingMethodsResolverInterface',
            'sylius_payment.driver.doctrine/orm' => true,
            'sylius_payment.driver' => 'doctrine/orm',
            'sylius.model.payment.class' => 'Sylius\\Component\\Core\\Model\\Payment',
            'sylius.controller.payment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.payment.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentRepository',
            'sylius.model.payment_method.class' => 'Sylius\\Component\\Core\\Model\\PaymentMethod',
            'sylius.controller.payment_method.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentMethodController',
            'sylius.factory.payment_method.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.repository.payment_method.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository',
            'sylius.model.payment_method_translation.class' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation',
            'sylius.controller.payment_method_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.payment_method_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.payment.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.payment_method.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.payment_method_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.payment_methods_resolver.interface' => 'Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface',
            'sylius.payment_gateways' => array(
                'offline' => 'sylius.payum_gateway.offline',
            ),
            'sylius.mailer.sender_name' => 'Example.com',
            'sylius.mailer.sender_address' => 'no-reply@example.com',
            'sylius.mailer.emails' => array(
                'shipment_confirmation' => array(
                    'subject' => 'sylius.emails.shipment_confirmation.subject',
                    'template' => 'SyliusAdminBundle:Email:shipmentConfirmation.html.twig',
                    'enabled' => true,
                ),
                'contact_request' => array(
                    'subject' => 'sylius.emails.contact_request.subject',
                    'template' => 'SyliusShopBundle:Email:contactRequest.html.twig',
                    'enabled' => true,
                ),
                'order_confirmation' => array(
                    'subject' => 'sylius.emails.order_confirmation.subject',
                    'template' => 'SyliusShopBundle:Email:orderConfirmation.html.twig',
                    'enabled' => true,
                ),
                'user_registration' => array(
                    'subject' => 'sylius.emails.user_registration.subject',
                    'template' => 'SyliusShopBundle:Email:userRegistration.html.twig',
                    'enabled' => true,
                ),
                'password_reset' => array(
                    'subject' => 'sylius.emails.user.password_reset.subject',
                    'template' => 'SyliusShopBundle:Email:passwordReset.html.twig',
                    'enabled' => true,
                ),
                'reset_password_token' => array(
                    'subject' => 'sylius.emails.user.password_reset.subject',
                    'template' => 'SyliusShopBundle:Email:passwordReset.html.twig',
                    'enabled' => true,
                ),
                'reset_password_pin' => array(
                    'subject' => 'sylius.emails.user.password_reset.subject',
                    'template' => 'SyliusShopBundle:Email:passwordReset.html.twig',
                    'enabled' => true,
                ),
                'verification_token' => array(
                    'subject' => 'sylius.emails.user.verification_token.subject',
                    'template' => 'SyliusShopBundle:Email:verification.html.twig',
                    'enabled' => true,
                ),
            ),
            'sylius.mailer.templates' => array(

            ),
            'sylius.form.type.promotion.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.promotion_action.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.promotion_rule.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.promotion_coupon.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.repository.promotion.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PromotionRepository',
            'sylius.repository.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository',
            'sylius_promotion.driver.doctrine/orm' => true,
            'sylius_promotion.driver' => 'doctrine/orm',
            'sylius.model.promotion_subject.class' => 'Sylius\\Component\\Core\\Model\\Order',
            'sylius.model.promotion.class' => 'Sylius\\Component\\Core\\Model\\Promotion',
            'sylius.controller.promotion.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.promotion.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.promotion_coupon.class' => 'Sylius\\Component\\Core\\Model\\PromotionCoupon',
            'sylius.controller.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController',
            'sylius.factory.promotion_coupon.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.promotion_rule.class' => 'Sylius\\Component\\Promotion\\Model\\PromotionRule',
            'sylius.controller.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.promotion_rule.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.promotion_action.class' => 'Sylius\\Component\\Promotion\\Model\\PromotionAction',
            'sylius.controller.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.promotion_action.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius_addressing.driver.doctrine/orm' => true,
            'sylius_addressing.driver' => 'doctrine/orm',
            'sylius.model.address.class' => 'Sylius\\Component\\Core\\Model\\Address',
            'sylius.controller.address.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.address.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.address.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AddressRepository',
            'sylius.model.address_log_entry.class' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry',
            'sylius.controller.address_log_entry.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.address_log_entry.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.address_log_entry.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository',
            'sylius.model.country.class' => 'Sylius\\Component\\Addressing\\Model\\Country',
            'sylius.controller.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.country.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.province.class' => 'Sylius\\Component\\Addressing\\Model\\Province',
            'sylius.controller.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
            'sylius.factory.province.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.zone.class' => 'Sylius\\Component\\Addressing\\Model\\Zone',
            'sylius.controller.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.zone.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.zone_member.class' => 'Sylius\\Component\\Addressing\\Model\\ZoneMember',
            'sylius.controller.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.zone_member.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.address.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.country.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.province.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.zone.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.zone_member.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.scope.zone' => array(
                'shipping' => 'sylius.form.zone.scopes.shipping',
                'tax' => 'sylius.form.zone.scopes.tax',
                'all' => 'sylius.form.zone.scopes.all',
            ),
            'sylius_inventory.driver.doctrine/orm' => true,
            'sylius_inventory.driver' => 'doctrine/orm',
            'sylius.model.inventory_unit.class' => 'Sylius\\Component\\Core\\Model\\OrderItemUnit',
            'sylius.controller.inventory_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.inventory_unit.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.taxon.class' => 'Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository',
            'sylius_taxonomy.driver.doctrine/orm' => true,
            'sylius_taxonomy.driver' => 'doctrine/orm',
            'sylius.model.taxon.class' => 'Sylius\\Component\\Core\\Model\\Taxon',
            'sylius.controller.taxon.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.taxon.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.taxon_translation.class' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslation',
            'sylius.controller.taxon_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.taxon_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.taxon.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.taxon_translation.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.taxon_position.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.repository.user.class' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
            'sylius.user.users' => array(
                'admin' => array(
                    'user' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Core\\Model\\AdminUser',
                            'repository' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
                            'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType',
                            'interface' => 'Sylius\\Component\\User\\Model\\UserInterface',
                            'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                        'templates' => 'SyliusUserBundle:User',
                        'resetting' => array(
                            'token' => array(
                                'ttl' => 'P1D',
                                'length' => 16,
                                'field_name' => 'passwordResetToken',
                            ),
                            'pin' => array(
                                'length' => 4,
                                'field_name' => 'passwordResetToken',
                            ),
                        ),
                        'verification' => array(
                            'token' => array(
                                'length' => 16,
                                'field_name' => 'emailVerificationToken',
                            ),
                        ),
                    ),
                ),
                'shop' => array(
                    'user' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Core\\Model\\ShopUser',
                            'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository',
                            'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType',
                            'interface' => 'Sylius\\Component\\User\\Model\\UserInterface',
                            'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                        'templates' => 'SyliusUserBundle:User',
                        'resetting' => array(
                            'token' => array(
                                'ttl' => 'P1D',
                                'length' => 16,
                                'field_name' => 'passwordResetToken',
                            ),
                            'pin' => array(
                                'length' => 4,
                                'field_name' => 'passwordResetToken',
                            ),
                        ),
                        'verification' => array(
                            'token' => array(
                                'length' => 16,
                                'field_name' => 'emailVerificationToken',
                            ),
                        ),
                    ),
                ),
                'oauth' => array(
                    'user' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\User\\Model\\UserOAuth',
                            'interface' => 'Sylius\\Component\\User\\Model\\UserOAuthInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                        'templates' => 'SyliusUserBundle:User',
                        'resetting' => array(
                            'token' => array(
                                'ttl' => 'P1D',
                                'length' => 16,
                                'field_name' => 'passwordResetToken',
                            ),
                            'pin' => array(
                                'length' => 4,
                                'field_name' => 'passwordResetToken',
                            ),
                        ),
                        'verification' => array(
                            'token' => array(
                                'length' => 16,
                                'field_name' => 'emailVerificationToken',
                            ),
                        ),
                    ),
                ),
            ),
            'sylius_user.driver.doctrine/orm' => true,
            'sylius_user.driver' => 'doctrine/orm',
            'sylius.model.admin_user.class' => 'Sylius\\Component\\Core\\Model\\AdminUser',
            'sylius.controller.admin_user.class' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
            'sylius.factory.admin_user.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.admin_user.class' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
            'sylius.model.shop_user.class' => 'Sylius\\Component\\Core\\Model\\ShopUser',
            'sylius.controller.shop_user.class' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
            'sylius.factory.shop_user.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.shop_user.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository',
            'sylius.model.oauth_user.class' => 'Sylius\\Component\\User\\Model\\UserOAuth',
            'sylius.controller.oauth_user.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.oauth_user.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.user_request_password_reset.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.user_reset_password.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.user_change_password.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius_customer.driver.doctrine/orm' => true,
            'sylius_customer.driver' => 'doctrine/orm',
            'sylius.model.customer.class' => 'Sylius\\Component\\Core\\Model\\Customer',
            'sylius.controller.customer.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.customer.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.customer.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\CustomerRepository',
            'sylius.model.customer_group.class' => 'Sylius\\Component\\Customer\\Model\\CustomerGroup',
            'sylius.controller.customer_group.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.customer_group.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.customer.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.customer_profile.validation_groups' => array(
                0 => 'sylius',
                1 => 'sylius_customer_profile',
            ),
            'sylius.form.type.customer_group.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.review.subjects' => array(
                'product' => array(
                    'subject' => 'Sylius\\Component\\Core\\Model\\Product',
                    'review' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Core\\Model\\ProductReview',
                            'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository',
                            'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType',
                            'interface' => 'Sylius\\Component\\Review\\Model\\ReviewInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                    ),
                    'reviewer' => array(
                        'classes' => array(
                            'model' => 'Sylius\\Component\\Core\\Model\\Customer',
                            'interface' => 'Sylius\\Component\\Review\\Model\\ReviewerInterface',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ),
                    ),
                ),
            ),
            'sylius_review.driver.doctrine/orm' => true,
            'sylius_review.driver' => 'doctrine/orm',
            'sylius.model.product_review.class' => 'Sylius\\Component\\Core\\Model\\ProductReview',
            'sylius.controller.product_review.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_review.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.product_review.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository',
            'sylius.model.product_reviewer.class' => 'Sylius\\Component\\Core\\Model\\Customer',
            'sylius.factory.product_reviewer.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius_core.driver.doctrine/orm' => true,
            'sylius_core.driver' => 'doctrine/orm',
            'sylius.model.product_taxon.class' => 'Sylius\\Component\\Core\\Model\\ProductTaxon',
            'sylius.controller.product_taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController',
            'sylius.factory.product_taxon.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.product_taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository',
            'sylius.model.product_image.class' => 'Sylius\\Component\\Core\\Model\\ProductImage',
            'sylius.controller.product_image.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_image.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.taxon_image.class' => 'Sylius\\Component\\Core\\Model\\TaxonImage',
            'sylius.controller.taxon_image.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.taxon_image.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.channel_pricing.class' => 'Sylius\\Component\\Core\\Model\\ChannelPricing',
            'sylius.controller.channel_pricing.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.channel_pricing.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.checkout_address.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.checkout_select_shipping.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.checkout_shipment.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.checkout_select_payment.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.checkout_payment.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.checkout_complete.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_review.validation_groups' => array(
                0 => 'sylius',
                1 => 'sylius_review',
            ),
            'sylius.form.type.admin_user.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shop_user.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shop_user_registration.validation_groups' => array(
                0 => 'sylius',
                1 => 'sylius_user_registration',
            ),
            'sylius.form.type.customer_guest.validation_groups' => array(
                0 => 'sylius_customer_guest',
            ),
            'sylius.form.type.customer_simple_registration.validation_groups' => array(
                0 => 'sylius',
                1 => 'sylius_user_registration',
            ),
            'sylius.form.type.customer_registration.validation_groups' => array(
                0 => 'sylius',
                1 => 'sylius_user_registration',
                2 => 'sylius_customer_profile',
            ),
            'sylius.form.type.add_to_cart.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.channel_pricing.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_image.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.state_machine.class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
            'sylius.resource.settings' => array(
                'paginate' => NULL,
                'limit' => NULL,
                'allowed_paginate' => array(
                    0 => 10,
                    1 => 20,
                    2 => 30,
                ),
                'default_page_size' => 10,
                'sortable' => false,
                'sorting' => NULL,
                'filterable' => false,
                'criteria' => NULL,
            ),
            'sylius.orm.repository.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.translation.translatable_listener.doctrine.orm.class' => 'Sylius\\Bundle\\ResourceBundle\\EventListener\\ORMTranslatableListener',
            'sylius.grid.templates.action' => array(
                'default' => '@SyliusUi/Grid/Action/default.html.twig',
                'create' => '@SyliusUi/Grid/Action/create.html.twig',
                'delete' => '@SyliusUi/Grid/Action/delete.html.twig',
                'show' => '@SyliusUi/Grid/Action/show.html.twig',
                'update' => '@SyliusUi/Grid/Action/update.html.twig',
                'apply_transition' => '@SyliusUi/Grid/Action/applyTransition.html.twig',
                'links' => '@SyliusUi/Grid/Action/links.html.twig',
                'archive' => '@SyliusUi/Grid/Action/archive.html.twig',
                'create_payment_method' => '@SyliusAdmin/PaymentMethod/Grid/Action/create.html.twig',
                'create_product_attribute' => '@SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig',
                'generate_variants' => '@SyliusAdmin/Product/Grid/Action/generateVariants.html.twig',
                'update_product_positions' => '@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig',
                'update_product_variant_positions' => '@SyliusAdmin/ProductVariant/Grid/Action/updatePositions.html.twig',
                'pay' => '@SyliusShop/Account/Order/Grid/Action/pay.html.twig',
            ),
            'sylius.grid.templates.bulk_action' => array(
                'delete' => '@SyliusUi/Grid/BulkAction/delete.html.twig',
            ),
            'sylius.grid.templates.filter' => array(
                'string' => '@SyliusUi/Grid/Filter/string.html.twig',
                'boolean' => '@SyliusUi/Grid/Filter/boolean.html.twig',
                'date' => '@SyliusUi/Grid/Filter/date.html.twig',
                'entity' => '@SyliusUi/Grid/Filter/entity.html.twig',
                'money' => '@SyliusUi/Grid/Filter/money.html.twig',
                'exists' => '@SyliusUi/Grid/Filter/exists.html.twig',
            ),
            'sylius.grids_definitions' => array(
                'sylius_admin_address_log_entry' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry',
                            'repository' => array(
                                'method' => 'createByObjectIdQueryBuilder',
                                'arguments' => array(
                                    'objectId' => '$id',
                                ),
                            ),
                        ),
                    ),
                    'fields' => array(
                        'action' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.action',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/logAction.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'loggedAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.logged_at',
                            'options' => array(
                                'format' => 'd-m-Y H:i:s',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'data' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.changes',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/logData.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'filters' => array(

                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_admin_user' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\AdminUser',
                        ),
                    ),
                    'sorting' => array(
                        'createdAt' => 'desc',
                    ),
                    'fields' => array(
                        'firstName' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.first_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'lastName' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.last_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'username' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.username',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'email' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.email',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'createdAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.registration_date',
                            'sortable' => NULL,
                            'options' => array(
                                'format' => 'd-m-Y H:i',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'email',
                                    1 => 'username',
                                    2 => 'firstName',
                                    3 => 'lastName',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_channel' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Channel',
                        ),
                    ),
                    'sorting' => array(
                        'nameAndDescription' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.code',
                            'path' => '.',
                            'sortable' => 'code',
                            'options' => array(
                                'template' => '@SyliusAdmin/Channel/Grid/Field/code.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'nameAndDescription' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'name',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/nameAndDescription.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'themeName' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.theme',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusAdmin/Channel/Grid/Field/themeName.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_country' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Addressing\\Model\\Country',
                        ),
                    ),
                    'sorting' => array(
                        'code' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'code',
                            'options' => array(
                                'template' => '@SyliusAdmin/Country/Grid/Field/name.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_currency' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Currency\\Model\\Currency',
                        ),
                    ),
                    'sorting' => array(
                        'code' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_customer' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Customer',
                        ),
                    ),
                    'sorting' => array(
                        'createdAt' => 'desc',
                    ),
                    'fields' => array(
                        'firstName' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.first_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'lastName' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.last_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'email' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.email',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'createdAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.registration_date',
                            'sortable' => NULL,
                            'options' => array(
                                'format' => 'd-m-Y H:i',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'path' => '.',
                            'options' => array(
                                'template' => '@SyliusAdmin/Customer/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'verified' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.verified',
                            'path' => '.',
                            'options' => array(
                                'template' => '@SyliusAdmin/Customer/Grid/Field/verified.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'email',
                                    1 => 'firstName',
                                    2 => 'lastName',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'show_orders' => array(
                                'type' => 'show',
                                'label' => 'sylius.ui.show_orders',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_admin_customer_order_index',
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'show' => array(
                                'type' => 'show',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_customer_group' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Customer\\Model\\CustomerGroup',
                        ),
                    ),
                    'sorting' => array(
                        'name' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_customer_order' => array(
                    'extends' => 'sylius_admin_order',
                    'driver' => array(
                        'options' => array(
                            'repository' => array(
                                'method' => 'createByCustomerIdQueryBuilder',
                                'arguments' => array(
                                    'customerId' => '$id',
                                ),
                            ),
                        ),
                        'name' => 'doctrine/orm',
                    ),
                    'filters' => array(
                        'customer' => array(
                            'type' => 'string',
                            'enabled' => false,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'fields' => array(

                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_exchange_rate' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Currency\\Model\\ExchangeRate',
                        ),
                    ),
                    'sorting' => array(
                        'id' => 'desc',
                    ),
                    'fields' => array(
                        'id' => array(
                            'type' => 'string',
                            'enabled' => false,
                            'sortable' => NULL,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'sourceCurrency' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.source_currency',
                            'path' => '.',
                            'options' => array(
                                'template' => '@SyliusAdmin/ExchangeRate/Grid/Field/sourceCurrencyName.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'targetCurrency' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.target_currency',
                            'path' => '.',
                            'options' => array(
                                'template' => '@SyliusAdmin/ExchangeRate/Grid/Field/targetCurrencyName.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'ratio' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.ratio',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'currency' => array(
                            'type' => 'entity',
                            'label' => 'sylius.ui.currency',
                            'options' => array(
                                'fields' => array(
                                    0 => 'sourceCurrency',
                                    1 => 'targetCurrency',
                                ),
                            ),
                            'form_options' => array(
                                'class' => 'Sylius\\Component\\Currency\\Model\\Currency',
                                'choice_label' => 'name',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_inventory' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\ProductVariant',
                            'repository' => array(
                                'method' => 'createInventoryListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                ),
                            ),
                        ),
                    ),
                    'fields' => array(
                        'name' => array(
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.name',
                            'options' => array(
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'inventory' => array(
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.inventory',
                            'options' => array(
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'item' => array(
                            'update_product' => array(
                                'type' => 'update',
                                'label' => 'sylius.ui.edit_product',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_admin_product_update',
                                        'parameters' => array(
                                            'id' => 'resource.product.id',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'update' => array(
                                'type' => 'update',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                            'productId' => 'resource.product.id',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_locale' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Locale\\Model\\Locale',
                        ),
                    ),
                    'sorting' => array(
                        'code' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'code',
                            'options' => array(
                                'template' => '@SyliusAdmin/Locale/Grid/Field/name.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_order' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Order',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'number' => 'desc',
                    ),
                    'fields' => array(
                        'channel' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.channel',
                            'sortable' => 'channel.code',
                            'options' => array(
                                'template' => '@SyliusAdmin/Order/Grid/Field/channel.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'number' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.number',
                            'path' => '.',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusAdmin/Order/Grid/Field/number.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'date' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'path' => 'checkoutCompletedAt',
                            'sortable' => 'checkoutCompletedAt',
                            'options' => array(
                                'format' => 'd-m-Y H:i:s',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'customer' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.customer',
                            'sortable' => 'customer.lastName',
                            'options' => array(
                                'template' => '@SyliusAdmin/Order/Grid/Field/customer.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'state' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.state',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => array(
                                    'labels' => '@SyliusAdmin/Order/Label/State',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'paymentState' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.payment_state',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => array(
                                    'labels' => '@SyliusAdmin/Order/Label/PaymentState',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'shippingState' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.shipping_state',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => array(
                                    'labels' => '@SyliusAdmin/Order/Label/ShippingState',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'total' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.total',
                            'path' => '.',
                            'sortable' => 'total',
                            'options' => array(
                                'template' => '@SyliusAdmin/Order/Grid/Field/total.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'currencyCode' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.currency',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'number' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.number',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'customer' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.customer',
                            'options' => array(
                                'fields' => array(
                                    0 => 'customer.email',
                                    1 => 'customer.firstName',
                                    2 => 'customer.lastName',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'date' => array(
                            'type' => 'date',
                            'label' => 'sylius.ui.date',
                            'options' => array(
                                'field' => 'checkoutCompletedAt',
                                'inclusive_to' => true,
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'channel' => array(
                            'type' => 'entity',
                            'label' => 'sylius.ui.channel',
                            'form_options' => array(
                                'class' => 'Sylius\\Component\\Core\\Model\\Channel',
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'total' => array(
                            'type' => 'money',
                            'label' => 'sylius.ui.total',
                            'options' => array(
                                'currency_field' => 'currencyCode',
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'item' => array(
                            'show' => array(
                                'type' => 'show',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_payment_method' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\PaymentMethod',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'position' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'gateway' => array(
                            'type' => 'twig',
                            'path' => 'gatewayConfig.factoryName',
                            'label' => 'sylius.ui.gateway',
                            'sortable' => 'gatewayConfig.factoryName',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/humanized.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create_payment_method',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_product' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Product',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                    1 => '$taxonId',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'code' => 'asc',
                    ),
                    'fields' => array(
                        'image' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.image',
                            'path' => '.',
                            'options' => array(
                                'template' => '@SyliusAdmin/Product/Grid/Field/image.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'mainTaxon' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.main_taxon',
                            'options' => array(
                                'template' => '@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'links',
                                'label' => 'sylius.ui.create',
                                'options' => array(
                                    'class' => 'primary',
                                    'icon' => 'plus',
                                    'header' => array(
                                        'icon' => 'cube',
                                        'label' => 'sylius.ui.type',
                                    ),
                                    'links' => array(
                                        'simple' => array(
                                            'label' => 'sylius.ui.simple_product',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_product_create_simple',
                                        ),
                                        'configurable' => array(
                                            'label' => 'sylius.ui.configurable_product',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_product_create',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'subitem' => array(
                            'variants' => array(
                                'type' => 'links',
                                'label' => 'sylius.ui.manage_variants',
                                'options' => array(
                                    'icon' => 'cubes',
                                    'links' => array(
                                        'index' => array(
                                            'label' => 'sylius.ui.list_variants',
                                            'icon' => 'list',
                                            'route' => 'sylius_admin_product_variant_index',
                                            'parameters' => array(
                                                'productId' => 'resource.id',
                                            ),
                                        ),
                                        'create' => array(
                                            'label' => 'sylius.ui.create',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_product_variant_create',
                                            'parameters' => array(
                                                'productId' => 'resource.id',
                                            ),
                                        ),
                                        'generate' => array(
                                            'label' => 'sylius.ui.generate',
                                            'icon' => 'random',
                                            'route' => 'sylius_admin_product_variant_generate',
                                            'visible' => 'resource.hasOptions',
                                            'parameters' => array(
                                                'productId' => 'resource.id',
                                            ),
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_product_association_type' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Product\\Model\\ProductAssociationType',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'code' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_product_attribute' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Product\\Model\\ProductAttribute',
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'position' => array(
                            'type' => 'string',
                            'enabled' => false,
                            'sortable' => NULL,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'type' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.type',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/rawLabel.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create_product_attribute',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_product_from_taxon' => array(
                    'extends' => 'sylius_admin_product',
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'position' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'path' => '.',
                            'sortable' => 'productTaxon.position',
                            'options' => array(
                                'template' => '@SyliusAdmin/Product/Grid/Field/position.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'update_positions' => array(
                                'type' => 'update_product_positions',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(

                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'filters' => array(

                    ),
                ),
                'sylius_admin_product_option' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Product\\Model\\ProductOption',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'position' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_product_review' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\ProductReview',
                        ),
                    ),
                    'sorting' => array(
                        'date' => 'desc',
                    ),
                    'fields' => array(
                        'date' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'path' => 'createdAt',
                            'sortable' => 'createdAt',
                            'options' => array(
                                'format' => 'd-m-Y H:i:s',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'title' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'rating' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.rating',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'status' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.status',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => array(
                                    'labels' => '@SyliusAdmin/ProductReview/Label/Status',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'reviewSubject' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.product',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'author' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.customer',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'title' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'accept' => array(
                                'type' => 'apply_transition',
                                'label' => 'sylius.ui.accept',
                                'icon' => 'checkmark',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_admin_product_review_accept',
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                        ),
                                    ),
                                    'class' => 'green',
                                    'transition' => 'accept',
                                    'graph' => 'sylius_product_review',
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'reject' => array(
                                'type' => 'apply_transition',
                                'label' => 'sylius.ui.reject',
                                'icon' => 'remove',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_admin_product_review_reject',
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                        ),
                                    ),
                                    'class' => 'yellow',
                                    'transition' => 'reject',
                                    'graph' => 'sylius_product_review',
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_product_variant' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\ProductVariant',
                            'repository' => array(
                                'method' => 'createQueryBuilderByProductId',
                                'arguments' => array(
                                    0 => 'en_US',
                                    1 => '$productId',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'name' => array(
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.name',
                            'options' => array(
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'inventory' => array(
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.inventory',
                            'options' => array(
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'position' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'path' => '.',
                            'sortable' => 'position',
                            'options' => array(
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/position.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'generate' => array(
                                'type' => 'generate_variants',
                                'options' => array(
                                    'product' => 'expr:service(\'sylius.repository.product\').find($productId)',
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'update_positions' => array(
                                'type' => 'update_product_variant_positions',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'create' => array(
                                'type' => 'create',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'productId' => '$productId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                            'productId' => '$productId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                            'productId' => '$productId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'productId' => '$productId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_promotion' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Promotion',
                        ),
                    ),
                    'sorting' => array(
                        'priority' => 'desc',
                    ),
                    'fields' => array(
                        'priority' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.priority',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/nameAndDescription.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'couponBased' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.coupons',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/yesNo.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'usage' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.usage',
                            'path' => '.',
                            'sortable' => 'used',
                            'options' => array(
                                'template' => '@SyliusAdmin/Promotion/Grid/Field/usage.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'couponBased' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.coupon_based',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'coupons' => array(
                                'type' => 'links',
                                'label' => 'sylius.ui.manage_coupons',
                                'options' => array(
                                    'visible' => 'resource.couponBased',
                                    'icon' => 'ticket',
                                    'links' => array(
                                        'index' => array(
                                            'label' => 'sylius.ui.list_coupons',
                                            'icon' => 'list',
                                            'route' => 'sylius_admin_promotion_coupon_index',
                                            'parameters' => array(
                                                'promotionId' => 'resource.id',
                                            ),
                                        ),
                                        'create' => array(
                                            'label' => 'sylius.ui.create',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_promotion_coupon_create',
                                            'parameters' => array(
                                                'promotionId' => 'resource.id',
                                            ),
                                        ),
                                        'generate' => array(
                                            'label' => 'sylius.ui.generate',
                                            'icon' => 'random',
                                            'route' => 'sylius_admin_promotion_coupon_generate',
                                            'parameters' => array(
                                                'promotionId' => 'resource.id',
                                            ),
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_promotion_coupon' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\PromotionCoupon',
                            'repository' => array(
                                'method' => 'createQueryBuilderByPromotionId',
                                'arguments' => array(
                                    'promotionId' => '$promotionId',
                                ),
                            ),
                        ),
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'usageLimit' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.usage_limit',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'perCustomerUsageLimit' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.per_customer_usage_limit',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'used' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.used',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'expiresAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.expires_at',
                            'sortable' => NULL,
                            'options' => array(
                                'format' => 'd-m-Y',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'generate' => array(
                                'type' => 'default',
                                'label' => 'sylius.ui.generate',
                                'icon' => 'random',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_admin_promotion_coupon_generate',
                                        'parameters' => array(
                                            'promotionId' => '$promotionId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'create' => array(
                                'type' => 'create',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'promotionId' => '$promotionId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                            'promotionId' => '$promotionId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'id' => 'resource.id',
                                            'promotionId' => '$promotionId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'options' => array(
                                    'link' => array(
                                        'parameters' => array(
                                            'promotionId' => '$promotionId',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_shipping_category' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategory',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                            ),
                        ),
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'createdAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.creation_date',
                            'options' => array(
                                'format' => 'd-m-Y H:i',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'updatedAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.updating_date',
                            'options' => array(
                                'format' => 'd-m-Y H:i',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_shipping_method' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\ShippingMethod',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'position' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'zone' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.zone',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'archival' => array(
                            'type' => 'exists',
                            'label' => 'sylius.ui.archival',
                            'options' => array(
                                'field' => 'archivedAt',
                            ),
                            'default_value' => false,
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'archive' => array(
                                'type' => 'archive',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_tax_category' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Taxation\\Model\\TaxCategory',
                        ),
                    ),
                    'sorting' => array(
                        'nameAndDescription' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'nameAndDescription' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'name',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/nameAndDescription.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_tax_rate' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\TaxRate',
                        ),
                    ),
                    'sorting' => array(
                        'name' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'zone' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.zone',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'category' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.category',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'amount' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.amount',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/percent.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_admin_taxon' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Taxon',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                            ),
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'fields' => array(

                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_zone' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Addressing\\Model\\Zone',
                        ),
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'type' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.type',
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/label.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'filters' => array(
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'actions' => array(
                        'main' => array(
                            'create' => array(
                                'type' => 'links',
                                'label' => 'sylius.ui.create',
                                'options' => array(
                                    'class' => 'primary',
                                    'icon' => 'plus',
                                    'header' => array(
                                        'icon' => 'cube',
                                        'label' => 'sylius.ui.type',
                                    ),
                                    'links' => array(
                                        'country' => array(
                                            'label' => 'sylius.ui.zone_consisting_of_countries',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_zone_create',
                                            'parameters' => array(
                                                'type' => 'country',
                                            ),
                                        ),
                                        'province' => array(
                                            'label' => 'sylius.ui.zone_consisting_of_provinces',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_zone_create',
                                            'parameters' => array(
                                                'type' => 'province',
                                            ),
                                        ),
                                        'zone' => array(
                                            'label' => 'sylius.ui.zone_consisting_of_other_zones',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_zone_create',
                                            'parameters' => array(
                                                'type' => 'zone',
                                            ),
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                        'item' => array(
                            'update' => array(
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                        'bulk' => array(
                            'delete' => array(
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => array(

                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                ),
                'sylius_shop_account_order' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Order',
                            'repository' => array(
                                'method' => 'createByCustomerAndChannelIdQueryBuilder',
                                'arguments' => array(
                                    0 => 'expr:service(\'sylius.context.customer\').getCustomer().getId()',
                                    1 => 'expr:service(\'sylius.context.channel\').getChannel().getId()',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'checkoutCompletedAt' => 'desc',
                    ),
                    'fields' => array(
                        'number' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.number',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusShop/Account/Order/Grid/Field/number.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'checkoutCompletedAt' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'sortable' => NULL,
                            'options' => array(
                                'format' => 'm/d/Y',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'shippingAddress' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.ship_to',
                            'options' => array(
                                'template' => '@SyliusShop/Account/Order/Grid/Field/address.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'total' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.total',
                            'path' => '.',
                            'sortable' => 'total',
                            'options' => array(
                                'template' => '@SyliusShop/Account/Order/Grid/Field/total.html.twig',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'state' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.state',
                            'sortable' => NULL,
                            'options' => array(
                                'template' => '@SyliusUi/Grid/Field/label.html.twig',
                                'vars' => array(
                                    'labels' => '@SyliusShop/Account/Order/Label/State',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'actions' => array(
                        'item' => array(
                            'show' => array(
                                'type' => 'show',
                                'label' => 'sylius.ui.show',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_shop_account_order_show',
                                        'parameters' => array(
                                            'number' => 'resource.number',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                            'pay' => array(
                                'type' => 'pay',
                                'label' => 'sylius.ui.pay',
                                'options' => array(
                                    'link' => array(
                                        'route' => 'sylius_shop_order_show',
                                        'parameters' => array(
                                            'tokenValue' => 'resource.tokenValue',
                                        ),
                                    ),
                                ),
                                'enabled' => true,
                                'position' => 100,
                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'filters' => array(

                    ),
                ),
                'sylius_shop_product' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Product',
                            'repository' => array(
                                'method' => 'createShopListQueryBuilder',
                                'arguments' => array(
                                    'channel' => 'expr:service(\'sylius.context.channel\').getChannel()',
                                    'taxon' => 'expr:notFoundOnNull(service(\'sylius.repository.taxon\').findOneBySlug($slug, service(\'sylius.context.locale\').getLocaleCode()))',
                                    'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()',
                                    'sorting' => 'expr:service(\'request_stack\').getCurrentRequest().get(\'sorting\', [])',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'limits' => array(
                        0 => 9,
                        1 => 18,
                        2 => 27,
                    ),
                    'fields' => array(
                        'createdAt' => array(
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'position' => array(
                            'type' => 'string ',
                            'sortable' => 'productTaxon.position',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string ',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'price' => array(
                            'type' => 'int',
                            'sortable' => 'channelPricing.price',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'label' => false,
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'form_options' => array(
                                'type' => 'contains',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_cart' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Order',
                            'repository' => array(
                                'method' => 'createCartQueryBuilder',
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'number' => 'desc',
                    ),
                    'fields' => array(
                        'channel' => array(
                            'type' => 'string',
                            'path' => 'channel.code',
                            'sortable' => 'channel.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'number' => array(
                            'type' => 'string',
                            'path' => '.',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'date' => array(
                            'type' => 'datetime',
                            'path' => 'checkoutCompletedAt',
                            'sortable' => 'checkoutCompletedAt',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'customer' => array(
                            'type' => 'string',
                            'sortable' => 'customer.email',
                            'path' => 'customer.email',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'total' => array(
                            'type' => 'integer',
                            'sortable' => 'total',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'currencyCode' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.currency',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'number' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'customer' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'customer.email',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'date' => array(
                            'type' => 'date',
                            'label' => 'sylius.ui.date',
                            'options' => array(
                                'field' => 'checkoutCompletedAt',
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'channel' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'channel.code',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'total' => array(
                            'type' => 'money',
                            'options' => array(
                                'currency_field' => 'currencyCode',
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_payment' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Payment',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'createdAt' => 'desc',
                    ),
                    'fields' => array(
                        'amount' => array(
                            'type' => 'integer',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'state' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'createdAt' => array(
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'updatedAt' => array(
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'state' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_product' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Product',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                                'arguments' => array(
                                    0 => 'en_US',
                                    1 => '$taxonId',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'code' => 'asc',
                    ),
                    'fields' => array(
                        'code' => array(
                            'type' => 'string',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'enabled' => array(
                            'type' => 'boolean',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_product_review' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\ProductReview',
                            'repository' => array(
                                'method' => 'createQueryBuilderByProductCode',
                                'arguments' => array(
                                    0 => 'en_US',
                                    1 => '$productCode',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'date' => 'desc',
                    ),
                    'fields' => array(
                        'date' => array(
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'path' => 'createdAt',
                            'sortable' => 'createdAt',
                            'options' => array(
                                'format' => 'd-m-Y H:i:s',
                            ),
                            'enabled' => true,
                            'position' => 100,
                        ),
                        'title' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'rating' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.rating',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'status' => array(
                            'type' => 'twig',
                            'label' => 'sylius.ui.status',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'reviewSubject' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.product',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'author' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.customer',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'title' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_product_variant' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\ProductVariant',
                            'repository' => array(
                                'method' => 'createQueryBuilderByProductCode',
                                'arguments' => array(
                                    0 => 'en_US',
                                    1 => '$productCode',
                                ),
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'position' => 'asc',
                    ),
                    'fields' => array(
                        'name' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'code' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'position' => array(
                            'type' => 'string',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'code' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_promotion' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Promotion',
                        ),
                    ),
                    'sorting' => array(
                        'priority' => 'desc',
                    ),
                    'fields' => array(
                        'priority' => array(
                            'type' => 'integer',
                            'label' => 'sylius.ui.priority',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'code' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'name' => array(
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'search' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'code',
                                    1 => 'name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'couponBased' => array(
                            'type' => 'boolean',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_shipment' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Shipment',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                            ),
                        ),
                    ),
                    'sorting' => array(
                        'createdAt' => 'desc',
                    ),
                    'fields' => array(
                        'state' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'createdAt' => array(
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                        'updatedAt' => array(
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                        ),
                    ),
                    'filters' => array(
                        'state' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'actions' => array(

                    ),
                ),
                'sylius_admin_api_taxon' => array(
                    'driver' => array(
                        'name' => 'doctrine/orm',
                        'options' => array(
                            'class' => 'Sylius\\Component\\Core\\Model\\Taxon',
                            'repository' => array(
                                'method' => 'createListQueryBuilder',
                            ),
                        ),
                    ),
                    'filters' => array(
                        'name' => array(
                            'type' => 'string',
                            'options' => array(
                                'fields' => array(
                                    0 => 'translation.name',
                                ),
                            ),
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => array(

                            ),
                        ),
                        'code' => array(
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => array(

                            ),
                            'form_options' => array(

                            ),
                        ),
                    ),
                    'sorting' => array(

                    ),
                    'limits' => array(
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ),
                    'fields' => array(

                    ),
                    'actions' => array(

                    ),
                ),
            ),
            'sm.configs' => array(
                'sylius_order_checkout' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\Order',
                    'property_path' => 'checkoutState',
                    'graph' => 'sylius_order_checkout',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'cart',
                        1 => 'addressed',
                        2 => 'shipping_selected',
                        3 => 'shipping_skipped',
                        4 => 'payment_skipped',
                        5 => 'payment_selected',
                        6 => 'completed',
                    ),
                    'transitions' => array(
                        'address' => array(
                            'from' => array(
                                0 => 'cart',
                                1 => 'addressed',
                                2 => 'shipping_selected',
                                3 => 'shipping_skipped',
                                4 => 'payment_selected',
                                5 => 'payment_skipped',
                            ),
                            'to' => 'addressed',
                        ),
                        'skip_shipping' => array(
                            'from' => array(
                                0 => 'addressed',
                            ),
                            'to' => 'shipping_skipped',
                        ),
                        'select_shipping' => array(
                            'from' => array(
                                0 => 'addressed',
                                1 => 'shipping_selected',
                                2 => 'payment_selected',
                                3 => 'payment_skipped',
                            ),
                            'to' => 'shipping_selected',
                        ),
                        'skip_payment' => array(
                            'from' => array(
                                0 => 'shipping_selected',
                                1 => 'shipping_skipped',
                            ),
                            'to' => 'payment_skipped',
                        ),
                        'select_payment' => array(
                            'from' => array(
                                0 => 'payment_selected',
                                1 => 'shipping_skipped',
                                2 => 'shipping_selected',
                            ),
                            'to' => 'payment_selected',
                        ),
                        'complete' => array(
                            'from' => array(
                                0 => 'payment_selected',
                                1 => 'payment_skipped',
                            ),
                            'to' => 'completed',
                        ),
                    ),
                    'callbacks' => array(
                        'after' => array(
                            'sylius_process_cart' => array(
                                'on' => array(
                                    0 => 'select_shipping',
                                    1 => 'address',
                                    2 => 'select_payment',
                                    3 => 'skip_shipping',
                                    4 => 'skip_payment',
                                ),
                                'do' => array(
                                    0 => '@sylius.order_processing.order_processor',
                                    1 => 'process',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_create_order' => array(
                                'on' => array(
                                    0 => 'complete',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'create\'',
                                    3 => '\'sylius_order\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_save_checkout_completion_date' => array(
                                'on' => array(
                                    0 => 'complete',
                                ),
                                'do' => array(
                                    0 => 'object',
                                    1 => 'completeCheckout',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_control_payment_state' => array(
                                'on' => array(
                                    0 => 'complete',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order_payment',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_control_shipping_state' => array(
                                'on' => array(
                                    0 => 'complete',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order_shipping',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_skip_shipping' => array(
                                'on' => array(
                                    0 => 'address',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order_checkout',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'priority' => 1,
                                'disabled' => false,
                            ),
                            'sylius_skip_payment' => array(
                                'on' => array(
                                    0 => 'select_shipping',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order_checkout',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'priority' => 1,
                                'disabled' => false,
                            ),
                        ),
                        'guard' => array(

                        ),
                        'before' => array(

                        ),
                    ),
                ),
                'sylius_order_shipping' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\Order',
                    'property_path' => 'shippingState',
                    'graph' => 'sylius_order_shipping',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'cart',
                        1 => 'ready',
                        2 => 'cancelled',
                        3 => 'partially_shipped',
                        4 => 'shipped',
                    ),
                    'transitions' => array(
                        'request_shipping' => array(
                            'from' => array(
                                0 => 'cart',
                            ),
                            'to' => 'ready',
                        ),
                        'cancel' => array(
                            'from' => array(
                                0 => 'ready',
                            ),
                            'to' => 'cancelled',
                        ),
                        'partially_ship' => array(
                            'from' => array(
                                0 => 'ready',
                            ),
                            'to' => 'partially_shipped',
                        ),
                        'ship' => array(
                            'from' => array(
                                0 => 'ready',
                                1 => 'partially_shipped',
                            ),
                            'to' => 'shipped',
                        ),
                    ),
                    'callbacks' => array(
                        'after' => array(
                            'sylius_resolve_state' => array(
                                'on' => array(
                                    0 => 'ship',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'guard' => array(

                        ),
                        'before' => array(

                        ),
                    ),
                ),
                'sylius_order_payment' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\Order',
                    'property_path' => 'paymentState',
                    'graph' => 'sylius_order_payment',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'cart',
                        1 => 'awaiting_payment',
                        2 => 'partially_paid',
                        3 => 'cancelled',
                        4 => 'paid',
                        5 => 'partially_refunded',
                        6 => 'refunded',
                    ),
                    'transitions' => array(
                        'request_payment' => array(
                            'from' => array(
                                0 => 'cart',
                            ),
                            'to' => 'awaiting_payment',
                        ),
                        'partially_pay' => array(
                            'from' => array(
                                0 => 'awaiting_payment',
                                1 => 'partially_paid',
                            ),
                            'to' => 'partially_paid',
                        ),
                        'cancel' => array(
                            'from' => array(
                                0 => 'awaiting_payment',
                            ),
                            'to' => 'cancelled',
                        ),
                        'pay' => array(
                            'from' => array(
                                0 => 'awaiting_payment',
                                1 => 'partially_paid',
                            ),
                            'to' => 'paid',
                        ),
                        'partially_refund' => array(
                            'from' => array(
                                0 => 'paid',
                                1 => 'partially_paid',
                                2 => 'partially_refunded',
                            ),
                            'to' => 'partially_refunded',
                        ),
                        'refund' => array(
                            'from' => array(
                                0 => 'paid',
                                1 => 'partially_paid',
                                2 => 'partially_refunded',
                            ),
                            'to' => 'refunded',
                        ),
                    ),
                    'callbacks' => array(
                        'after' => array(
                            'sylius_order_paid' => array(
                                'on' => array(
                                    0 => 'pay',
                                ),
                                'do' => array(
                                    0 => '@sylius.inventory.order_inventory_operator',
                                    1 => 'sell',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_resolve_state' => array(
                                'on' => array(
                                    0 => 'pay',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'guard' => array(

                        ),
                        'before' => array(

                        ),
                    ),
                ),
                'sylius_order' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\Order',
                    'property_path' => 'state',
                    'graph' => 'sylius_order',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'cart',
                        1 => 'new',
                        2 => 'cancelled',
                        3 => 'fulfilled',
                    ),
                    'transitions' => array(
                        'create' => array(
                            'from' => array(
                                0 => 'cart',
                            ),
                            'to' => 'new',
                        ),
                        'cancel' => array(
                            'from' => array(
                                0 => 'new',
                            ),
                            'to' => 'cancelled',
                        ),
                        'fulfill' => array(
                            'from' => array(
                                0 => 'new',
                            ),
                            'to' => 'fulfilled',
                        ),
                    ),
                    'callbacks' => array(
                        'before' => array(
                            'sylius_assign_number' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sylius.order_number_assigner',
                                    1 => 'assignNumber',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_assign_token' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sylius.unique_id_based_order_token_assigner',
                                    1 => 'assignTokenValueIfNotSet',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'after' => array(
                            'sylius_request_shipping' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'request_shipping\'',
                                    3 => '\'sylius_order_shipping\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_request_payment' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'request_payment\'',
                                    3 => '\'sylius_order_payment\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_create_payment' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object.getPayments()',
                                    1 => 'event',
                                    2 => '\'create\'',
                                    3 => '\'sylius_payment\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_create_shipment' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object.getShipments()',
                                    1 => 'event',
                                    2 => '\'create\'',
                                    3 => '\'sylius_shipment\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_hold_inventory' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sylius.inventory.order_inventory_operator',
                                    1 => 'hold',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_increment_promotions_usages' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sylius.promotion_usage_modifier',
                                    1 => 'increment',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_save_addresses_on_customer' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sylius.customer_order_addresses_saver',
                                    1 => 'saveAddresses',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_set_order_immutable_names' => array(
                                'on' => array(
                                    0 => 'create',
                                ),
                                'do' => array(
                                    0 => '@sylius.order_item_names_setter',
                                    1 => '__invoke',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_cancel_payment' => array(
                                'on' => array(
                                    0 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object.getPayments()',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_payment\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_cancel_shipment' => array(
                                'on' => array(
                                    0 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object.getShipments()',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_shipment\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_cancel_order_payment' => array(
                                'on' => array(
                                    0 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_order_payment\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_cancel_order_shipment' => array(
                                'on' => array(
                                    0 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ),
                                'args' => array(
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_order_shipping\'',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylis_cancel_order' => array(
                                'on' => array(
                                    0 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sylius.inventory.order_inventory_operator',
                                    1 => 'cancel',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_decrement_promotions_usages' => array(
                                'on' => array(
                                    0 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sylius.promotion_usage_modifier',
                                    1 => 'decrement',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'guard' => array(

                        ),
                    ),
                ),
                'sylius_shipment' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\Shipment',
                    'property_path' => 'state',
                    'graph' => 'sylius_shipment',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'cart',
                        1 => 'ready',
                        2 => 'shipped',
                        3 => 'cancelled',
                    ),
                    'transitions' => array(
                        'create' => array(
                            'from' => array(
                                0 => 'cart',
                            ),
                            'to' => 'ready',
                        ),
                        'ship' => array(
                            'from' => array(
                                0 => 'ready',
                            ),
                            'to' => 'shipped',
                        ),
                        'cancel' => array(
                            'from' => array(
                                0 => 'ready',
                            ),
                            'to' => 'cancelled',
                        ),
                    ),
                    'callbacks' => array(
                        'after' => array(
                            'sylius_resolve_state' => array(
                                'on' => array(
                                    0 => 'ship',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order_shipping',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object.getOrder()',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'guard' => array(

                        ),
                        'before' => array(

                        ),
                    ),
                ),
                'sylius_payment' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\Payment',
                    'property_path' => 'state',
                    'graph' => 'sylius_payment',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'cart',
                        1 => 'new',
                        2 => 'processing',
                        3 => 'completed',
                        4 => 'failed',
                        5 => 'cancelled',
                        6 => 'refunded',
                    ),
                    'transitions' => array(
                        'create' => array(
                            'from' => array(
                                0 => 'cart',
                            ),
                            'to' => 'new',
                        ),
                        'process' => array(
                            'from' => array(
                                0 => 'new',
                            ),
                            'to' => 'processing',
                        ),
                        'complete' => array(
                            'from' => array(
                                0 => 'new',
                                1 => 'processing',
                            ),
                            'to' => 'completed',
                        ),
                        'fail' => array(
                            'from' => array(
                                0 => 'new',
                                1 => 'processing',
                            ),
                            'to' => 'failed',
                        ),
                        'cancel' => array(
                            'from' => array(
                                0 => 'new',
                                1 => 'processing',
                            ),
                            'to' => 'cancelled',
                        ),
                        'refund' => array(
                            'from' => array(
                                0 => 'completed',
                            ),
                            'to' => 'refunded',
                        ),
                    ),
                    'callbacks' => array(
                        'after' => array(
                            'sylius_process_order' => array(
                                'on' => array(
                                    0 => 'fail',
                                    1 => 'cancel',
                                ),
                                'do' => array(
                                    0 => '@sylius.order_processing.order_payment_processor.after_checkout',
                                    1 => 'process',
                                ),
                                'args' => array(
                                    0 => 'object.getOrder()',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                            'sylius_resolve_state' => array(
                                'on' => array(
                                    0 => 'complete',
                                    1 => 'refund',
                                ),
                                'do' => array(
                                    0 => '@sylius.state_resolver.order_payment',
                                    1 => 'resolve',
                                ),
                                'args' => array(
                                    0 => 'object.getOrder()',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'guard' => array(

                        ),
                        'before' => array(

                        ),
                    ),
                ),
                'sylius_product_review' => array(
                    'class' => 'Sylius\\Component\\Core\\Model\\ProductReview',
                    'property_path' => 'status',
                    'graph' => 'sylius_product_review',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => array(
                        0 => 'new',
                        1 => 'accepted',
                        2 => 'rejected',
                    ),
                    'transitions' => array(
                        'accept' => array(
                            'from' => array(
                                0 => 'new',
                            ),
                            'to' => 'accepted',
                        ),
                        'reject' => array(
                            'from' => array(
                                0 => 'new',
                            ),
                            'to' => 'rejected',
                        ),
                    ),
                    'callbacks' => array(
                        'after' => array(
                            'sylius_update_rating' => array(
                                'on' => array(
                                    0 => 'accept',
                                ),
                                'do' => array(
                                    0 => '@sylius.product_review.average_rating_updater',
                                    1 => 'updateFromReview',
                                ),
                                'args' => array(
                                    0 => 'object',
                                ),
                                'disabled' => false,
                                'priority' => 0,
                            ),
                        ),
                        'guard' => array(

                        ),
                        'before' => array(

                        ),
                    ),
                ),
            ),
            'sm.factory.class' => 'SM\\Factory\\Factory',
            'sm.callback_factory.class' => 'winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallbackFactory',
            'sm.callback.class' => 'winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback',
            'sm.twig_extension.class' => 'SM\\Extension\\Twig\\SMExtension',
            'sm.callback.cascade_transition.class' => 'SM\\Callback\\CascadeTransitionCallback',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.block.service.template' => array(
                    'settings' => array(
                        'address' => NULL,
                        'addresses' => NULL,
                        'cart' => NULL,
                        'channel' => NULL,
                        'customer' => NULL,
                        'form' => NULL,
                        'order' => NULL,
                        'order_item' => NULL,
                        'orders' => NULL,
                        'product' => NULL,
                        'product_review' => NULL,
                        'product_reviews' => NULL,
                        'products' => NULL,
                        'resource' => NULL,
                        'resources' => NULL,
                        'statistics' => NULL,
                        'taxon' => NULL,
                    ),
                    'contexts' => array(

                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.block.service.template' => 'sonata.cache.noop',
                ),
            ),
            'sonata.intl.locale_detector.request.class' => 'Sonata\\IntlBundle\\Locale\\RequestDetector',
            'sonata.intl.locale_detector.session.class' => 'Sonata\\IntlBundle\\Locale\\SessionDetector',
            'sonata.intl.templating.helper.locale.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper',
            'sonata.intl.templating.helper.number.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper',
            'sonata.intl.templating.helper.datetime.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper',
            'sonata.intl.timezone_detector.chain.class' => 'Sonata\\IntlBundle\\Timezone\\ChainTimezoneDetector',
            'sonata.intl.timezone_detector.user.class' => 'Sonata\\IntlBundle\\Timezone\\UserBasedTimezoneDetector',
            'sonata.intl.timezone_detector.locale.class' => 'Sonata\\IntlBundle\\Timezone\\LocaleBasedTimezoneDetector',
            'sonata.intl.twig.helper.locale.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\LocaleExtension',
            'sonata.intl.twig.helper.number.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\NumberExtension',
            'sonata.intl.twig.helper.datetime.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\DateTimeExtension',
            'sonata_intl.timezone.detectors' => array(
                0 => 'sonata.intl.timezone_detector.locale',
            ),
            'hateoas.link_factory.class' => 'Hateoas\\Factory\\LinkFactory',
            'hateoas.links_factory.class' => 'Hateoas\\Factory\\LinksFactory',
            'hateoas.embeds_factory.class' => 'Hateoas\\Factory\\EmbeddedsFactory',
            'hateoas.expression.evaluator.class' => 'Bazinga\\Bundle\\HateoasBundle\\Hateoas\\Expression\\LazyFunctionExpressionEvaluator',
            'bazinga_hateoas.expression_language.class' => 'Bazinga\\Bundle\\HateoasBundle\\ExpressionLanguage\\ExpressionLanguage',
            'hateoas.expression.link.class' => 'Hateoas\\Expression\\LinkExpressionFunction',
            'hateoas.serializer.xml.class' => 'Hateoas\\Serializer\\XmlSerializer',
            'hateoas.serializer.json_hal.class' => 'Hateoas\\Serializer\\JsonHalSerializer',
            'hateoas.serializer.exclusion_manager.class' => 'Hateoas\\Serializer\\ExclusionManager',
            'hateoas.event_subscriber.xml.class' => 'Hateoas\\Serializer\\EventSubscriber\\XmlEventSubscriber',
            'hateoas.event_subscriber.json.class' => 'Hateoas\\Serializer\\EventSubscriber\\JsonEventSubscriber',
            'hateoas.inline_deferrer.embeds.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.inline_deferrer.links.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.configuration.provider.resolver.chain.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\ChainResolver',
            'hateoas.configuration.provider.resolver.method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\MethodResolver',
            'hateoas.configuration.provider.resolver.static_method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\StaticMethodResolver',
            'hateoas.configuration.provider.resolver.symfony_container.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\SymfonyContainerResolver',
            'hateoas.configuration.relation_provider.class' => 'Hateoas\\Configuration\\Provider\\RelationProvider',
            'hateoas.configuration.relations_repository.class' => 'Hateoas\\Configuration\\RelationsRepository',
            'hateoas.configuration.metadata.yaml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\YamlDriver',
            'hateoas.configuration.metadata.xml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\XmlDriver',
            'hateoas.configuration.metadata.annotation_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\AnnotationDriver',
            'hateoas.configuration.metadata.extension_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\ExtensionDriver',
            'hateoas.generator.registry.class' => 'Hateoas\\UrlGenerator\\UrlGeneratorRegistry',
            'hateoas.generator.symfony.class' => 'Hateoas\\UrlGenerator\\SymfonyUrlGenerator',
            'hateoas.helper.link.class' => 'Hateoas\\Helper\\LinkHelper',
            'hateoas.twig.link.class' => 'Hateoas\\Twig\\Extension\\LinkExtension',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'FOS\\RestBundle\\Serializer\\Normalizer\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'fos_rest.format_listener.rules' => NULL,
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.gd',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'sylius_small' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 120,
                                1 => 90,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_medium' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 240,
                                1 => 180,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_large' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 640,
                                1 => 480,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_admin_product_tiny_thumbnail' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 64,
                                1 => 64,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_admin_product_thumbnail' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 50,
                                1 => 50,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_shop_product_original' => array(
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => array(

                    ),
                    'post_processors' => array(

                    ),
                ),
                'sylius_shop_product_tiny_thumbnail' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 64,
                                1 => 64,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_shop_product_small_thumbnail' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 150,
                                1 => 112,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_shop_product_thumbnail' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 260,
                                1 => 260,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'sylius_shop_product_large_thumbnail' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 550,
                                1 => 412,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'payum.capture_path' => 'payum_capture_do',
            'payum.notify_path' => 'payum_notify_do',
            'payum.authorize_path' => 'payum_authorize_do',
            'payum.refund_path' => 'payum_refund_do',
            'payum.cancel_path' => 'payum_cancel_do',
            'payum.payout_path' => 'payum_payout_do',
            'payum.available_gateway_factories' => array(

            ),
            'payum.storage.doctrine.orm.class' => 'Payum\\Core\\Bridge\\Doctrine\\Storage\\DoctrineStorage',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'doctrine_migrations.namespace' => 'Sylius\\Migrations',
            'doctrine_migrations.table_name' => 'sylius_migrations',
            'doctrine_migrations.name' => 'Sylius Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'sylius_payum.driver.doctrine/orm' => true,
            'sylius_payum.driver' => 'doctrine/orm',
            'sylius.model.payment_security_token.class' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken',
            'sylius.controller.payment_security_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.payment_security_token.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.gateway_config.class' => 'Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfig',
            'sylius.controller.gateway_config.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.gateway_config.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.gateway_config.validation_groups' => array(
                0 => 'sylius',
            ),
            'payum.template.layout' => 'SyliusPayumBundle::layout.html.twig',
            'payum.template.obtain_credit_card' => 'SyliusPayumBundle:Action:obtainCreditCard.html.twig',
            'sylius.admin.notification.enabled' => true,
            'sylius.admin.notification.frequency' => 60,
            'sylius.admin.shop_enabled' => true,
            'sylius.admin.notification.uri' => 'http://gus.sylius.com/version',
            'sylius_shop.firewall_context_name' => 'shop',
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => array(

            ),
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\Client',
            'fos_oauth_server.model.access_token.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => array(
                0 => 'Authorize',
                1 => 'Default',
            ),
            'sylius_admin_api.driver.doctrine/orm' => true,
            'sylius_admin_api.driver' => 'doctrine/orm',
            'sylius.model.api_user.class' => 'Sylius\\Component\\Core\\Model\\AdminUser',
            'sylius.model.api_client.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\Client',
            'sylius.controller.api_client.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_client.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.api_access_token.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessToken',
            'sylius.controller.api_access_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_access_token.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.api_refresh_token.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshToken',
            'sylius.controller.api_refresh_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_refresh_token.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.api_auth_code.class' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCode',
            'sylius.controller.api_auth_code.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_auth_code.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.api_client.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.api_order.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.api_customer.validation_groups' => array(
                0 => 'sylius',
            ),
            'sylius.attribute.attribute_types' => array(
                'text' => 'Text',
                'textarea' => 'Textarea',
                'checkbox' => 'Checkbox',
                'integer' => 'Integer',
                'percent' => 'Percent',
                'datetime' => 'Datetime',
                'date' => 'Date',
                'select' => 'Select',
            ),
            'sylius.tax_calculators' => array(
                'default' => 'default',
            ),
            'sylius.shipping_calculators' => array(
                'flat_rate' => 'sylius.form.shipping_calculator.flat_rate_configuration.label',
                'per_unit_rate' => 'sylius.form.shipping_calculator.per_unit_rate_configuration.label',
            ),
            'sylius.shipping_method_resolvers' => array(
                'default' => 'Default',
                'zones_and_channel_based' => 'sylius.shipping_methods_resolver.zones_and_channel_based',
            ),
            'sylius.payment_method_resolvers' => array(
                'default' => 'Default',
                'channel_based' => 'sylius.payment_methods_resolver.channel_based',
            ),
            'sylius.promotion_rules' => array(
                'cart_quantity' => 'sylius.form.promotion_rule.cart_quantity',
                'customer_group' => 'sylius.form.promotion_rule.customer_group',
                'nth_order' => 'sylius.form.promotion_rule.nth_order',
                'shipping_country' => 'sylius.form.promotion_rule.shipping_country',
                'has_taxon' => 'sylius.form.promotion_rule.has_at_least_one_from_taxons',
                'total_of_items_from_taxon' => 'sylius.form.promotion_rule.total_price_of_items_from_taxon',
                'contains_product' => 'sylius.form.promotion_rule.contains_product',
                'item_total' => 'sylius.form.promotion_rule.item_total',
            ),
            'sylius.promotion_actions' => array(
                'order_fixed_discount' => 'sylius.form.promotion_action.order_fixed_discount',
                'unit_fixed_discount' => 'sylius.form.promotion_action.item_fixed_discount',
                'order_percentage_discount' => 'sylius.form.promotion_action.order_percentage_discount',
                'unit_percentage_discount' => 'sylius.form.promotion_action.item_percentage_discount',
                'shipping_percentage_discount' => 'sylius.form.promotion_action.shipping_percentage_discount',
            ),
            'sylius.tax_calculation_strategies' => array(
                'order_items_based' => 'Order items based',
                'order_item_units_based' => 'Order item units based',
            ),
            'sonata.core.form.types' => array(
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.entity',
                3 => 'sylius.form.type.order',
                4 => 'sylius.form.type.order_item',
                5 => 'sylius.form.type.cart',
                6 => 'sylius.form.type.cart_item',
                7 => 'sylius.form.type.money',
                8 => 'sylius.form.type.currency',
                9 => 'sylius.form.type.currency_choice',
                10 => 'sylius.form.type.exchange_rate',
                11 => 'sylius.form.type.locale',
                12 => 'sylius.form.type.locale_choice',
                13 => 'sylius.form.type.product_association',
                14 => 'sylius.form.type.product_association_type',
                15 => 'sylius.form.type.product_association_type_translation',
                16 => 'sylius.form.type.product_association_type_choice',
                17 => 'sylius.form.type.sylius_product_associations',
                18 => 'sylius.form.type.product_attribute',
                19 => 'sylius.form.type.product_attribute_translation',
                20 => 'sylius.form.type.product_attribute_choice',
                21 => 'sylius.form.type.product_attribute_value',
                22 => 'sylius.form.type.product',
                23 => 'sylius.form.type.product_translation',
                24 => 'sylius.form.type.product_choice',
                25 => 'sylius.form.type.product_code_choice',
                26 => 'sylius.form.type.product_generate_variants',
                27 => 'sylius.form.type.product_option',
                28 => 'sylius.form.type.product_option_translation',
                29 => 'sylius.form.type.product_option_choice',
                30 => 'sylius.form.type.product_option_value',
                31 => 'sylius.form.type.product_option_value_translation',
                32 => 'sylius.form.type.product_variant',
                33 => 'sylius.form.type.product_variant_translation',
                34 => 'sylius.form.type.product_variant_generation',
                35 => 'sylius.form.type.channel',
                36 => 'sylius.form.type.channel_choice',
                37 => 'sylius.form.type.attribute_type.select',
                38 => 'sylius.form.type.attribute_type.select.choices_collection',
                39 => 'sylius.attribute_type.select.value.translations',
                40 => 'sylius.form.type.attribute_type_choice',
                41 => 'sylius.form.type.tax_category',
                42 => 'sylius.form.type.tax_category_choice',
                43 => 'sylius.form.type.tax_rate',
                44 => 'sylius.form.type.tax_calculator_choice',
                45 => 'sylius.form.type.shipping_method',
                46 => 'sylius.form.type.shipping_method_translation',
                47 => 'sylius.form.type.shipping_method_choice',
                48 => 'sylius.form.type.shipping_category',
                49 => 'sylius.form.type.shipping_category_choice',
                50 => 'sylius.form.type.shipment',
                51 => 'sylius.form.type.shipment_ship',
                52 => 'sylius.form.type.shipping_calculator_choice',
                53 => 'sylius.form.type.payment',
                54 => 'sylius.form.type.payment_method',
                55 => 'sylius.form.type.payment_method_translation',
                56 => 'sylius.form.type.payment_method_choice',
                57 => 'sylius.form.type.payment_gateway_choice',
                58 => 'sylius.form.type.promotion',
                59 => 'sylius.form.type.promotion_action',
                60 => 'sylius.form.type.promotion_rule',
                61 => 'sylius.form.type.promotion_coupon',
                62 => 'sylius.form.type.promotion_action.collection',
                63 => 'sylius.form.type.promotion_rule.collection',
                64 => 'sylius.form.type.promotion_action_choice',
                65 => 'sylius.form.type.promotion_rule_choice',
                66 => 'sylius.form.type.promotion_coupon_to_code',
                67 => 'sylius.form.type.promotion_coupon_generator_instruction',
                68 => 'sylius.form.type.address',
                69 => 'sylius.form.type.country',
                70 => 'sylius.form.type.country_choice',
                71 => 'sylius.form.type.country_code_choice',
                72 => 'sylius.form.type.province',
                73 => 'sylius.form.type.province_choice',
                74 => 'sylius.form.type.province_code_choice',
                75 => 'sylius.form.type.zone',
                76 => 'sylius.form.type.zone_choice',
                77 => 'sylius.form.type.zone_code_choice',
                78 => 'sylius.form.type.zone_member',
                79 => 'sylius.form.type.taxon',
                80 => 'sylius.form.type.taxon_translation',
                81 => 'sylius.form.type.taxon_position',
                82 => 'sylius.form.type.user_login',
                83 => 'sylius.form.type.user_request_password_reset',
                84 => 'sylius.form.type.user_reset_password',
                85 => 'sylius.form.type.user_change_password',
                86 => 'sylius.form.type.customer',
                87 => 'sylius.form.type.customer_profile',
                88 => 'sylius.form.type.customer_choice',
                89 => 'sylius.form.type.customer_group',
                90 => 'sylius.form.type.customer_group_choice',
                91 => 'sylius.form.type.customer_group_code_choice',
                92 => 'sylius.form.type.security_login',
                93 => 'sylius.form.type.checkout_address',
                94 => 'sylius.form.type.checkout_select_shipping',
                95 => 'sylius.form.type.checkout_shipment',
                96 => 'sylius.form.type.checkout_select_payment',
                97 => 'sylius.form.type.checkout_payment',
                98 => 'sylius.form.type.checkout_complete',
                99 => 'sylius.form.type.product_review',
                100 => 'sylius.form.type.admin_user',
                101 => 'sylius.form.type.shop_user',
                102 => 'sylius.form.type.shop_user_registration',
                103 => 'sylius.form.type.product_image',
                104 => 'sylius.form.type.taxon_image',
                105 => 'sylius.form.type.tax_calculation_strategy_choice',
                106 => 'sylius.form.type.promotion_rule.customer_group_configuration',
                107 => 'sylius.form.type.promotion_rule.has_taxon_configuration',
                108 => 'sylius.form.type.promotion_rule.total_of_items_from_taxon_configuration',
                109 => 'sylius.form.type.promotion_rule.contains_product_configuration',
                110 => 'sylius.form.type.promotion_action.filter.taxon',
                111 => 'sylius.form.type.promotion_action.filter.product',
                112 => 'sylius.form.type.customer_guest',
                113 => 'sylius.form.type.customer_simple_registration',
                114 => 'sylius.form.type.customer_registration',
                115 => 'sylius.form.type.address_choice',
                116 => 'sylius.form.type.add_to_cart',
                117 => 'sylius.form.type.channel_pricing',
                118 => 'sylius.form.type.channels_collection',
                119 => 'sylius.form.type.channel_based_shipping_calculator.flat_rate',
                120 => 'sylius.form.type.channel_based_shipping_calculator.per_unit_rate',
                121 => 'sylius.form.type.autocomplete_product_taxon_choice',
                122 => 'sylius.form.type.resource_autocomplete_choice',
                123 => 'sylius.form.type.default',
                124 => 'sylius.form.type.resource_translations',
                125 => 'sylius.form.type.grid_filter.string',
                126 => 'sylius.form.type.grid_filter.boolean',
                127 => 'sylius.form.type.grid_filter.date',
                128 => 'sylius.form.type.grid_filter.entity',
                129 => 'sylius.form.type.grid_filter.money',
                130 => 'sylius.form.type.grid_filter.exists',
                131 => 'sonata.core.form.type.array',
                132 => 'sonata.core.form.type.boolean',
                133 => 'sonata.core.form.type.collection',
                134 => 'sonata.core.form.type.translatable_choice',
                135 => 'sonata.core.form.type.date_range',
                136 => 'sonata.core.form.type.datetime_range',
                137 => 'sonata.core.form.type.date_picker',
                138 => 'sonata.core.form.type.datetime_picker',
                139 => 'sonata.core.form.type.date_range_picker',
                140 => 'sonata.core.form.type.datetime_range_picker',
                141 => 'sonata.core.form.type.equal',
                142 => 'sonata.core.form.type.color_selector',
                143 => 'sonata.core.form.type.color',
                144 => 'sonata.block.form.type.block',
                145 => 'sonata.block.form.type.container_template',
                146 => 'liip_imagine.form.type.image',
                147 => 'payum.form.type.credit_card_expiration_date',
                148 => 'payum.form.type.credit_card',
                149 => 'payum.form.type.gateway_config',
                150 => 'payum.form.type.gateway_factories_choice',
                151 => 'sylius.form.type.gateway_config',
                152 => 'sylius.form.type.gateway_configuration.paypal',
                153 => 'sylius.form.type.gateway_configuration.stripe',
                154 => 'sylius.theme.form.type.theme_choice',
                155 => 'sylius.theme.form.type.theme_name_choice',
                156 => 'fos_oauth_server.authorize.form.type',
                157 => 'sylius.form.type.api_client',
                158 => 'sylius.form.type.api_order',
                159 => 'sylius.form.type.api_order_promotion_coupon',
                160 => 'sylius.form.type.api_customer',
                161 => 'sylius.form.type.api_product',
                162 => 'sylius.form.type.api_product_variant',
                163 => 'sylius.form.type.api_checkout_address',
                164 => 'sylius.form.extension.type.api_order_item',
                165 => 'sylius.form.type.api_order_item',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'form.type_extension.form.http_foundation',
                1 => 'form.type_extension.form.validator',
                2 => 'form.type_extension.repeated.validator',
                3 => 'form.type_extension.submit.validator',
                4 => 'form.type_extension.upload.validator',
                5 => 'form.type_extension.csrf',
                6 => 'sylius.form.extension.type.country',
                7 => 'sylius.form.extension.type.channel',
                8 => 'sylius.form.extension.type.locale',
                9 => 'sylius.form.extension.type.order',
                10 => 'sylius.form.extension.type.cart',
                11 => 'sylius.form.extension.type.cart_item',
                12 => 'sylius.form.extension.type.payment_method',
                13 => 'sylius.form.extension.type.tax_rate',
                14 => 'sylius.form.extension.type.taxon',
                15 => 'sylius.form.extension.type.customer',
                16 => 'sylius.form.extension.type.promotion',
                17 => 'sylius.form.extension.type.promotion_coupon',
                18 => 'sylius.form.extension.type.promotion_filter_collection',
                19 => 'sylius.form.extension.type.shipping_method',
                20 => 'sylius.form.extension.type.product',
                21 => 'sylius.form.extension.type.product_translation',
                22 => 'sylius.form.extension.type.product_variant',
                23 => 'sylius.form.extension.type.product_variant_generation',
                24 => 'sylius.form.extension.type.collection',
                25 => 'payum.form.extension.gateway_factories_choice',
                26 => 'sylius.form.extension.type.gateway_config.crypted',
            ),
            'sylius.gateway_factories' => array(
                'offline' => 'sylius.payum_gateway_factory.offline',
                'paypal_express_checkout' => 'sylius.payum_gateway_factory.paypal_express_checkout',
                'stripe_checkout' => 'sylius.payum_gateway_factory.stripe_checkout',
            ),
            'console.command.ids' => array(
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand',
                5 => 'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand',
                6 => 'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand',
                7 => 'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand',
                8 => 'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand',
                9 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand',
                10 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand',
                11 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand',
                12 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand',
                13 => 'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand',
                14 => 'sylius.console.command.resource_debug',
                15 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
                16 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
                17 => 'console.command.public_alias.Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
                18 => 'console.command.public_alias.doctrine_migrations.diff_command',
                19 => 'console.command.public_alias.doctrine_migrations.execute_command',
                20 => 'console.command.public_alias.doctrine_migrations.generate_command',
                21 => 'console.command.public_alias.doctrine_migrations.latest_command',
                22 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                23 => 'console.command.public_alias.doctrine_migrations.status_command',
                24 => 'console.command.public_alias.doctrine_migrations.version_command',
                25 => 'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesListCommand',
                26 => 'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesLoadCommand',
                27 => 'Sylius\\Bundle\\ThemeBundle\\Command\\AssetsInstallCommand',
                28 => 'Sylius\\Bundle\\ThemeBundle\\Command\\ListCommand',
                29 => 'console.command.public_alias.fos_oauth_server.clean_command',
                30 => 'console.command.public_alias.fos_oauth_server.create_client_command',
                31 => 'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand',
            ),
        );
    }
}
