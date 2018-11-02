<?php

namespace yii2woop\service\domain\v3\interfaces\services;

use yii2lab\domain\data\Query;
use yii2lab\domain\interfaces\services\CrudInterface;
use yii2woop\service\domain\v3\entities\ServiceEntity;
use yii2woop\service\domain\v3\interfaces\traits\BlacklistInterface;

interface ServiceInterface extends CrudInterface, BlacklistInterface {

	public function allByCategoryId($id, Query $query = null);
	public function oneByIdForPayment($id, Query $query = null);
	
	/**
	 * @param $body
	 *
	 * @return ServiceEntity
	 */
	public function getServiceInfo($body);
	public function checkServiceStatus(ServiceEntity $service);
	public function getServiceListForPartner($serviceIds);

}
