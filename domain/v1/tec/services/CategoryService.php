<?php

namespace yii2woop\service\domain\v3\services;

use yii2lab\domain\services\base\BaseActiveService;
use yii2woop\service\domain\v3\behaviors\query\BlacklistFilter;
use yii2woop\service\domain\v3\behaviors\query\CategoryProjectFilter;
use yii2woop\service\domain\v3\behaviors\query\CategoryParentFilter;
use yii2woop\service\domain\v3\enums\BlacklistTypeEnum;
use yii2woop\service\domain\v3\helpers\ServicePermissionEnum;
use yii2woop\service\domain\v3\interfaces\services\CategoryInterface;
use yii2woop\service\domain\v3\traits\services\BlacklistTrait;

class CategoryService extends BaseActiveService implements CategoryInterface {
	
	use BlacklistTrait;
	
	const BLACKLIST_TYPE = BlacklistTypeEnum::CATEGORY;
	
	public function sort() {
		return [
			'attributes'=>[
				'title',
				'name',
			],
		];
	}
	
	public function behaviors() {
		return [
			[
				'class' => BlacklistFilter::class,
				'type' => BlacklistTypeEnum::CATEGORY,
				'attribute' => 'id',
				'allowOnly' => [ServicePermissionEnum::CATEGORY_MANAGE],
			],
			CategoryProjectFilter::class,
			CategoryParentFilter::class,
		];
	}
	
	public function servicesIdByCategoryId($categoryId) {
		return $this->domain->repositories->categories->idsByCategoryId($categoryId);
	}
	
}
