<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class DocumentEntity
 * 
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */

class DocumentEntity  extends BaseEntity
{
	public $id;
	public $name;
	public $description;
}