<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
  <div class="box-body">
   <div class="form-group">
        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>
   </div>
  </div><!-- /.box-body -->

  <div class="box-footer">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
  </div>
<?php ActiveForm::end(); ?>
