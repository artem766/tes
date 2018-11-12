<?php

namespace domain\v1\finance\repositories\ar;

use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use domain\v1\finance\interfaces\repositories\OperationInterface;

/**
 * Class OperationRepository
 * 
 * @package domain\v1\finance\repositories\ar
 * 
 * @property-read \domain\v1\finance\Domain $domain
 */
class OperationRepository extends BaseActiveArRepository implements OperationInterface {


	public function fieldAlias()
	{
		return [
			'isForeign' => 'is_foreign',
            'isIncome' => 'is_income'
		];
	}



}