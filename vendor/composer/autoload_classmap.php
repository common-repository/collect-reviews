<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'CollectReviews\\Admin\\Admin' => $baseDir . '/src/Admin/Admin.php',
    'CollectReviews\\Admin\\Pages\\ReviewRequests' => $baseDir . '/src/Admin/Pages/ReviewRequests.php',
    'CollectReviews\\Admin\\Pages\\Settings' => $baseDir . '/src/Admin/Pages/Settings.php',
    'CollectReviews\\Admin\\Scripts' => $baseDir . '/src/Admin/Scripts.php',
    'CollectReviews\\Ajax\\AjaxManager' => $baseDir . '/src/Ajax/AjaxManager.php',
    'CollectReviews\\Ajax\\Ajaxable' => $baseDir . '/src/Ajax/Ajaxable.php',
    'CollectReviews\\Container' => $baseDir . '/src/Container.php',
    'CollectReviews\\Core' => $baseDir . '/src/Core.php',
    'CollectReviews\\DataStore\\ObjectDataStoreInterface' => $baseDir . '/src/DataStore/ObjectDataStoreInterface.php',
    'CollectReviews\\DataStore\\ObjectMetaDataStoreInterface' => $baseDir . '/src/DataStore/ObjectMetaDataStoreInterface.php',
    'CollectReviews\\DatabaseMigrations\\AbstractTableMigration' => $baseDir . '/src/DatabaseMigrations/AbstractTableMigration.php',
    'CollectReviews\\DatabaseMigrations\\DatabaseMigrations' => $baseDir . '/src/DatabaseMigrations/DatabaseMigrations.php',
    'CollectReviews\\Emails\\EmailInterface' => $baseDir . '/src/Emails/EmailInterface.php',
    'CollectReviews\\Emails\\Mailer' => $baseDir . '/src/Emails/Mailer.php',
    'CollectReviews\\Emails\\SmartTags\\Processor' => $baseDir . '/src/Emails/SmartTags/Processor.php',
    'CollectReviews\\Emails\\SmartTags\\SiteName' => $baseDir . '/src/Emails/SmartTags/SiteName.php',
    'CollectReviews\\Emails\\SmartTags\\SiteUrl' => $baseDir . '/src/Emails/SmartTags/SiteUrl.php',
    'CollectReviews\\Emails\\SmartTags\\SmartTagInterface' => $baseDir . '/src/Emails/SmartTags/SmartTagInterface.php',
    'CollectReviews\\Emails\\TemplateInterface' => $baseDir . '/src/Emails/TemplateInterface.php',
    'CollectReviews\\Helpers\\Collection' => $baseDir . '/src/Helpers/Collection.php',
    'CollectReviews\\Helpers\\CollectionAccess' => $baseDir . '/src/Helpers/CollectionAccess.php',
    'CollectReviews\\Helpers\\Date' => $baseDir . '/src/Helpers/Date.php',
    'CollectReviews\\Helpers\\Uploads' => $baseDir . '/src/Helpers/Uploads.php',
    'CollectReviews\\Integrations\\AbstractHandler' => $baseDir . '/src/Integrations/AbstractHandler.php',
    'CollectReviews\\Integrations\\AbstractIntegration' => $baseDir . '/src/Integrations/AbstractIntegration.php',
    'CollectReviews\\Integrations\\AbstractTrigger' => $baseDir . '/src/Integrations/AbstractTrigger.php',
    'CollectReviews\\Integrations\\EasyDigitalDownloads\\Handler' => $baseDir . '/src/Integrations/EasyDigitalDownloads/Handler.php',
    'CollectReviews\\Integrations\\EasyDigitalDownloads\\Integration' => $baseDir . '/src/Integrations/EasyDigitalDownloads/Integration.php',
    'CollectReviews\\Integrations\\EasyDigitalDownloads\\Trigger' => $baseDir . '/src/Integrations/EasyDigitalDownloads/Trigger.php',
    'CollectReviews\\Integrations\\EcommerceIntegrationInterface' => $baseDir . '/src/Integrations/EcommerceIntegrationInterface.php',
    'CollectReviews\\Integrations\\FormsIntegrationInterface' => $baseDir . '/src/Integrations/FormsIntegrationInterface.php',
    'CollectReviews\\Integrations\\Integrations' => $baseDir . '/src/Integrations/Integrations.php',
    'CollectReviews\\Integrations\\WPForms\\Handler' => $baseDir . '/src/Integrations/WPForms/Handler.php',
    'CollectReviews\\Integrations\\WPForms\\Integration' => $baseDir . '/src/Integrations/WPForms/Integration.php',
    'CollectReviews\\Integrations\\WPForms\\Trigger' => $baseDir . '/src/Integrations/WPForms/Trigger.php',
    'CollectReviews\\Integrations\\WooCommerce\\Handler' => $baseDir . '/src/Integrations/WooCommerce/Handler.php',
    'CollectReviews\\Integrations\\WooCommerce\\Integration' => $baseDir . '/src/Integrations/WooCommerce/Integration.php',
    'CollectReviews\\Integrations\\WooCommerce\\Trigger' => $baseDir . '/src/Integrations/WooCommerce/Trigger.php',
    'CollectReviews\\Options' => $baseDir . '/src/Options.php',
    'CollectReviews\\Platforms\\Platform' => $baseDir . '/src/Platforms/Platform.php',
    'CollectReviews\\Platforms\\Platforms' => $baseDir . '/src/Platforms/Platforms.php',
    'CollectReviews\\Request' => $baseDir . '/src/Request.php',
    'CollectReviews\\ReviewReplies\\ReviewReplyPage' => $baseDir . '/src/ReviewReplies/ReviewReplyPage.php',
    'CollectReviews\\ReviewRequests\\Email\\Logo' => $baseDir . '/src/ReviewRequests/Email/Logo.php',
    'CollectReviews\\ReviewRequests\\Email\\Preview' => $baseDir . '/src/ReviewRequests/Email/Preview.php',
    'CollectReviews\\ReviewRequests\\Email\\SmartTags\\Action' => $baseDir . '/src/ReviewRequests/Email/SmartTags/Action.php',
    'CollectReviews\\ReviewRequests\\Email\\SmartTags\\CustomerFirstName' => $baseDir . '/src/ReviewRequests/Email/SmartTags/CustomerFirstName.php',
    'CollectReviews\\ReviewRequests\\Email\\SmartTags\\CustomerLastName' => $baseDir . '/src/ReviewRequests/Email/SmartTags/CustomerLastName.php',
    'CollectReviews\\ReviewRequests\\Email\\SmartTags\\RatingStars' => $baseDir . '/src/ReviewRequests/Email/SmartTags/RatingStars.php',
    'CollectReviews\\ReviewRequests\\Email\\Template' => $baseDir . '/src/ReviewRequests/Email/Template.php',
    'CollectReviews\\ReviewRequests\\Migrations\\ReviewRequestsLimitLogsTable' => $baseDir . '/src/ReviewRequests/Migrations/ReviewRequestsLimitLogsTable.php',
    'CollectReviews\\ReviewRequests\\Migrations\\ReviewRequestsMetaTable' => $baseDir . '/src/ReviewRequests/Migrations/ReviewRequestsMetaTable.php',
    'CollectReviews\\ReviewRequests\\Migrations\\ReviewRequestsTable' => $baseDir . '/src/ReviewRequests/Migrations/ReviewRequestsTable.php',
    'CollectReviews\\ReviewRequests\\Queue' => $baseDir . '/src/ReviewRequests/Queue.php',
    'CollectReviews\\ReviewRequests\\ReviewRequest' => $baseDir . '/src/ReviewRequests/ReviewRequest.php',
    'CollectReviews\\ReviewRequests\\ReviewRequestEmail' => $baseDir . '/src/ReviewRequests/ReviewRequestEmail.php',
    'CollectReviews\\ReviewRequests\\ReviewRequestsDataStore' => $baseDir . '/src/ReviewRequests/ReviewRequestsDataStore.php',
    'CollectReviews\\ReviewRequests\\ReviewRequestsDataStoreInterface' => $baseDir . '/src/ReviewRequests/ReviewRequestsDataStoreInterface.php',
    'CollectReviews\\ReviewRequests\\ReviewRequestsLimiter' => $baseDir . '/src/ReviewRequests/ReviewRequestsLimiter.php',
    'CollectReviews\\ReviewRequests\\ReviewRequestsQuery' => $baseDir . '/src/ReviewRequests/ReviewRequestsQuery.php',
    'CollectReviews\\ServiceProviders\\AbstractServiceProvider' => $baseDir . '/src/ServiceProviders/AbstractServiceProvider.php',
    'CollectReviews\\ServiceProviders\\IntegrationsServiceProvider' => $baseDir . '/src/ServiceProviders/IntegrationsServiceProvider.php',
    'CollectReviews\\ServiceProviders\\MainServiceProvider' => $baseDir . '/src/ServiceProviders/MainServiceProvider.php',
    'CollectReviews\\ServiceProviders\\ServiceProviderInterface' => $baseDir . '/src/ServiceProviders/ServiceProviderInterface.php',
    'CollectReviews\\TemplateLoader' => $baseDir . '/src/TemplateLoader.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\ArgumentInterface' => $baseDir . '/libs/packages/League/Container/Argument/ArgumentInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\ArgumentResolverInterface' => $baseDir . '/libs/packages/League/Container/Argument/ArgumentResolverInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\ArgumentResolverTrait' => $baseDir . '/libs/packages/League/Container/Argument/ArgumentResolverTrait.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\DefaultValueArgument' => $baseDir . '/libs/packages/League/Container/Argument/DefaultValueArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\DefaultValueInterface' => $baseDir . '/libs/packages/League/Container/Argument/DefaultValueInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\LiteralArgument' => $baseDir . '/libs/packages/League/Container/Argument/LiteralArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\LiteralArgumentInterface' => $baseDir . '/libs/packages/League/Container/Argument/LiteralArgumentInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\ArrayArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/ArrayArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\BooleanArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/BooleanArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\CallableArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/CallableArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\FloatArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/FloatArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\IntegerArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/IntegerArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\ObjectArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/ObjectArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\Literal\\StringArgument' => $baseDir . '/libs/packages/League/Container/Argument/Literal/StringArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\ResolvableArgument' => $baseDir . '/libs/packages/League/Container/Argument/ResolvableArgument.php',
    'CollectReviews\\Vendor\\League\\Container\\Argument\\ResolvableArgumentInterface' => $baseDir . '/libs/packages/League/Container/Argument/ResolvableArgumentInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Container' => $baseDir . '/libs/packages/League/Container/Container.php',
    'CollectReviews\\Vendor\\League\\Container\\ContainerAwareInterface' => $baseDir . '/libs/packages/League/Container/ContainerAwareInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\ContainerAwareTrait' => $baseDir . '/libs/packages/League/Container/ContainerAwareTrait.php',
    'CollectReviews\\Vendor\\League\\Container\\DefinitionContainerInterface' => $baseDir . '/libs/packages/League/Container/DefinitionContainerInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Definition\\Definition' => $baseDir . '/libs/packages/League/Container/Definition/Definition.php',
    'CollectReviews\\Vendor\\League\\Container\\Definition\\DefinitionAggregate' => $baseDir . '/libs/packages/League/Container/Definition/DefinitionAggregate.php',
    'CollectReviews\\Vendor\\League\\Container\\Definition\\DefinitionAggregateInterface' => $baseDir . '/libs/packages/League/Container/Definition/DefinitionAggregateInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Definition\\DefinitionInterface' => $baseDir . '/libs/packages/League/Container/Definition/DefinitionInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Exception\\ContainerException' => $baseDir . '/libs/packages/League/Container/Exception/ContainerException.php',
    'CollectReviews\\Vendor\\League\\Container\\Exception\\NotFoundException' => $baseDir . '/libs/packages/League/Container/Exception/NotFoundException.php',
    'CollectReviews\\Vendor\\League\\Container\\Inflector\\Inflector' => $baseDir . '/libs/packages/League/Container/Inflector/Inflector.php',
    'CollectReviews\\Vendor\\League\\Container\\Inflector\\InflectorAggregate' => $baseDir . '/libs/packages/League/Container/Inflector/InflectorAggregate.php',
    'CollectReviews\\Vendor\\League\\Container\\Inflector\\InflectorAggregateInterface' => $baseDir . '/libs/packages/League/Container/Inflector/InflectorAggregateInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\Inflector\\InflectorInterface' => $baseDir . '/libs/packages/League/Container/Inflector/InflectorInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\ReflectionContainer' => $baseDir . '/libs/packages/League/Container/ReflectionContainer.php',
    'CollectReviews\\Vendor\\League\\Container\\ServiceProvider\\AbstractServiceProvider' => $baseDir . '/libs/packages/League/Container/ServiceProvider/AbstractServiceProvider.php',
    'CollectReviews\\Vendor\\League\\Container\\ServiceProvider\\BootableServiceProviderInterface' => $baseDir . '/libs/packages/League/Container/ServiceProvider/BootableServiceProviderInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\ServiceProvider\\ServiceProviderAggregate' => $baseDir . '/libs/packages/League/Container/ServiceProvider/ServiceProviderAggregate.php',
    'CollectReviews\\Vendor\\League\\Container\\ServiceProvider\\ServiceProviderAggregateInterface' => $baseDir . '/libs/packages/League/Container/ServiceProvider/ServiceProviderAggregateInterface.php',
    'CollectReviews\\Vendor\\League\\Container\\ServiceProvider\\ServiceProviderInterface' => $baseDir . '/libs/packages/League/Container/ServiceProvider/ServiceProviderInterface.php',
    'CollectReviews\\Vendor\\Psr\\Container\\ContainerExceptionInterface' => $baseDir . '/libs/packages/Psr/Container/ContainerExceptionInterface.php',
    'CollectReviews\\Vendor\\Psr\\Container\\ContainerInterface' => $baseDir . '/libs/packages/Psr/Container/ContainerInterface.php',
    'CollectReviews\\Vendor\\Psr\\Container\\NotFoundExceptionInterface' => $baseDir . '/libs/packages/Psr/Container/NotFoundExceptionInterface.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
);
