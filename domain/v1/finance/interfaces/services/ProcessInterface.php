<?php

namespace domain\v1\finance\interfaces\services;

use yii2lab\domain\interfaces\services\CrudInterface;

/**
 * Interface ProcessInterface
 * 
 * @package domain\v1\finance\interfaces\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\ProcessInterface $repository
 */
interface ProcessInterface extends CrudInterface {

	public function getDebtData();
}
