<?php

use common\enums\rbac\PermissionEnum;
use yii2lab\helpers\Behavior;

return [
	'vendor' => 'yii2module\vendor\admin\Module',
	'service' => 'yii2woop\service\admin\Module',
	//'encrypt' => 'yii2module\encrypt\admin\Module',
	'error' => [
		'class' => 'yii2module\error\module\Module',
	],
	'user' => [
		'class' => 'yii2module\account\module\Module',
		'controllerMap' => [
			'auth' => [
				'class' => 'yii2module\account\module\controllers\AuthController',
				'layout' => '@yii2lab/applicationTemplate/backend/views/layouts/singleForm.php',
			],
		],
	],
	'dashboard' => [
		'class' => 'yii2module\dashboard\admin\Module',
		'log' => [
			'Frontend' => '@frontend/runtime/logs/app.log',
			'Backend' => '@backend/runtime/logs/app.log',
			'Console' => '@console/runtime/logs/app.log',
			'Api' => '@api/runtime/logs/app.log',
		],
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	/*'article' => [
		'class' => 'yii2module\article\admin\Module',
		'as access' => Behavior::access(PermissionEnum::ARTICLE_POST_MANAGE),
	],*/
	'notify' => [
		'class' => 'yii2lab\notify\admin\Module',
		'as access' => Behavior::access(PermissionEnum::NOTIFY_MANAGE),
	],
	'cleaner' => [
		'class' => 'yii2module\cleaner\admin\Module',
		'as access' => Behavior::access(PermissionEnum::CLEANER_MANAGE),
	],
	'rbac' => [
		'class' => 'mdm\admin\Module',
		'controllerMap' => [
			'assignment' => [
				'class' => 'yii2lab\rbac\admin\controllers\AssignmentController',
				'userClassName' => 'yii2module\account\domain\v2\models\User',
				'usernameField' => 'login',
			],
		],
		'as access' => Behavior::access(PermissionEnum::RBAC_MANAGE),
	],
	'gridview' => [
		'class' => 'kartik\grid\Module',
	],
	/* 'logreader' => [
		'class' => 'zhuravljov\yii\logreader\Module',
		'aliases' => [
			'Frontend' => '@frontend/runtime/logs/app.log',
			'Backend' => '@backend/runtime/logs/app.log',
			'Console' => '@console/runtime/logs/app.log',
			'Api' => '@api/runtime/logs/app.log',
		],
		'as access' => Behavior::access(PermissionEnum::LOGREADER_MANAGE),
	], */
	'logreader' => [
		'class' => 'alyanik\viewlog\Module',
		'as access' => Behavior::access(PermissionEnum::LOGREADER_MANAGE),
	],
	'offline' => [
		'class' => 'yii2module\offline\admin\Module',
		'as access' => Behavior::access(PermissionEnum::OFFLINE_MANAGE),
	],
	/*'app' => [
		'class' => 'yii2lab\app\admin\Module',
		'as access' => Behavior::access(PermissionEnum::APP_CONFIG),
	],*/
	'init' => [
		'class' => 'yii2lab\init\admin\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
];
