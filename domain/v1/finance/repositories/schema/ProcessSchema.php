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

			'documentType' => [
				'type' => RelationEnum::ONE,
				'field' => 'document_type_id',
				'foreign' => [
					'id' => 'finance.document',
					'field' => 'document_type_id',
				],
			],
			'operationType' => [
				'type' => RelationEnum::ONE,
				'field' => 'operation_type_id',
				'foreign' => [
					'id' => 'finance.operation',
					'field' => 'operation_type_id',
				],
			],
		];
	}

}
