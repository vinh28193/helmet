<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */

$this->title = Yii::t('product_msg', 'Update {modelClass}: ', [
    'modelClass' => 'Product Master',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product_msg', 'Product Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('product_msg', 'Update');
?>
<div class="product-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
