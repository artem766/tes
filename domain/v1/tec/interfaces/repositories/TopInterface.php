<?php

namespace yii2woop\service\domain\v3\interfaces\repositories;

use yii2lab\domain\interfaces\repositories\CrudInterface;

interface TopInterface extends CrudInterface {
	
	public function allNames();
	
}
