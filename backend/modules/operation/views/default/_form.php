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


<?= $form->field($model, 'name')->textInput(); ?>

<?= $form->field($model, 'description')->textInput(); ?>

<?= $form->field($model, 'isForeign')->checkbox(); ?>

<?= $form->field($model, 'isIncome')->radioList([0=>'Убыль', 1=>'Доход']); ?>

<div class="form-group">
	<?= Html::submitButton(Yii::t('action', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
