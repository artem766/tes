<?php

namespace backend\modules\document\controllers;

use domain\v1\finance\forms\DocumentForm;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller
{

	public $serviceName = 'finance.document';
	public $formClass = DocumentForm::class;
	public $service = 'finance.document';

	public function actions()
	{
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
        $actions['update']['class'] = 'domain\v1\finance\actions\UpdateAction';
		return $actions;
	}

}
