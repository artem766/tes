<?php
/**
 * @var $this yii\web\View
 * @var $model yii\base\Model
 */

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

$foreignOperations = \App::$domain->finance->operation->foreignList();
$ids = [];
if (!empty($foreignOperations))
	foreach ($foreignOperations as $operation) {
		$ids[] = $operation->id;
	}
?>

<?php $form = ActiveForm::begin(); ?>
    <div class="">
		<?= $form->field($model, 'document')->dropDownList(\App::$domain->finance->document->arrayList()); ?>

		<?= $form->field($model, 'operation')->dropDownList(\App::$domain->finance->operation->arrayList()); ?>
    </div>

    <div class="form-group">
		<?= Html::submitButton(Yii::t('action', 'save'), ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
<?php
$this->registerJs('var ids = ' . json_encode($ids),View::POS_HEAD);
$this->registerJsFile('/js/main.js' );