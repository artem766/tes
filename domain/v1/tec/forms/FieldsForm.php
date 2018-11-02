<?php

namespace yii2woop\service\domain\v3\forms;

use yii2lab\domain\base\Model;

class FieldsForm extends Model {
	
	public $service_id;
	public $fields;
	
	
	public function rules() {
		return [
			[['service_id', 'fields'], 'required'],
			[['service_id'], 'integer'],
			//[['fields'], 'each', 'rule' => ['string']],
		];
	}
	
}