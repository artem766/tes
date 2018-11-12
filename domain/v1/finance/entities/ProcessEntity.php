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
 * @property double $amount
 * @property DocumentEntity $document
 * @property OperationEntity $operation
 * @property OrganizationEntity $organization
 */

class ProcessEntity extends BaseEntity {

	protected $id;
	protected $document;
	protected $operation;
    protected $amount = 0;
    protected $organization = null;
	protected $created_at;

	public function fieldType() {
		return [
			'document' => [
				'type' => DocumentEntity::class,
			],
			'operation' => [
				'type' => OperationEntity::class,
			],
            'organization' => [
                'type' => OrganizationEntity::class,
            ],
		];
	}


}
