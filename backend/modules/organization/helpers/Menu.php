<?php

namespace backend\modules\organization\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {

	public function toArray() {
		return [
			'label' => ['finance/organization', 'title'],
			'url' => 'organization',
			'icon' => 'file-text-o',
			'module' => 'organization',
			'access' => PermissionEnum::BACKEND_ALL,
		];
	}
}
