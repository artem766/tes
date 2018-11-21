<?php

namespace backend\modules\reports\controllers;

use domain\v1\finance\forms\DocumentForm;
use domain\v1\finance\forms\ProcessForm;
use domain\v1\finance\forms\search\ProcessSearch;
use domain\v1\finance\helpers\DateTimeHelper;
use mdm\admin\models\User;
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

		$file = \Yii::createObject([
			'class' => 'codemix\excelexport\ExcelFile',
			'sheets' => [

				'Result per Country' => [   // Name of the excel sheet
					'data' => [
						['fr', 'France', 1.234, '2014-02-03 12:13:14'],
						['de', 'Germany', 2.345, '2014-02-05 19:18:39'],
						['uk', 'United Kingdom', 3.456, '2014-03-03 16:09:04'],
					],

					// Set to `false` to suppress the title row
					'titles' => [
						'Code',
						'Name',
						'Volume',
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
		return $file->send('export.xlsx');

 }

}
