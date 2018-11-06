<?php

namespace domain\v1\finance\services;

use yii2lab\domain\services\base\BaseActiveService;
use domain\v1\finance\interfaces\services\ProcessInterface;

/**
 * Class ProcessService
 * 
 * @package domain\v1\finance\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\ProcessInterface $repository
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
