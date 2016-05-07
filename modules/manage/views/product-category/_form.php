<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\Select2;
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

  <?php $form = ActiveForm::begin([
      'id' => 'product-category-form',
      'options' => ['class' => 'box-body'],
      'type' => ActiveForm::TYPE_HORIZONTAL,
      'formConfig' => [
          'labelSpan' => 1,
          'deviceSize' => ActiveForm::SIZE_MEDIUM,
          'showLabels' => true,
          'showErrors' => true,
          'showHints' => true
      ],
      'fieldConfig' => [
          'feedbackIcon' => [
              'default' => 'pencil',
              'success' => 'ok',
              'error' => 'exclamation-sign',
              'defaultOptions' => ['class'=>'text-primary']
          ],
          /*'addon' => [
              'prepend' => [
                'content' => '<i class="glyphicon glyphicon-phone"></i>'
              ]
          ]*/
      ]
  ]); ?>
  <div class="box-body">
   <div class="form-group">
        <?= $form->field($model, 'parent_id',['feedbackIcon' => false])->widget(Select2::classname(), [
            'data' => ArrayHelper::map($categories, 'id', 'title'),
            'options' => ['prompt' => 'Root'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
        //->dropDownList(ArrayHelper::map($categories, 'id', 'title'), ['prompt' => 'Root']) ?>
   </div>
   <div class="form-group">
        <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>
   </div>
  </div><!-- /.box-body -->

  <div class="box-footer">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['name' => 'create','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end(); ?>
