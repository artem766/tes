<?php

namespace backend\modules\reports\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {


	public function toArray() {
		return [
			[
				'label' => ['finance/reports', 'title'],
				'url' => 'reports',
				'icon' => 'file-text-o',
				'access' => PermissionEnum::BACKEND_ALL,
				'items' => [
					[
						'label' => ['finance/reports', 'load'],
						'url' => 'reports',
						'icon' => 'file-text-o',
						'module' => 'reports',
						'access' => PermissionEnum::BACKEND_ALL,
					],
					[
						'label' => ['finance/reports', 'graph'],
						'url' => 'report/graph',
						'icon' => 'file-text-o',
						'module' => 'reports',
						'access' => PermissionEnum::BACKEND_ALL,
					],
				],
			]
		];
	}
}
