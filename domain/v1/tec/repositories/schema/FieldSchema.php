<?php

namespace yii2woop\service\domain\v3\repositories\schema;

use yii2lab\domain\data\Query;
use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;
use yii2woop\service\domain\v3\enums\BlacklistTypeEnum;

/**
 * Class BlacklistSchema
 * 
 * @package yii2woop\service\domain\v3\repositories\schema
 * 
 */
class FieldSchema extends BaseSchema {
	
	public function relations() {
		return [
			// todo: полиморфическая связь (доработать)
			'translate' => [
				'type' => RelationEnum::MANY,
				'field' => 'service_id',
				'foreign' => [
					'id' => 'service.fieldTranslate',
					'field' => 'service_id',
				],
			],
			'translation' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.fieldTranslation',
					'field' => 'field_id',
				],
			],
			'validations' => [
				'type' => RelationEnum::MANY,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.fieldValidation',
					'field' => 'field_id',
				],
			],
			'values' => [
				'type' => RelationEnum::MANY,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.fieldValue',
					'field' => 'field_id',
				],
			],
			'blacklist' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'service.blacklist',
					'field' => 'item_id',
					'value' => function($entity) {
						return $entity->item_type == BlacklistTypeEnum::FIELD;
					},
				],
			],
		];
	}
	
}
