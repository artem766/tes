<?php


namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class FieldEntity
 *
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $name
 */

class DocumentEntity  extends BaseEntity
{
	public $document_type_id;
	public $name;
	public $description;
}