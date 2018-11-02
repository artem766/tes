<?php

namespace yii2woop\service\domain\v3\repositories\schema;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;
use yii2lab\domain\enums\RelationClassTypeEnum;
use yii2woop\service\domain\v3\entities\BlacklistEntity;
use yii2woop\service\domain\v3\enums\BlacklistTypeEnum;

/**
 * Class BlacklistSchema
 * 
 * @package yii2woop\service\domain\v3\repositories\schema
 * 
 */
class ServiceSchema extends BaseSchema {
	
	public function relations() {
		return [
			'fields' => [
				'type' => RelationEnum::MANY,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.field',
					'field' => 'service_id',
					'classType' => RelationClassTypeEnum::SERVICE,
				],
			],
			'categories' => [
				'type' => RelationEnum::MANY_TO_MANY,
				'via' => [
					'id' => 'service.categories',
					'this' => 'service',
					'foreign' => 'category',
					//'classType' => RelationClassTypeEnum::SERVICE,
				],
			],
			'parent' => [
				'type' => RelationEnum::ONE,
				'field' => 'parent_id',
				'foreign' => [
					'id' => 'service.service',
					'field' => 'id',
					'classType' => RelationClassTypeEnum::SERVICE,
				],
			],
			'children' => [
				'type' => RelationEnum::MANY,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.service',
					'field' => 'parent_id',
					'classType' => RelationClassTypeEnum::SERVICE,
				],
			],
			'blacklist' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.blacklist',
					'field' => 'item_id',
					'value' => function($entity) {
						return $entity->item_type == BlacklistTypeEnum::SERVICE;
					},
				],
			],
		];
	}
	
	public function searchByTextFields() {
		return [
			'title',
			//'name',
			'description',
			'description_company',
		];
	}
	
}
