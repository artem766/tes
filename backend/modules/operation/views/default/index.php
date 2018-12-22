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
		'attribute' => 'name',
		'label' => Yii::t('finance/operation', 'name'),
	],
	[
		'attribute' => 'description',
		'label' => Yii::t('finance/operation', 'description'),
	],
	[
        'attribute' => 'isForeign',
        'label' => Yii::t('finance/operation', 'isForeign'),
        'content'=>function($data){
            return $data->isForeign == true ? 'Да' : 'Нет';
        }
    ],
    [
        'attribute' => 'isIncome',
        'label' => Yii::t('finance/operation', 'isIncome'),
        'content'=>function($data){
            return $data->isIncome == true ? 'Да' : 'Нет';
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
<?php prr($baseUrl,1,1);?>
<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>