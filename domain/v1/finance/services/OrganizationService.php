<?php

namespace domain\v1\finance\services;

use yii2lab\domain\services\base\BaseActiveService;
use domain\v1\finance\interfaces\services\OrganizationInterface;

/**
 * Class OrganizationService
 * 
 * @package domain\v1\finance\services
 *
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\OrganizationInterface $repository
 */
class OrganizationService extends BaseActiveService implements OrganizationInterface
{

	public function arrayList(){
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
