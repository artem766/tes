<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;

use yii2lab\misc\yii\grid\TitleColumn;
use yii2lab\extension\web\grid\ActionColumn;
$this->title = Yii::t('finance/operation', 'list');

$baseUrl = $this->context->getBaseUrl();

$columns = [

	[
		'attribute' => 'operation',
		'label' => Yii::t('finance/process', 'description'),
		'content'=>function($data){
			return $data->operation == true ? 'Да' : 'Нет';
		}
	],
	[
		'attribute' => 'document',
		'label' => Yii::t('finance/process', 'description'),
		'content'=>function($data){
			return $data->document == true ? 'Да' : 'Нет';
		}
	],
	[
		'class' => ActionColumn::class,
		'template' => '{update} {delete}'
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>