<?php

namespace domain\v1\finance\enums\repositories\schema;

use yii2lab\domain\enums\RelationEnum;
use yii2lab\domain\repositories\relations\BaseSchema;

/**
 * Class BlacklistSchema
 *
 * @package domain\v1\finance\enums\repositories\schema
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
					'field' => 'document_type_id',
				],
			],
		];
	}

}
