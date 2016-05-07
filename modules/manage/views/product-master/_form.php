<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\widgets\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */
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
        <?= $form->field($model, 'category_id',['feedbackIcon' => false])->widget(Select2::classname(), [
            'data' => ArrayHelper::map($categories, 'id', 'title'),
            'options' => ['prompt' => 'Root'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
        //->dropDownList(ArrayHelper::map($categories, 'id', 'title'), ['prompt' => 'Root']) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'short_description')->textInput(['maxlength' => true]) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'thumbnail_base_url')->textInput(['maxlength' => true]) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'thumbnail_path')->textInput(['maxlength' => true]) ?>
   	</div>
   	<div class="form-group">
    	<?= $form->field($model, 'category_id')->textInput() ?>
  	</div><!-- /.box-body -->

	  <div class="box-footer">
	    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['name' => 'create','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    <?= \app\modules\manage\widgets\PreviewWidget::widget([
	    		'dataUrl' => Url::to('/manage/product-master/preview'),
	    		'tableForm' => $form,
	    		'modelClass' => $model::className()
	    ])?>
	  </div>
<?php ActiveForm::end(); ?>