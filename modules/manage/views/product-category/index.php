<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\manage\models\ProductCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('product_msg', 'Product Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">

            <div class="box-header">
				<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
        
            <!-- /.box-header -->
            <div class="box-body">
            <?php Pjax::begin(); ?>    
				<?= GridView::widget([
				'id' => 'product-cate',
			    'dataProvider'=>$dataProvider,
			    'filterModel'=>$searchModel,
			    'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
			    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
			    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
			    'pjax'=>true, // pjax is set to always true for this demo
			    // set your toolbar
			    'panel'=>[
			        'type'=>GridView::TYPE_PRIMARY,
			        'heading'=>false,
			    ],
			    'toolbar'=> [
			        ['content'=>
			            Html::a('<i class="glyphicon glyphicon-plus"></i>',['create'], ['title'=> Yii::t('product_msg', 'Add').' '. $this->title, 'class'=>'btn btn-success']) . ' '.
			            Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], ['data-pjax'=>0, 'class'=>'btn btn-default', 'title'=>Yii::t('product_msg', 'Reset Grid')])
			        ],
			        '{export}',
			        '{toggleData}',
			    ],
			    // set export properties
			    'export'=>[
			        'fontAwesome'=>true
			    ],
			    // parameters from the demo form
			    //'bordered'=>$bordered,
			    //'striped'=>$striped,
			    //'condensed'=>$condensed,
			    //'responsive'=>$responsive,
			    //'hover'=>$hover,
			    //'showPageSummary'=>$pageSummary,
			    'columns'=>[
			    	[
					    'class'=>'kartik\grid\SerialColumn',
					    'contentOptions'=>['class'=>'kartik-sheet-style'],
					    'width'=>'36px',
					    'header'=>'',
					    'headerOptions'=>['class'=>'kartik-sheet-style']
					],
					'parent_id',
					'title',
					[
					    'class'=>'kartik\grid\ActionColumn',
					    'dropdown'=> false,
					    'urlCreator'=>function($action, $model, $key, $index) { 
					    	return Url::to([$action,'id' => $key]);
					    },
					    'viewOptions'=>['title'=>Yii::t('product_msg', 'View Product Categories'), 'data-toggle'=>'tooltip' ,'class'=> 'btn btn-default'],
					    'updateOptions'=>['title'=>Yii::t('product_msg', 'Update Product Categories'), 'data-toggle'=>'tooltip' ,'class'=> 'btn btn-primary'],
					    'deleteOptions'=>['title'=>Yii::t('product_msg', 'Delete Product Categories'), 'data-toggle'=>'tooltip' ,'class'=> 'btn btn-success'],
					    'headerOptions'=>['class'=>'kartik-sheet-style'],
					],
					[
					    'class'=>'kartik\grid\CheckboxColumn',
					    'headerOptions'=>['class'=>'kartik-sheet-style'],
					],

			    ],
			]); ?>
			<?php Pjax::end(); ?>
            </div><!-- /.box-body -->
            <!--
            <div class="box-footer"></div>
            -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->