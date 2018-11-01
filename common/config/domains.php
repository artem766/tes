<?php

use yii2lab\extension\jwt\filters\token\JwtFilter;
use yii2module\account\domain\v2\filters\token\DefaultFilter;

return [
	'vendor' => 'yii2module\vendor\domain\Domain',
	'tool' => 'yii2module\tool\domain\Domain',
	'rest' => 'yii2lab\rest\domain\Domain',
	'account' => [
		'class' => 'yii2module\account\domain\v2\Domain',
		'services' => [
			'auth' => [
				'tokenAuthMethods' => [
					'bearer' => DefaultFilter::class,
					'tps' => DefaultFilter::class,
					'jwt' => [
						'class' => JwtFilter::class,
						'profile' => 'auth',
					],
				],
			],
			'activity' => [
				'sources' => [
					'account.auth',
					'account.registration',
					'operation.custom',
				],
			],
		],
	],
	'domain' => 'yii2lab\domain\Domain',
	'dashboard' => 'yii2module\dashboard\domain\Domain',
	'notify' => 'yii2lab\notify\domain\Domain',
	'navigation' => 'yii2lab\navigation\domain\Domain',
	'guide' => 'yii2module\guide\domain\Domain',
	'rbac' => 'yii2lab\rbac\domain\Domain',
	'lang' => 'yii2module\lang\domain\Domain',
	'geo' => 'yii2lab\geo\domain\Domain',
	'jwt' => 'yii2lab\extension\jwt\Domain',
];
