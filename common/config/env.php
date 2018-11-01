<?php

use yii2lab\app\domain\commands\ApiVersion;
use yii2lab\app\domain\commands\RunBootstrap;
use yii2lab\app\domain\filters\config\LoadConfig;
use yii2lab\app\domain\filters\config\LoadModuleConfig;
use yii2lab\app\domain\filters\config\LoadRouteConfig;
use yii2lab\domain\filters\LoadDomainConfig;
use yii2lab\misc\enums\YiiEnvEnum;

$migrateScan = YII_ENV == YiiEnvEnum::TEST ? [
	'@vendor/yii2lab',
	'@vendor/yii2module',
	'@vendor/yii2woop',
] : [];

return [
	'api' => [
		'defaultVersion' => 1,
	],
	'yii' => [
		//'class' => VENDOR_DIR . DS . 'yii2lab/yii2-domain/src/yii2' . DS . 'Yii.php',
	],
	'servers' => [
		'db' => [
			'main' => [
				'driver' => 'sqlite',
				'dbname' => '@common/runtime/sqlite/main.db',
				//'dbname' => '@common/data/sqlite_for_runtime/main.db',
			],
			'test' => [
				'driver' => 'sqlite',
				'dbname' => '@common/runtime/sqlite/test.db',
			],
			'filedb' => [
				'path' => '@common/data',
			],
		],
	],
	'app' => [
		'commands' => [
			[
				'class' => RunBootstrap::class,
				'app' => COMMON,
			],
			[
				'class' => RunBootstrap::class,
				'app' => APP,
			],
			[
				'class' => ApiVersion::class,
				'isEnabled' => APP == API,
			],
			[
				'class' => 'yii2module\offline\domain\filters\IsOffline',
				'exclude' => [
					CONSOLE,
					BACKEND,
				],
			],
			[
				'class' => 'yii2lab\domain\filters\DefineDomainLocator',
				'filters' => [
					[
						'class' => LoadDomainConfig::class,
						'app' => COMMON,
						'name' => 'domains',
						'withLocal' => true,
					],
					[
						'class' => LoadDomainConfig::class,
						'app' => APP,
						'name' => 'domains',
						'withLocal' => true,
					],
				],
			],
		],
	],
	'config' => [
		'filters' => [
			[
				'class' => LoadConfig::class,
				'app' => COMMON,
				'name' => 'main',
				'withLocal' => true,
			],
			[
				'class' => LoadConfig::class,
				'app' => APP,
				'name' => 'main',
				'withLocal' => true,
			],
			
			[
				'class' => LoadModuleConfig::class,
				'app' => COMMON,
				'name' => 'modules',
				'withLocal' => true,
			],
			[
				'class' => LoadModuleConfig::class,
				'app' => APP,
				'name' => 'modules',
				'withLocal' => true,
			],
			
			[
				'class' => LoadRouteConfig::class,
				'app' => APP,
				'name' => 'routes',
				'withLocal' => true,
			],
			
			[
				'class' => LoadConfig::class,
				'app' => COMMON,
				'name' => 'params',
				'withLocal' => true,
				'assignTo' => 'params',
			],
			[
				'class' => LoadConfig::class,
				'app' => APP,
				'name' => 'params',
				'withLocal' => true,
				'assignTo' => 'params',
			],
			
			[
				'class' => LoadConfig::class,
				'app' => COMMON,
				'name' => 'install',
			],
			[
				'class' => LoadConfig::class,
				'app' => APP,
				'name' => 'install',
			],
			
			[
				'class' => LoadConfig::class,
				'app' => COMMON,
				'name' => 'test',
				'withLocal' => true,
				'isEnabled' => YII_ENV == YiiEnvEnum::TEST,
			],
			[
				'class' => LoadConfig::class,
				'app' => APP,
				'name' => 'test',
				'withLocal' => true,
				'isEnabled' => YII_ENV == YiiEnvEnum::TEST,
			],
			
			'yii2lab\app\domain\filters\config\SetControllerNamespace',
			'yii2lab\app\domain\filters\config\FixValidationKeyInTest',
			'yii2lab\app\domain\filters\config\SetAppId',
			'yii2lab\app\domain\filters\config\SetPath',
			'yii2lab\app\domain\filters\config\DebugModule',
		
			[
				'class' => 'yii2lab\db\domain\filters\migration\SetPath',
				'path' => [
					'@vendor/yii2lab/yii2-geo/src/domain/migrations',
					'@vendor/yii2lab/yii2-rest/src/domain/migrations',
					'@vendor/yii2lab/yii2-rbac/src/domain/migrations',
					'@vendor/yii2module/yii2-account/src/domain/v2/migrations',
					'@vendor/yii2module/yii2-profile/src/domain/v2/migrations',
					'@vendor/yii2module/yii2-article/src/domain/migrations',
					'@vendor/yii2module/yii2-summary/src/domain/migrations',
					'@vendor/yiisoft/yii2/log/migrations',
				],
				'scan' => array_merge([
					'@domain',
				], $migrateScan),
			],
		
		],
	],
];