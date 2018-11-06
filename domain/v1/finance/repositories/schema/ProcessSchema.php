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

			'document' => [
				'type' => RelationEnum::ONE,
				'field' => 'document',
				'foreign' => [
					'id' => 'finance.document',
					'field' => 'id',
				],
			],
			'operation' => [
				'type' => RelationEnum::ONE,
				'field' => 'operation',
				'foreign' => [
					'id' => 'finance.operation',
					'field' => 'id',
				],
			],
		];
	}

}
