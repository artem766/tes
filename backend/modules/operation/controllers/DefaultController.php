<?php

namespace backend\modules\operation\controllers;

use domain\v1\finance\forms\OperationForm;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller {

	public $serviceName = 'finance.operation';
	public $formClass = OperationForm::class;
	public $service = 'finance.operation';
//    const ACTION_UPDATE = 'domain\v1\finance\actions\UpdateAction';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
        $actions['update']['class'] = 'domain\v1\finance\actions\UpdateAction';
		return $actions;
	}

}
