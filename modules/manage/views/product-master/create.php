<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */

$this->title = Yii::t('product_msg', 'Create Product Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('product_msg', 'Product Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

