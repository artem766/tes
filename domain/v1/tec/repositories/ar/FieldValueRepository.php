<?php

namespace yii2woop\service\domain\v3\repositories\ar;

use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class FieldValueRepository extends BaseActiveArRepository {
	
	/**
	 * @inheritdoc
	 */
	public function tableName()
	{
		return 'service_field_value';
	}
	
	public function fieldAlias() {
		return [
			'id' => 'service_field_value_id',
			'field_id' => 'service_field_id',
		];
	}
	
}