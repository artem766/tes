<?php

return [
	'MaintenanceMode' => false,
	'pageSize' => 25,
	'adminEmail' => 'info@qrp.kz',
	'fixture' => [
		'dir' => '@common/fixtures',
		'exclude' => [
			'migration',
		],
	],
	'static' => [
		'path' => [
			'avatar' => 'images/avatars',
			'qr' => 'images/qr',
		],
	],
	'article' => [
		'links' => [
			'about',
			'contact',
		],
	],
	/*'codeception' => [
		'command' => 'C:\OpenServer\custom\bin\codeception run',
	],*/
];