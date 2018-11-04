<?php


namespace domain\v1\finance\enums\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class FieldEntity
 *
 * @package domain\v1\finance\enums\entities
 *
 * @property integer $id
 * @property string $name
 */

class DocumentTypeEntity  extends BaseEntity
{
	public $id;
	public $name;
	public $description;
}