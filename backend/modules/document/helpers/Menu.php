<?php

namespace backend\modules\document\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {

	public function toArray() {
		return [
			'label' => ['finance/document', 'title'],
			'url' => 'document',
			'icon' => 'file-text-o',
			'module' => 'document',
			'access' => PermissionEnum::BACKEND_ALL,
		];
	}
}
