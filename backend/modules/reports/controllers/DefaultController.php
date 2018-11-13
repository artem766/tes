<?php

namespace backend\modules\reports\controllers;

use domain\v1\finance\forms\DocumentForm;
use domain\v1\finance\forms\ProcessForm;
use domain\v1\finance\forms\search\ProcessSearch;
use yii2lab\domain\data\Query;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller
{

	public $serviceName = 'finance.process';
	public $formClass = ProcessForm::class;
	public $service = 'finance.process';

	public function actions()
	{
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['index']['searchClass'] = ProcessSearch::class;
		return $actions;
	}


}
