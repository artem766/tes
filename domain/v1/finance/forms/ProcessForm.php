<?php

namespace domain\v1\tec\forms;

use yii2lab\domain\base\Model;

class ProcessForm extends Model
{

	public $id;
	public $documentType;
	public $operationType;
	public $created_at;

	public function rules()
	{
		return [
			[['service_id', 'fields'], 'required'],
			[['service_id'], 'integer'],
		];
	}

}