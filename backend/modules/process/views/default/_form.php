<?php
/**
 * @var $this yii\web\View
 * @var $model yii\base\Model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii2mod\markdown\MarkdownEditor;

?>

<?php $form = ActiveForm::begin(); ?>
<div class="">
	<?= $form->field($model, 'document')->dropDownList(\App::$domain->finance->document->getDataForList()); ?>
	<?= $form->field($model, 'operation')->dropDownList(\App::$domain->finance->operation->getDataForList()); ?>
</div>


<div class="form-group">
	<?= Html::submitButton(Yii::t('action', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
