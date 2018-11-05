<?php

namespace domain\v1\finance\services;

use domain\v1\finance\interfaces\services\DocumentInterface;
use domain\v1\finance\interfaces\services\ProcessInterface;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class DocumentService
 *
 * @package domain\v1\finance\services
 *
 * @property \domain\v1\finance\interfaces\repositories\DocumentInterface $repository
 */
class DocumentService extends BaseActiveService implements DocumentInterface
{

	public function getDataForList(){
		$documentEntityCollection = $this->repository->all();
		$array = [];
		foreach ($documentEntityCollection as $entity){
			$array[$entity->id] = $entity->name;
		}
		return $array;
	}

	public function sort()
	{
		return [
			'attributes' => [
				'name',
			],
		];
	}

}
