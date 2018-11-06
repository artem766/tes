<?php

namespace domain\v1\finance\services;

use domain\v1\finance\interfaces\services\OperationInterface;
use yii2lab\domain\data\Query;
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

	public function arrayList()
	{
		$documentEntityCollection = $this->repository->all();
		$array = [];
		foreach ($documentEntityCollection as $entity) {
			$array[$entity->id] = $entity->name;
		}
		return $array;
	}

	public function foreignList()
	{
		$query = Query::forge();
		$query->where('is_foreign', 1);
		return $this->repository->all($query);;
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
