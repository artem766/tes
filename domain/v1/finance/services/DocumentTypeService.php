<?php

namespace domain\v1\finance\services;

use domain\v1\finance\interfaces\services\DocumentTypeInterface;
use domain\v1\finance\interfaces\services\ProcessInterface;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class ServiceService
 *
 * @package domain\v1\finance\services
 *
 * @property \domain\v1\finance\interfaces\services\ProcessInterface $repository
 */
class DocumentTypeService extends BaseActiveService implements DocumentTypeInterface
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
