<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;
use yii2module\account\domain\v2\entities\LoginEntity;

/**
 * Class ProcessEntity
 * 
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $created_at
 * @property float $amount
 * @property LoginEntity $created_by
 * @property DocumentEntity $document
 * @property OperationEntity $operation
 * @property OrganizationEntity $organization
 */

class ProcessEntity extends BaseEntity {

	protected $id;
	protected $created_by;
	protected $document;
	protected $operation;
    protected $amount = 0;
    protected $organization = null;
	protected $created_at;
	protected $from;
	protected $to;
}
