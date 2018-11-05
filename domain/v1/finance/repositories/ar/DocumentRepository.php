<?php

namespace domain\v1\finance\repositories\ar;


use domain\v1\finance\interfaces\repositories\ProcessInterface;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class DocumentRepository extends BaseActiveArRepository implements ProcessInterface{

	protected $modelClass = 'domain\v1\finance\models\Document';

//	protected $schemaClass = true;


	
	public function fieldAlias() {
		return [
			'id' => 'service_field_value_id',
			'document_type' => 'document_type_id',
		];
	}

}