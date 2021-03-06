<?php

namespace domain\v1\finance\repositories\ar;


use DateInterval;
use DateTime;
use yii2lab\domain\BaseEntity;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use domain\v1\finance\interfaces\repositories\ProcessInterface;
use yii2lab\domain\data\Query;

/**
 * Class ProcessRepository
 *
 * @package domain\v1\finance\repositories\ar
 *
 * @property-read \domain\v1\finance\Domain $domain
 */
class ProcessRepository extends BaseActiveArRepository implements ProcessInterface {

	protected $schemaClass = true;

	public function all(Query $query = null){
		$query->with(['operation','document','organization']);
		return parent::all($query);
	}
	public function insert(BaseEntity $entity) {
		$date = new DateTime();
		$date->add(new DateInterval('PT6H'));
		$entity->created_at = $date->format('Y-m-d H:i:s');
		return parent::insert($entity); // TODO: Change the autogenerated stub
	}

//    public function insert(BaseEntity $entity) {
//	    if ($entity->isInsert){
//	        \App::$domain->balance->income($entity->amount);
//        }
//         return parent::insert($entity);
//    }

	public function fieldAlias()
	{
		return [
			'operation' => 'operation_type_id',
			'document' => 'document_type_id',
            'organization' => 'organization_id',
		];
	}

}