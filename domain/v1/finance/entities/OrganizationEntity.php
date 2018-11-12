<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class OrganizationEntity
 * 
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $name
 */

class OrganizationEntity  extends BaseEntity
{
	public $id;
	public $name;
	public $description;
	public $isForeign;
}
