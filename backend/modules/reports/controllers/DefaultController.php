<?php

namespace backend\modules\reports\controllers;

use domain\v1\finance\forms\DocumentForm;
use domain\v1\finance\forms\ProcessForm;
use domain\v1\finance\forms\search\ProcessSearch;
use domain\v1\finance\helpers\DateTimeHelper;
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
	public function actionDownload($searchCondition)
	{
		$query = Query::forge();
		$searchCondition = unserialize($searchCondition);
		$searchCondition = array_shift($searchCondition);
//		prr($searchCondition,1,1);
		if(!empty($searchCondition['operation'])){
			$query->andWhere('operation', $searchCondition['operation']);
		}
		if(!empty($searchCondition['document'])){
			$query->andWhere('document', $searchCondition['document']);
		}
		if(!empty($searchCondition['organization'])){
			$query->andWhere('organization', $searchCondition['organization']);
		}
		if(!empty($searchCondition['datetime_start'])) {
			$query->andWhere(['>=', 'created_at', DateTimeHelper::convert($searchCondition['datetime_start'])]);
		}

		if(!empty($searchCondition['datetime_end'])) {
			$query->andWhere(['<', 'created_at', DateTimeHelper::convert($searchCondition['datetime_end'])]);
		}
		$processEntityCollection = \App::$domain->finance->process->all($query);
		prr($processEntityCollection,1,1);
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['index']['searchClass'] = ProcessSearch::class;
		return $actions;
	}

}
