<?php

namespace domain\v1\finance\repositories\schema;



use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;

/**
 * Class BlacklistSchema
 *
 * @package domain\v1\finance\repositories\schema
 *
 */
class ProcessSchema extends BaseSchema
{
	public function relations()
	{
		return [

			'document_type' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'finance.document',
					'field' => 'document_type_id',
				],
			],
			'operation_type' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'finance.operation',
					'field' => 'operation_type_id',
				],
			],
		];
	}

}
