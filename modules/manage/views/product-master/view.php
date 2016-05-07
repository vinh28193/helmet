<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product_msg', 'Product Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('product_msg', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('product_msg', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('product_msg', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'body:ntext',
            'view',
            'short_description',
            'description:ntext',
            'thumbnail_base_url:url',
            'thumbnail_path',
            'category_id',
            'author_id',
            'updater_id',
            'status',
            'published_at',
            'updated_at',
        ],
    ]) ?>

</div>
