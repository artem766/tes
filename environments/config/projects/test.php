<?php

use yii2lab\misc\enums\YiiEnvEnum;

return [
	'title' => 'Test',
	'filters' => [
		/*[
			'class' => 'yii2lab\init\domain\filters\store\Copy',
			'paths' => [
				'environments/common',
			],
		],*/
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'Url',
			'segment' => 'url',
			'value' => [
				'frontend' => 'http://yii2.test.wooppay.com/',
				'backend' => 'http://admin.yii2.test.wooppay.com/',
				'api' => 'http://api.yii2.test.wooppay.com/',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'DB',
			'segment' => 'servers',
			'value' => [
				
				'db' => [
					'main' => [
						'driver' => 'pgsql',
						'host' => 'dbweb',
						'username' => 'logging',
						'password' => 'moneylogger',
						'dbname' => 'yii2_test_wooppay',
						'defaultSchema' => 'wooppay',
					],
				],
				'core' => [
					'domain' => 'http://api.yii2-stage.test.wooppay.com/',
					'defaultVersion' => 5,
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
				'primary' => 'core',
				'slave' => 'ar',
			],
		],
		[
			'class' => 'yii2lab\init\domain\filters\input\ServerStatic',
			'default' => [
				// todo: выпилить publicPath
				// todo: сделать профили
				'publicPath' => '@frontend/web/',
				'domain' => 'http://yii2.test.wooppay.com/',
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
