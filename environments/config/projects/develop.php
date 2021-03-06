<?php

use yii2lab\misc\enums\DbDriverEnum;
use yii2lab\misc\enums\YiiEnvEnum;

return [
	'title' => 'Develop',
	'filters' => [
		[
			'class' => 'yii2lab\init\domain\filters\store\Copy',
			'paths' => [
				'environments/common',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\Url',
			'default' => [
				'frontend' => 'wooppay.yii',
				'backend' => 'admin.wooppay.yii',
				'api' => 'api.wooppay.yii',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'Acquiring',
			'segment' => 'servers',
			'value' => [
				'acquiring' => [
					'host' => 'https://pci-ws.wooppay.com',
				],
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'DB',
			'segment' => 'servers',
			'value' => [
				'db' => [
					'main' => [
						'driver' => '',
						'host' => '',
						'username' => '',
						'password' => '',
						'dbname' => '',
						'defaultSchema' => '',
					],
				],
				'static' => [
					'publicPath' => '@frontend/web/',
					'domain' => 'http://wooppay.yii/',
					'driver' => 'local',
					'connection' => [
						'path' => '@frontend/web',
					],
				],


			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\ServerDb',
			'default' => [
				'driver' => DbDriverEnum::MYSQL,
				'host' => 'localhost',
				'username' => 'root',
				'password' => '',
				'dbname' => 'yii',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\ServerMail',
			'default' => [
				'host' => 'mail',
				'port' => '25',
				'username' => 'info@demo.com',
				'password' => 'qwerty123',
			],
		],
		/*[
			'class' => 'yii2lab\init\domain\filters\input\Mode',
			'default' => [
				'env' => 'prod',
				'debug' => false,
			],
		],*/
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'Core',
			'segment' => 'mode',
			'value' => [
				'env' => YiiEnvEnum::DEV,
				'debug' => true,
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\CookieValidationKey',
			'length' => 32,
			'apps' => [
				'frontend',
				'backend',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\Domain',
			'driver' => [
				'primary' => 'ar',
				'slave' => 'disc',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\ServerStatic',
			'default' => [
				'publicPath' => '@frontend/web/',
				'domain' => 'http://wooppay.yii/',
				'driver' => 'local',
				'connection' => [
					'path' => '@frontend/web',
				],
				/*'driver' => 'ftp',
				'connection' => [
					'host' => 'localhost',
					'username' => 'static.wooppay.yii',
					'password' => '111',
					'root' => '/frontend/web',
				],*/
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\store\SetWritable',
			'target' => [
				'frontend',
				'backend',
				'api',
				'console',
			],
			'paths' => [
				'frontend/web/images',
				'common/runtime',
				'{app}/runtime',
				'{app}/web/assets',
			],
			'ignorePaths' => [
				'console/web/assets',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\store\SetExecutable',
			'paths' => [
				'yii',
				'yii_test',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'Encrypt profiles',
			'segment' => 'encrypt.profiles',
			'value' => [
				'default' => [
					'password' => 'qwerty123',
					'iv' => 'ZZZZZZZZZZZZZZZZ',
				],
			],
		],
		/*[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'REST API',
			'segment' => 'api',
			'value' => [
				'defaultVersion' => 1,
			],
		],*/
		[
			'class' => 'yii2lab\init\domain\filters\store\EnvLocalConfig',
		],
	],
];
