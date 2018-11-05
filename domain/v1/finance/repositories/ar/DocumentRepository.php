<?php

namespace domain\v1\finance\repositories\ar;


use domain\v1\finance\interfaces\repositories\ProcessInterface;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class DocumentRepository extends BaseActiveArRepository implements ProcessInterface{

	protected $modelClass = 'domain\v1\finance\models\Document';

//	protected $schemaClass = true;




}