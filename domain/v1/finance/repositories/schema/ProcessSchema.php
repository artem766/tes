<?php

namespace domain\v1\finance\repositories\schema;

use yii2lab\domain\RelationEnum;
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
				'field' => 'id',
				'foreign' => [
					'id' => 'finance.documentType',
					'field' => 'document_type_id',
				],
			],
			'operationType' => [
				'type' => RelationEnum::ONE,
				'field' => 'id',
				'foreign' => [
					'id' => 'finance.operationType',
					'field' => 'operation_type_id',
				],
			],
		];
	}

}
