<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductCategory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product_msg', 'Product Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Main content -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
               <?=Html::a('<i class="glyphicon glyphicon-arrow-left"></i> '.Html::encode('Back '), ['index'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>'Back']) ?>
            </div><!-- /.box-header -->
            <div class="box-body">

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'parent_id',
                        'title',
                        'slug',
                        ],
                    ]) ?>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <div class="form-group">
                    <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> '.Html::encode('Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('<i class="glyphicon glyphicon-trash"></i> '.Html::encode('Delete'), ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete '.Html::encode($model->id).' ?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
