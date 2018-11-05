<?php

namespace domain\v1\finance\services;

use domain\v1\finance\interfaces\services\OperationInterface;

use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class OperationService
 *
 * @package domain\v1\finance\services
 *
 * @property \domain\v1\finance\interfaces\repositories\OperationInterface $repository
 */
class OperationService extends BaseActiveService implements OperationInterface
{


	public function sort()
	{
		return [
			'attributes' => [
				'name',
			],
		];
	}

}
