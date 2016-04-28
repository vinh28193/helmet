<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
  <div class="box-body">
   <div class="form-group">
        <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map($categories, 'id', 'title'), ['prompt' => 'Root']) ?>
   </div>
   <div class="form-group">
        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>
   </div>
  </div><!-- /.box-body -->

  <div class="box-footer">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['name' => 'create','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end(); ?>
