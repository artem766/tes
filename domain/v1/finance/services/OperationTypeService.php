<?php

namespace domain\v1\finance\services;

use domain\v1\finance\interfaces\services\OperationTypeInterface;

use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class ServiceService
 *
 * @package domain\v1\finance\services
 *
 * @property \domain\v1\finance\interfaces\services\ProcessInterface $repository
 */
class OperationTypeService extends BaseActiveService implements OperationTypeInterface
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
