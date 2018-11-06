<?php

namespace domain\v1\finance\repositories\ar;

use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use domain\v1\finance\interfaces\repositories\DocumentInterface;

/**
 * Class DocumentRepository
 * 
 * @package domain\v1\finance\repositories\ar
 * 
 * @property-read \domain\v1\finance\Domain $domain
 */
class DocumentRepository extends BaseActiveArRepository implements DocumentInterface {

	protected $schemaClass = true;

}
