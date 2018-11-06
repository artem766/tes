<?php

namespace domain\v1\finance\interfaces\services;

use yii2lab\domain\interfaces\services\CrudInterface;

/**
 * Interface OperationInterface
 * 
 * @package domain\v1\finance\interfaces\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\OperationInterface $repository
 */
interface OperationInterface extends CrudInterface {

	public function arrayList();
	public function foreignList();
}
