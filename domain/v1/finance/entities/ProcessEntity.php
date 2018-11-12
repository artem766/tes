<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class ProcessEntity
 * 
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property integer $service_id
 * @property DocumentEntity $document
 * @property OperationEntity $operation
 * @property OrganizationEntity $organization
 */

class ProcessEntity extends BaseEntity {

	protected $id;
	protected $document;
	protected $operation;
    protected $organization = null;
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
