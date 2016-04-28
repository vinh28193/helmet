<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductCategory */

$this->title = Yii::t('product_msg', 'Update {modelClass}: ', [
    'modelClass' => 'Product Category',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product_msg', 'Product Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('product_msg', 'Update');
?>
<div class="row">
    <div class="col-xs-12">
    	<div class="box box-primary">
			<?= $this->render('_form', [
		        'model' => $model,
		        'categories' => $categories,
		    ]) ?>
		</div><!-- /.box -->
    </div>
</div>
