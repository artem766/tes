<?php

namespace domain\v1\finance\entities;


use yii2lab\domain\BaseEntity;


/**
 * Class FieldEntity
 *
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property integer $service_id

 */

class ProcessEntity extends BaseEntity {
	
	protected $id;
	protected $document_type;
	protected $operation_type;
	protected $created_at;

	public function fieldType() {
		return [
			'document_type' => [
				'type' => DocumentEntity::class,
			],
			'operation_type' => [
				'type' => OperationEntity::class,
			],
		];
	}
	

}
