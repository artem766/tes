<?php

return [
	'summary' => [
		'class' => 'yii2module\summary\domain\Domain',
		'services' => [
			'summary' => [
				'lastModifiedTables' => [
					'service' => [
						'table' => 'service',
						'field' => 'modify_date',
					],
					'service_category' => [
						'table' => 'service_menu',
						'field' => 'modify_date',
					],
					'city' => [
						'value' => function() { return "2018-01-01T01:01:01Z"; },
					],
					'country' => [
						'value' => function() { return "2018-01-01T01:01:01Z"; },
					],
					'region' => [
						'value' => function() { return "2018-01-01T01:01:01Z"; },
					],
				],
			],
		],
	],
];
