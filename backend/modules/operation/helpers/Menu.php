<?php

namespace backend\modules\operationType\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {

	public function toArray() {
		return [
			'label' => ['finance/operation', 'title'],
			'url' => 'operation',
			'icon' => 'file-text-o',
			'module' => 'operation',
			'access' => PermissionEnum::BACKEND_ALL,
		];
	}
}
