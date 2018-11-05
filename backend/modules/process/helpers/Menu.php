<?php

namespace backend\modules\process\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {

	public function toArray() {
		return [
			'label' => ['finance/process', 'title'],
			'url' => 'process',
			'icon' => 'file-text-o',
			'module' => 'process',
			'access' => PermissionEnum::BACKEND_ALL,
		];
	}
}
