<?php

namespace domain\v1\finance\enums\entities;

use yii\helpers\ArrayHelper;
use yii2lab\domain\BaseEntity;
use yii2lab\domain\helpers\Helper;

/**
 * Class FieldEntity
 *
 * @package domain\v1\finance\enums\entities
 *
 * @property integer $id
 * @property integer $service_id

 */

class ProcessEntity extends BaseEntity {
	
	protected $id;
	protected $document_type;
	protected $created_at;

	public function fieldType() {
		return [
			'document_type' => [
				'type' => DocumentEntity::class,
			],
		];
	}
	

}
