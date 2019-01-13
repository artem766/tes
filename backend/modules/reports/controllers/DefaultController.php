<?php

namespace backend\modules\reports\controllers;

use domain\v1\finance\forms\ProcessForm;
use domain\v1\finance\forms\search\ProcessSearch;
use domain\v1\finance\helpers\DateTimeHelper;
use yii2lab\domain\data\Query;
use yii2lab\domain\web\ActiveController as Controller;
use yii2lab\extension\arrayTools\helpers\ArrayIterator;
use yii2lab\extension\yii\helpers\ArrayHelper;

class DefaultController extends Controller {

	public $serviceName = 'finance.process';
	public $formClass = ProcessForm::class;
	public $service = 'finance.process';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['index']['searchClass'] = ProcessSearch::class;
		return $actions;
	}

	public function actionDownload($searchCondition) {
		$query = Query::forge();
		$searchCondition = unserialize($searchCondition);
		$searchCondition = array_shift($searchCondition);
		if(!empty($searchCondition['operation'])) {
			$query->andWhere('operation', $searchCondition['operation']);
		}
		if(!empty($searchCondition['document'])) {
			$query->andWhere('document', $searchCondition['document']);
		}
		if(!empty($searchCondition['organization'])) {
			$query->andWhere('organization', $searchCondition['organization']);
		}
		if(!empty($searchCondition['datetime_start'])) {
			$query->andWhere(['>=', 'created_at', DateTimeHelper::convert($searchCondition['datetime_start'])]);
		}

		if(!empty($searchCondition['datetime_end'])) {
			$query->andWhere(['<', 'created_at', DateTimeHelper::convert($searchCondition['datetime_end'])]);
		}
		$processEntityCollection = \App::$domain->finance->process->all($query);
		$arrayForExcel = [];
		foreach($processEntityCollection as $processEntity) {
			$temp[] = $processEntity->document->name;
			$temp[] = $processEntity->operation->name;

			$temp[] = !empty($processEntity->organization) ? $processEntity->organization->name : '';

			$temp[] = $processEntity->amount;
			$temp[] = $processEntity->created_at;
			$arrayForExcel [] = $temp;
			$temp = [];
		}

		$file = \Yii::createObject([
			'class' => 'codemix\excelexport\ExcelFile',
			'sheets' => [

				'Result per Country' => [   // Name of the excel sheet
					'data' => $arrayForExcel,

					// Set to `false` to suppress the title row
					'titles' => [
						'document',
						'operation',
						'organization',
						'amount',
						'Created At',
					],

					'formats' => [
						// Either column name or 0-based column index can be used
						'C' => '#,##0.00',
						3 => 'dd/mm/yyyy hh:mm:ss',
					],

					'formatters' => [
						// Dates and datetimes must be converted to Excel format
						3 => function ($value, $row, $data) {
							return \PHPExcel_Shared_Date::PHPToExcel(strtotime($value));
						},
					],
				],

				'Countries' => [
					// Data for another sheet goes here ...
				],
			]
		]);
// Save on disk
//		$file->saveAs('/tmp/export.xlsx');
		return $file->send('report.xlsx');

	}

	public function actionGraph() {

		$data = \App::$domain->finance->process->all();
		$arrays = $this->calc($data);

		return $this->render('analyze', ['inCategoryWorst' => $arrays['inCategoryWorst'], 'inPeriodWorst' => $arrays['inPeriodWorst']]);

	}

	public function calc($data) {

		$entityCollection = ArrayHelper::toArray($data);
		$entityCollection = $this->setPeriod($entityCollection);

		$periodDictionary = [];
		$categoryDictionary = [];

		foreach($entityCollection as $columnNumber => $column) {
			if(!(in_array($column['period'], $periodDictionary))) {
				$periodDictionary[] = $column['period'];
			}
			if(!(in_array($column['operation'], $categoryDictionary))) {
				$categoryDictionary[] = $column['operation'];
			}
		}
		$searchCollections = new ArrayIterator;
		$searchCollections->setCollection($entityCollection);

		$inCategoryWorst = [];
		foreach($categoryDictionary as $currentCategory) {
			$query = Query::forge();
			$query->where('operation', $currentCategory);
			$assignments = $searchCollections->all($query);

			$inCategoryWorst[$currentCategory['name']] = $this->getWorstByPeriod($assignments);
		}

		$inPeriodWorst = [];
		foreach($periodDictionary as $currentPeriod) {
			$query = Query::forge();
			$query->where('period', $currentPeriod);
			$assignments = $searchCollections->all($query);
			$inPeriodWorst[$currentPeriod] = $this->getWorstByPeriod($assignments);
		}

		return ['inCategoryWorst' => $inCategoryWorst, 'inPeriodWorst' => $inPeriodWorst];
	}

	private function getWorstByPeriod($allByCertainSearch) {

		$worst = $allByCertainSearch[0];
		foreach($allByCertainSearch as $key => $entity) {

			if(!empty($allByCertainSearch[$key + 1])) {
				if($worst['amount'] < $allByCertainSearch[$key + 1]['amount']) {
					$worst = $allByCertainSearch[$key + 1];
				}
			}
		}
		return $worst;
	}

	private function setPeriod($entityCollection) {

		foreach($entityCollection as $key => $entity) {
			if(in_array($this->getMonth($entity), ['01', '02', '03'])) {
				$entity['period'] = 1;
			};
			if(in_array($this->getMonth($entity), ['04','05', '06'])) {
				$entity['period'] = 2;
			};
			if(in_array($this->getMonth($entity), ['07', '08', '09'])) {
				$entity['period'] = 3;
			};
			if(in_array($this->getMonth($entity), [ '10', '11', '12'])) {
				$entity['period'] = 4;
			};
			$entityCollection[$key] =  $entity;
		}
	return $entityCollection;
	}

	private function getMonth($entity) {
		$date = new \DateTime($entity['created_at']);
		$month = date_format($date, "m");
		return $month;
	}
	private function getYearMonth($entity) {
		$date = new \DateTime($entity['created_at']);
		$month = date_format($date, "y-m");
		return $month;
	}
}
