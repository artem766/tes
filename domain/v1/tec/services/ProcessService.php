<?php

namespace domain\v1\finance\enums\services;

use domain\v1\finance\enums\interfaces\services\ProcessInterface;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class ServiceService
 *
 * @package domain\v1\finance\enums\services
 *
 * @property \domain\v1\finance\enums\interfaces\services\ProcessInterface $repository
 */
class ProcessService extends BaseActiveService implements ProcessInterface
{


	public function sort()
	{
		return [
			'attributes' => [
				'created_at',
			],
		];
	}

}
