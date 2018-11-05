<?php

return [
	'mainMenu' => [
		[
			'label' => ['admin', 'main'],
		],

		'backend\modules\operation\helpers\Menu',
		'backend\modules\document\helpers\Menu',
		'yii2module\article\admin\helpers\Menu',
		'yii2woop\service\admin\helpers\Menu',
		[
			'label' => ['admin', 'system'],
		],
		'yii2lab\applicationTemplate\backend\helpers\Menu',
	],
];