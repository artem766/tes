<?php

namespace backend\modules\operation\controllers;

use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller {

	public $serviceName = 'finance.operationType';
	public $formClass = 'backend\modules\operation\PostForm';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['view']['render'] = 'view';
		return $actions;
	}
	
}
