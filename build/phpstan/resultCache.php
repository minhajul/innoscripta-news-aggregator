<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1731705359,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.0.1',
  'phpVersion' => 80313,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/larastan/larastan/bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: true, checkUnusedViews: false, checkModelAppends: true, paths: [/Users/minhajul/Code/personal/innoscripta-news-aggregator/app], level: 5, tmpDir: /Users/minhajul/Code/personal/innoscripta-news-aggregator/build/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EnumerableGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EnumerableGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}]}',
  'analysedPaths' => 
  array (
    0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/minhajul/Code/personal/innoscripta-news-aggregator/composer.lock' => '4232880735b98e5810cb9b0ec811c48286a2b596',
  ),
  'composerInstalled' => 
  array (
    '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.12.1',
          'version' => '0.12.1.0',
          'reference' => 'f510c0a40911935b77b86859eb5223d58d660df1',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '5817d0659c5b50c9b950feb9af7b9668e2c436bc',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => 'ebaaf5be6c0286928352e054f2d5125608e5405e',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'erusev/parsedown' => 
        array (
          'pretty_version' => '1.7.4',
          'version' => '1.7.4.0',
          'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../erusev/parsedown',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.0',
          'version' => '1.24.0.0',
          'reference' => 'a136842a532bac9ecd8a1c723852b09915d7db50',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.16.0',
          'version' => '2.16.0.0',
          'reference' => 'befcdc0e5dce67252aa6322d82424be928214fa2',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.9.2',
          'version' => '7.9.2.0',
          'reference' => 'd281ed313b989f213357e3be1a179f02196ac99b',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'f9c436286ab2892c7db7be8c8da4ef61ccf7b455',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.7.0',
          'version' => '2.7.0.0',
          'reference' => 'a70f5c95fb43bc83f07c9c948baa0dc1829bf201',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'ecea8feef63bd4fef1f037ecb288386999ecc11c',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.31.0',
          ),
        ),
        'knuckleswtf/scribe' => 
        array (
          'pretty_version' => '4.38.0',
          'version' => '4.38.0.0',
          'reference' => 'da667aafb6804b4b599ac6506bb178bfa5434802',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../knuckleswtf/scribe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => '88f46e3f2cd9d2a14dba13ef293b822a75832e62',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v11.31.0',
          'version' => '11.31.0.0',
          'reference' => '365090ed2c68244e3141cdb5e247cdf3dfba2c40',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.1',
          'version' => '1.2.1.0',
          'reference' => '353ac12134b98e2e7c3333d916bd3e523931e583',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.18.1',
          'version' => '1.18.1.0',
          'reference' => '35c00c05ec43e6b46d295efc0f4386ceb30d50d9',
          'type' => 'project',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.2',
          'version' => '0.3.2.0',
          'reference' => '0e0535747c6b8d6d10adca8b68293cf4517abb0f',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => 'd17abae06661dd6c46d13627b1683a2924259145',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.0.3',
          'version' => '4.0.3.0',
          'reference' => '54aea9d13743ae8a6cdd3c28dbef128a17adecab',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.6',
          'version' => '1.3.6.0',
          'reference' => 'f865a58ea3a0107c336b7045104c75243fa59d96',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'ba4d51eb56de7711b3a37d63aa0643e99a339ae5',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.5.3',
          'version' => '2.5.3.0',
          'reference' => 'b650144166dfa7703e62a22e493b853b58d874b0',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.29.1',
          'version' => '3.29.1.0',
          'reference' => 'edc1bb7c86fab0776c3287dbd19b5fa278347319',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.29.0',
          'version' => '3.29.0.0',
          'reference' => 'e0e8d52ce4b2ed154148453d321e97c8e931bd27',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.8.0',
          'version' => '3.8.0.0',
          'reference' => '32e515fdc02cdafbe4593e30a9350d486b125b67',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mpociot/laravel-apidoc-generator' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'mpociot/reflection-docblock' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => 'c8b2e2b1f5cebbb06e2b5ccbf2958f2198867587',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../mpociot/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.12.1',
          'version' => '1.12.1.0',
          'reference' => '123267b2c49fbf30d78a7b2d333f6be754b94845',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.8.2',
          'version' => '3.8.2.0',
          'reference' => 'e1268cdbc486d97ce23fef2c666dc3c6b6de9947',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.5',
          'version' => '4.0.5.0',
          'reference' => '736c567e257dbe0fcf6ce81b4d6dbe05c6899f96',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.3.1',
          'version' => '5.3.1.0',
          'reference' => '8eea230464783aa9671db8eea6f8c6ac5285794b',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.5.0',
          'version' => '8.5.0.0',
          'reference' => 'f5c101b929c958e849a633283adff296ed5f38f5',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.2.0',
          'version' => '2.2.0.0',
          'reference' => '42c84e4e8090766bbd6445d06cd6e57650626ea3',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.10.1',
          'version' => '5.10.1.0',
          'reference' => 'b14fd66496a22d8dd7f7e2791edd9e8674422f17',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.3',
          'version' => '1.9.3.0',
          'reference' => 'e3fac8b24f56113f7cb96af14958c0dd16330f54',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'ab4e9b4415a5fc9e4d27f7fe16c8bc9d067dcd6d',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.7',
          'version' => '11.0.7.0',
          'reference' => 'f7f08030e8811582cc459871d28d6f5a1a4d35ca',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.4.3',
          'version' => '11.4.3.0',
          'reference' => 'e8e8ed1854de5d36c088ec1833beae40d2dedd76',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.4',
          'version' => '0.12.4.0',
          'reference' => '2fd717afa05341b4f8152547f142cd2f130f6818',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.6',
          'version' => '4.7.6.0',
          'reference' => '91039bc1faa45ba123c4328958e620d382ec7088',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.6',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '6bb7d09d6623567178cf54126afa9c2310114268',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.2.1',
          'version' => '6.2.1.0',
          'reference' => '43d129d6a0f81c78bee378b46688293eb7ea3739',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.0',
          'version' => '7.2.0.0',
          'reference' => '855f3ae0ab316bbafe1ba4e16e9f3c078d24a0c5',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.1.3',
          'version' => '6.1.3.0',
          'reference' => 'c414673eee9a8f9d51bbf8d61fc9e3ef1e85b20e',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '694d156164372abbd149a4b85ccda2e4670c0e16',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '461b9c5da241511a2a0e8f240814fb23ce5c0aac',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'shalvah/clara' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => 'cdbb5737cbdd101756d97dd2279a979a1af7710b',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../shalvah/clara',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'shalvah/upgrader' => 
        array (
          'pretty_version' => '0.6.0',
          'version' => '0.6.0.0',
          'reference' => 'd95ed17fe9f5e1ee7d47ad835595f1af080a867f',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../shalvah/upgrader',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/data-transfer-object' => 
        array (
          'pretty_version' => '3.9.1',
          'version' => '3.9.1.0',
          'reference' => '1df0906c4e9e3aebd6c0506fd82c8b7d5548c1c8',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../spatie/data-transfer-object',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '97bebc53548684c17ed696bc8af016880f0f098d',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.1.7',
          'version' => '7.1.7.0',
          'reference' => '3284aafcac338b6e86fd955ee4d794cbe434151a',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '4aa4f6b3d6749c14d3aa815eef8226632e7bbc66',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => '0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.1.7',
          'version' => '7.1.7.0',
          'reference' => '010e44661f4c6babaf8c4862fe68c24a53903342',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '87254c78dd50721cfd015b62277a8281c5589702',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => '8f93aec25d41b72493c6ddff14e916177c9efc50',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '2cb89664897be33f78c65d3d2845954c8d7a43b8',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.1.7',
          'version' => '7.1.7.0',
          'reference' => '5183b61657807099d98f3367bcccb850238b17a9',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.1.7',
          'version' => '7.1.7.0',
          'reference' => '7f137cda31fd41e422edcdc01915f2c095b84399',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '69c9948451fb3a6a4d47dc8261d1794734e76cdd',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => 'caa1e521edb2650b8470918dfe51708c237f0598',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'c36586dcf89a12315939e00ec9b4474adcb1d773',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.1.7',
          'version' => '7.1.7.0',
          'reference' => '9b8a40b7289767aa7117e957573c2a535efe6585',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '66a2c469f6c22d08603235c46a20007c0701ea0a',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'bd1d9e59a81d8fa4acdcea3f617c581f7475a80f',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '61b72d66bf96c360a727ae6232df5ac83c71f626',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => 'b9f72ab14efdb6b772f85041fa12f820dee8d55f',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'b9d2189887bb6b2e0367a9fc7136c5239ab9b05a',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '65befb3bb2d503bbffbd08c815aa38b472999917',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.1.7',
          'version' => '7.1.7.0',
          'reference' => 'f6ea51f669760cacd7464bf7eaa0be87b8072db1',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-exporter' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '90173ef89c40e7c8c616653241048705f84130ef',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/var-exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.1.6',
          'version' => '7.1.6.0',
          'reference' => '3ced3f29e4f0d6bce2170ff26719f1fe9aacc671',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.2.7',
          'version' => '2.2.7.0',
          'reference' => '83ee6f38df0a63106a9e4536e3060458b74ccedb',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.1',
          'version' => '5.6.1.0',
          'reference' => 'a59a13791077fe3d44f90e7133eb68e7d22eaff2',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/minhajul/Code/personal/innoscripta-news-aggregator/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'iconv',
    25 => 'igbinary',
    26 => 'imagick',
    27 => 'imap',
    28 => 'intl',
    29 => 'json',
    30 => 'ldap',
    31 => 'libxml',
    32 => 'mbstring',
    33 => 'mongodb',
    34 => 'mysqli',
    35 => 'mysqlnd',
    36 => 'openssl',
    37 => 'pcntl',
    38 => 'pcre',
    39 => 'pdo_mysql',
    40 => 'pdo_pgsql',
    41 => 'pdo_sqlite',
    42 => 'pgsql',
    43 => 'posix',
    44 => 'random',
    45 => 'readline',
    46 => 'redis',
    47 => 'session',
    48 => 'shmop',
    49 => 'soap',
    50 => 'sockets',
    51 => 'sodium',
    52 => 'sqlite3',
    53 => 'standard',
    54 => 'sysvmsg',
    55 => 'sysvsem',
    56 => 'sysvshm',
    57 => 'tokenizer',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlwriter',
    61 => 'xsl',
    62 => 'zip',
    63 => 'zlib',
    64 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchBBCArticles.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Console\\Command',
        1 => '__construct',
        2 => 30,
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchBBCArticles.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchNYTArticles.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Console\\Command',
        1 => '__construct',
        2 => 30,
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchNYTArticles.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByCategory.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Filters\\Articles\\ByCategory',
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByCategory.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByDate.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Filters\\Articles\\ByDate',
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByDate.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByKeywords.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Filters\\Articles\\ByKeywords',
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByKeywords.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/BySource.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Filters\\Articles\\BySource',
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/BySource.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Http\\Requests\\LoginRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\LoginRequest',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/LoginRequest.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Http\\Requests\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\LoginRequest',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/LoginRequest.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/PreferenceRequest.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Http\\Requests\\PreferenceRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\PreferenceRequest',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/PreferenceRequest.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Http\\Requests\\PreferenceRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\PreferenceRequest',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/PreferenceRequest.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/RegistrationRequest.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Http\\Requests\\RegistrationRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\RegistrationRequest',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/RegistrationRequest.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/ArticleResource.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Http\\Resources\\ArticleResource',
        1 => 'toArray',
        2 => 'App\\Http\\Resources\\ArticleResource',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/ArticleResource.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Article.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Article.php',
       'collectorType' => 'PHPStan\\Rules\\Traits\\TraitUseCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Preference.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Preference.php',
       'collectorType' => 'PHPStan\\Rules\\Traits\\TraitUseCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Laravel\\Sanctum\\HasApiTokens',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/User.php',
       'collectorType' => 'PHPStan\\Rules\\Traits\\TraitUseCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/User.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'macro',
        2 => 38,
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Providers/AppServiceProvider.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/BBCArticles.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'updateOrCreate',
        2 => 32,
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/BBCArticles.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewYorkTimes.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'updateOrCreate',
        2 => 37,
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewYorkTimes.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/TheGuardian.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'updateOrCreate',
        2 => 37,
      ),
       'filePath' => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/TheGuardian.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
); },
	'dependencies' => array (
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchBBCArticles.php' => 
  array (
    'fileHash' => '01067886232b191529516c0ac0e8216a574373f3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchGuardianArticles.php' => 
  array (
    'fileHash' => '2d74fe88b9b23f26bedb9aba482f1398283f2994',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchNYTArticles.php' => 
  array (
    'fileHash' => 'c0f09511de5ae5f69ee7a197b95c2c275ecac0bc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByCategory.php' => 
  array (
    'fileHash' => '3c61c2302c89b6cec9623f7172a99f8cad8811cd',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByDate.php' => 
  array (
    'fileHash' => '906c0062d8f779ad35c8b3dc0bdc62575fe04138',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByKeywords.php' => 
  array (
    'fileHash' => 'a6119d4f6469ca733950027e0ff31402a2ab118c',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/BySource.php' => 
  array (
    'fileHash' => 'bed06f0ce0f968f4fdda7be8eaffe5bf29e18812',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php' => 
  array (
    'fileHash' => '9af813da9cba21364b7a5dee89a53d2df0756aea',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/LoginController.php' => 
  array (
    'fileHash' => 'e2db0e6fb89e0cf03056f5dbe65d80bb2f50c18a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/PasswordResetController.php' => 
  array (
    'fileHash' => '41f1fa4936ebf18104834bc84c1c286ca720119a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/RegistrationController.php' => 
  array (
    'fileHash' => '0e86ff208d71199d8113c423412641bb1726941b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php' => 
  array (
    'fileHash' => 'cff81d821443bdecb58e94ec7bb9b743d6f7437a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php' => 
  array (
    'fileHash' => '6d4e1bddaefae7c5011d5c863754e99b61de7955',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/LoginController.php',
      2 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/PasswordResetController.php',
      3 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/RegistrationController.php',
      4 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php',
      5 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/LoginRequest.php' => 
  array (
    'fileHash' => '6e80f953b25548d2cab370b2f1d83066f3ce3959',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/LoginController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/PreferenceRequest.php' => 
  array (
    'fileHash' => '08ea74c46b6b0522b5ec42a53ee78b995cfee497',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/RegistrationRequest.php' => 
  array (
    'fileHash' => '5025cc37f08d4dc04e7c8374128384f2178f408a',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/RegistrationController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/ArticleResource.php' => 
  array (
    'fileHash' => 'd6d6eed58682faa99b7d87e72621b10033923bd6',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/PreferenceResource.php' => 
  array (
    'fileHash' => 'bf5bd67c46ecdee65c9a9e2238da3eb39758cb5f',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/UserResource.php' => 
  array (
    'fileHash' => '5c0fa620a375cafe3ea3188ef1b9415f902a9eb3',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/LoginController.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/RegistrationController.php',
      2 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php',
      3 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/PreferenceResource.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Article.php' => 
  array (
    'fileHash' => '2b1c4835585c2352fcc2ff0ec5e5f89a4344c45c',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php',
      2 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/ArticleResource.php',
      3 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/BBCArticles.php',
      4 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewYorkTimes.php',
      5 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/TheGuardian.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Preference.php' => 
  array (
    'fileHash' => 'c5a7edc9f4a818b720b94a3c03835ce17af194e2',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php',
      2 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/PreferenceResource.php',
      3 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/User.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/User.php' => 
  array (
    'fileHash' => '00d131320a18d0867690bc9cfd95248afebbd495',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/LoginController.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/PasswordResetController.php',
      2 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/RegistrationController.php',
      3 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php',
      4 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php',
      5 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/PreferenceResource.php',
      6 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/UserResource.php',
      7 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Preference.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '07a656af3c860f6c5bfb7f07158b93b5b8d48c3a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/BBCArticles.php' => 
  array (
    'fileHash' => '24d94c9fce0a4a552471f673de15ae20e0213075',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchBBCArticles.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewYorkTimes.php' => 
  array (
    'fileHash' => '7a71fd1a655af8b04e6022dffc61b343a9a053e5',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchNYTArticles.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewsAggregatorServiceInterface.php' => 
  array (
    'fileHash' => '566bcb37f29cbae7c0faa9d0135aec0594589bf7',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchBBCArticles.php',
      1 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchGuardianArticles.php',
      2 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchNYTArticles.php',
      3 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/BBCArticles.php',
      4 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewYorkTimes.php',
      5 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/TheGuardian.php',
    ),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/TheGuardian.php' => 
  array (
    'fileHash' => '988a1a90cc9a05b4f4527fd6126f1b641d187c6f',
    'dependentFiles' => 
    array (
      0 => '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchGuardianArticles.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchBBCArticles.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FetchBBCArticles',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'bbcarticles' => 'App\\Services\\BBCArticles',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'bbcarticles' => 'App\\Services\\BBCArticles',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new command instance.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'bbcarticles' => 'App\\Services\\BBCArticles',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     * @throws Exception
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'bbcarticles' => 'App\\Services\\BBCArticles',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchGuardianArticles.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FetchGuardianArticles',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'theguardian' => 'App\\Services\\TheGuardian',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'theguardian' => 'App\\Services\\TheGuardian',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     * @throws Exception
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'theguardian' => 'App\\Services\\TheGuardian',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Console/Commands/FetchNYTArticles.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FetchNYTArticles',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'newyorktimes' => 'App\\Services\\NewYorkTimes',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'newyorktimes' => 'App\\Services\\NewYorkTimes',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new command instance.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'newyorktimes' => 'App\\Services\\NewYorkTimes',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     * @throws Exception
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'newyorktimes' => 'App\\Services\\NewYorkTimes',
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByCategory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\Articles\\ByCategory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'builder',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByDate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\Articles\\ByDate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'builder',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/ByKeywords.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\Articles\\ByKeywords',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'builder',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Filters/Articles/BySource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\Articles\\BySource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'builder',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/ArticlesController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\ArticlesController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @group Article
 *
 * APIs for getting articles
 */',
         'namespace' => 'App\\Http\\Controllers\\Api',
         'uses' => 
        array (
          'bycategory' => 'App\\Filters\\Articles\\ByCategory',
          'bydate' => 'App\\Filters\\Articles\\ByDate',
          'bykeywords' => 'App\\Filters\\Articles\\ByKeywords',
          'bysource' => 'App\\Filters\\Articles\\BySource',
          'controller' => 'App\\Http\\Controllers\\Controller',
          'articleresource' => 'App\\Http\\Resources\\ArticleResource',
          'article' => 'App\\Models\\Article',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'pipeline' => 'Illuminate\\Support\\Facades\\Pipeline',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get Articles
     *
     * @param Request $request
     *
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'bycategory' => 'App\\Filters\\Articles\\ByCategory',
              'bydate' => 'App\\Filters\\Articles\\ByDate',
              'bykeywords' => 'App\\Filters\\Articles\\ByKeywords',
              'bysource' => 'App\\Filters\\Articles\\BySource',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'articleresource' => 'App\\Http\\Resources\\ArticleResource',
              'article' => 'App\\Models\\Article',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'pipeline' => 'Illuminate\\Support\\Facades\\Pipeline',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get Single Article
     *
     * @urlParam article_slug string required The slug of the article. Example: demo-title
     *
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'bycategory' => 'App\\Filters\\Articles\\ByCategory',
              'bydate' => 'App\\Filters\\Articles\\ByDate',
              'bykeywords' => 'App\\Filters\\Articles\\ByKeywords',
              'bysource' => 'App\\Filters\\Articles\\BySource',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'articleresource' => 'App\\Http\\Resources\\ArticleResource',
              'article' => 'App\\Models\\Article',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'pipeline' => 'Illuminate\\Support\\Facades\\Pipeline',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'article',
               'type' => 'App\\Models\\Article',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/LoginController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\Auth\\LoginController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @group Authentication
 *
 * APIs for managing authentication
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'loginrequest' => 'App\\Http\\Requests\\LoginRequest',
          'userresource' => 'App\\Http\\Resources\\UserResource',
          'user' => 'App\\Models\\User',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Login
     *
     * @param LoginRequest $request
     * @return JsonResponse
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     *
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\LoginRequest',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Logout
     *
     * @param Request $request
     * @authenticated
     *
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\LoginRequest',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/PasswordResetController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\Auth\\PasswordResetController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @group Authentication
 *
 * APIs for managing authentication
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'password' => 'Illuminate\\Support\\Facades\\Password',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendResetLink',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send Password Reset Link
     *
     * @param Request $request
     * @bodyParam email string required Insert email Example: test@example.com
     *
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'password' => 'Illuminate\\Support\\Facades\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resetPassword',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Reset Password
     *
     * @param Request $request
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     * @bodyParam password_confirmation string required Insert password confirmation Example: password
     *
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'password' => 'Illuminate\\Support\\Facades\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/Auth/RegistrationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\Auth\\RegistrationController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @group Authentication
 *
 * APIs for managing authentication
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'registrationrequest' => 'App\\Http\\Requests\\RegistrationRequest',
          'userresource' => 'App\\Http\\Resources\\UserResource',
          'user' => 'App\\Models\\User',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Registration
     *
     * @param RegistrationRequest $request
     *
     * @bodyParam name string required Insert name Example: John Doe
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     * @bodyParam password_confirmation string required Insert password confirmation Example: password
     *
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'registrationrequest' => 'App\\Http\\Requests\\RegistrationRequest',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\RegistrationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/PreferenceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\PreferenceController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @group Preference
 *
 * APIs for managing preferences
 */',
         'namespace' => 'App\\Http\\Controllers\\Api',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'preferencerequest' => 'App\\Http\\Requests\\PreferenceRequest',
          'preferenceresource' => 'App\\Http\\Resources\\PreferenceResource',
          'preference' => 'App\\Models\\Preference',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get Preferences
     *
     * @param Request $request
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'preferencerequest' => 'App\\Http\\Requests\\PreferenceRequest',
              'preferenceresource' => 'App\\Http\\Resources\\PreferenceResource',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create Preference
     *
     * @param PreferenceRequest $request
     * @bodyParam source string required Insert source Example: BBC
     * @bodyParam category string required Insert category Example: tech
     * @bodyParam author string required Insert author Example: Mr. X
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'preferencerequest' => 'App\\Http\\Requests\\PreferenceRequest',
              'preferenceresource' => 'App\\Http\\Resources\\PreferenceResource',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\PreferenceRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get Single Preference
     *
     * @param Preference $preference
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'preferencerequest' => 'App\\Http\\Requests\\PreferenceRequest',
              'preferenceresource' => 'App\\Http\\Resources\\PreferenceResource',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'preference',
               'type' => 'App\\Models\\Preference',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update Preference
     *
     * @param PreferenceRequest $request
     * @param Preference $preference
     *
     * @bodyParam source string required Insert source Example: BBC
     * @bodyParam category string required Insert category Example: tech
     * @bodyParam author string required Insert author Example: Mr. X
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'preferencerequest' => 'App\\Http\\Requests\\PreferenceRequest',
              'preferenceresource' => 'App\\Http\\Resources\\PreferenceResource',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\PreferenceRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'preference',
               'type' => 'App\\Models\\Preference',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy Preference
     *
     * @param Preference $preference
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'preferencerequest' => 'App\\Http\\Requests\\PreferenceRequest',
              'preferenceresource' => 'App\\Http\\Resources\\PreferenceResource',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'preference',
               'type' => 'App\\Models\\Preference',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Api/UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\UserController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @group User
 *
 * APIs for managing user
 */',
         'namespace' => 'App\\Http\\Controllers\\Api',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'articleresource' => 'App\\Http\\Resources\\ArticleResource',
          'userresource' => 'App\\Http\\Resources\\UserResource',
          'article' => 'App\\Models\\Article',
          'preference' => 'App\\Models\\Preference',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * User Profile
     *
     * @param Request $request
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'articleresource' => 'App\\Http\\Resources\\ArticleResource',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'article' => 'App\\Models\\Article',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getArticlesByPreferences',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Preferred Articles for User
     *
     * @param Request $request
     *
     * @authenticated
     * @return JsonResponse
     */',
             'namespace' => 'App\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'articleresource' => 'App\\Http\\Resources\\ArticleResource',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'article' => 'App\\Models\\Article',
              'preference' => 'App\\Models\\Preference',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failedValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validator',
               'type' => 'Illuminate\\Contracts\\Validation\\Validator',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/PreferenceRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\PreferenceRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
              'response' => 'Illuminate\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failedValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validator',
               'type' => 'Illuminate\\Contracts\\Validation\\Validator',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Requests/RegistrationRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\RegistrationRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
              'response' => 'Illuminate\\Http\\Response',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
              'response' => 'Illuminate\\Http\\Response',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failedValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validator',
               'type' => 'Illuminate\\Contracts\\Validation\\Validator',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/ArticleResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\ArticleResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @mixin Article
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'article' => 'App\\Models\\Article',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/PreferenceResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\PreferenceResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @mixin Preference
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'preference' => 'App\\Models\\Preference',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Http/Resources/UserResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\UserResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @mixin User
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Article.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Article',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/Preference.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Preference',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeOfUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Laravel\\Sanctum\\HasApiTokens',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'preferences',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEmailVerified',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'arr' => 'Illuminate\\Support\\Arr',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'arr' => 'Illuminate\\Support\\Arr',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureCommands',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureMacros',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/BBCArticles.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BBCArticles',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Services\\NewsAggregatorServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetchArticles',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Exception
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'article' => 'App\\Models\\Article',
              'exception' => 'Exception',
              'http' => 'Illuminate\\Support\\Facades\\Http',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeArticles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'articles',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewYorkTimes.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\NewYorkTimes',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Services\\NewsAggregatorServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetchArticles',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Exception
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'article' => 'App\\Models\\Article',
              'carbon' => 'Carbon\\Carbon',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'exception' => 'Exception',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeArticles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'articles',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/NewsAggregatorServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Services\\NewsAggregatorServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetchArticles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/minhajul/Code/personal/innoscripta-news-aggregator/app/Services/TheGuardian.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\TheGuardian',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Services\\NewsAggregatorServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetchArticles',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Exception
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'article' => 'App\\Models\\Article',
              'exception' => 'Exception',
              'http' => 'Illuminate\\Support\\Facades\\Http',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeArticles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'articles',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
