<?php

/* @var $this yii\web\View */

use kartik\daterange\DateRangePicker;
use yii\grid\GridView;
use yii\helpers\Html;

use yii2lab\misc\yii\grid\TitleColumn;
use yii2lab\extension\web\grid\ActionColumn;
$this->title = Yii::t('finance/reports', 'list');
$baseUrl = $this->context->getBaseUrl();

$columns = [
	[
		'attribute' => 'operation',
		'label' => Yii::t('finance/reports', 'operation'),
		'content'=>function($data){
			return $data->operation->name;
		},
		'filter' => \App::$domain->finance->operation->arrayList()
	],
	[
		'attribute' => 'document',
		'label' => Yii::t('finance/reports', 'document'),
		'content'=>function($data){
			return $data->document->name;
		},
		'filter' => \App::$domain->finance->document->arrayList()
	],
    [
		'attribute' => 'organization',
		'label' => Yii::t('finance/reports', 'organization'),
		'content'=>function($data){
			return !empty($data->organization) ? $data->organization->name : '-';
		},
		'filter' => \App::$domain->finance->organization->arrayList()
	],

	[
		'attribute' => 'created_at',
		'label' => Yii::t('finance/reports', 'to'),
		'format'    => ['datetime', 'php:Y.m.d H:i:s'],
		'value'     => function ($model) {
			return $model->created_at;
		},
		'filter'     => DateRangePicker::widget([
			'model'         => $searchModel,
			'attribute'     => 'created_at',
			'convertFormat' => true,
			'startAttribute'=>'datetime_start',
			'endAttribute'  =>'datetime_end',
			'presetDropdown'=> true,
			'pluginOptions' => [
				'locale' => [
					'format' => 'Y.m.d H:i:s'
				],
			],
		])
	],
	[
		'class' => ActionColumn::class,
		'template' => '{delete}'
	],
];

?>


<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'filterModel' => $searchModel,
	'layout' => '{summary}{items}{pager}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>