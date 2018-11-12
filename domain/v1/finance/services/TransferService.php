<?php

namespace domain\v1\finance\services;

use yii2lab\domain\services\base\BaseActiveService;
use domain\v1\finance\interfaces\services\BalanceInterface;
use yii2lab\domain\services\base\BaseService;

/**
 * Class TransferService
 * 
 * @package domain\v1\finance\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\TransferInterface $repository
 */
class TransferService extends BaseService implements BalanceInterface
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
