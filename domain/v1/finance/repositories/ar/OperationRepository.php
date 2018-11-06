<?php

namespace domain\v1\finance\repositories\ar;


use domain\v1\finance\interfaces\repositories\ProcessInterface;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class OperationRepository extends BaseActiveArRepository implements ProcessInterface{

	protected $modelClass = 'domain\v1\finance\models\Operation';

//	protected $schemaClass = true;

	public function fieldAlias()
	{
		return [
			'isForeign' => 'is_foreign'

		];
	}
	


}