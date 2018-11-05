<?php

return [
	'mainMenu' => [
		[
			'label' => ['admin', 'main'],
		],

		'backend\modules\operationType\helpers\Menu',
		'yii2module\article\admin\helpers\Menu',
		'yii2woop\service\admin\helpers\Menu',
		[
			'label' => ['admin', 'system'],
		],
		'yii2lab\applicationTemplate\backend\helpers\Menu',
	],
];