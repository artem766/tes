<?php

namespace domain\v1\finance\forms;

use yii2lab\domain\base\Model;

class ProcessForm extends Model
{

	public $id;
	public $name;
	public $document;
	public $operation;
    public $organization;
    public $amount;
	public $created_at;

	public function rules()
	{
		return [
			[['document', 'operation', 'amount'], 'required'],
            [['amount'], 'integer'],
		];
	}

}