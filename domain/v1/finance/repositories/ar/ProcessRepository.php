<?php

namespace domain\v1\finance\repositories\ar;


use domain\v1\finance\interfaces\repositories\ProcessInterface;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class ProcessRepository extends BaseActiveArRepository implements ProcessInterface{

	protected $modelClass = 'domain\v1\finance\models\Process';

	protected $schemaClass = true;




}