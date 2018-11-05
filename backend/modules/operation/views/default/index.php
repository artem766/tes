<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;
use yii2lab\misc\yii\grid\ActionColumn;
use yii2lab\misc\yii\grid\TitleColumn;

$this->title = Yii::t('finance/operation', 'list');

$baseUrl = $this->context->getBaseUrl();

$columns = [

	[
		'attribute' => 'name',
		'label' => Yii::t('finance/operation', 'name'),
	],
	[
		'attribute' => 'isForeign',
		'label' => Yii::t('finance/operation', 'isForeign'),
		'content'=>function($data){
			return $data->isForeign == true ? 'Да' : 'Нет';
		}
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>