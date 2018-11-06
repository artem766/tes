<?php

namespace domain\v1\finance\interfaces\services;

use yii2lab\domain\interfaces\services\CrudInterface;

/**
 * Interface DocumentInterface
 * 
 * @package domain\v1\finance\interfaces\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\DocumentInterface $repository
 */
interface DocumentInterface extends CrudInterface {

	public function arrayList();
}
