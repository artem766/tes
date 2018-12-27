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
		'attribute' => 'created_by',
		'label' => Yii::t('finance/process', 'created_by'),
		'content'=>function($data){
			return $data->created_by->login;
		}
	],
	[
		'attribute' => 'created_at',
		'label' => Yii::t('finance/process', 'created_at'),
	],
	[
		'attribute' => 'amount',
		'label' => Yii::t('finance/process', 'amount'),
	],
	[
		'attribute' => 'operation',
		'label' => Yii::t('finance/process', 'operation'),
		'content'=>function($data){
			return $data->operation->name;
		}
	],
	[
		'attribute' => 'document',
		'label' => Yii::t('finance/process', 'document'),
		'content'=>function($data){
			return $data->document->name;
		}
	],
    [
        'attribute' => 'organization',
        'label' => Yii::t('finance/process', 'organization'),
        'content'=>function($data){
            return !empty($data->organization) ? $data->organization->name : '-';
        }
    ],
	[
		'class' => ActionColumn::class,
		'template' => '{delete}'
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>