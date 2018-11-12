<?php

namespace backend\modules\organization\controllers;

use domain\v1\finance\forms\OrganizationForm;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller {

	public $serviceName = 'finance.organization';
	public $formClass = OrganizationForm::class;
	public $service = 'finance.organization';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
        $actions['update']['class'] = 'domain\v1\finance\actions\UpdateAction';

		return $actions;
	}
	
}
