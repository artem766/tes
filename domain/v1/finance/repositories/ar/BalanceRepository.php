<?php

namespace domain\v1\finance\repositories\ar;

use domain\v1\finance\entities\ProcessEntity;
use yii2lab\domain\BaseEntity;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use domain\v1\finance\interfaces\repositories\ProcessInterface;
use yii2lab\domain\data\Query;

/**
 * Class BalanceRepository
 *
 * @package domain\v1\finance\repositories\ar
 *
 *
 * @property-read \domain\v1\finance\Domain $domain
 *
 */
class BalanceRepository extends BaseActiveArRepository implements ProcessInterface {

	protected $schemaClass = true;

	public function all(Query $query = null){
		$query->with(['operation','document']);
		return parent::all($query);
	}

    public function insert(BaseEntity $entity) {
        if ($entity->isInsert){
	        \App::$domain->balance->income($entity);
        } else {
            \App::$domain->balance->outcome($entity);
        }
         return parent::insert($entity);
    }

	public function fieldAlias()
	{
		return [
			'operation' => 'operation_type_id',
			'document' => 'document_type_id',
            'organization' => 'organization_id',
		];
	}

}