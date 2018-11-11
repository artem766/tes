<?php

namespace domain\v1\finance\interfaces\services;

use yii2lab\domain\interfaces\services\CrudInterface;

/**
 * Interface OrganizationInterface
 * 
 * @package domain\v1\finance\interfaces\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\OrganizationInterface $repository
 */
interface OrganizationInterface extends CrudInterface {

	public function arrayList();
}
