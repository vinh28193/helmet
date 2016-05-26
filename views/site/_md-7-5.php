<?php 
use yii\helpers\Html;
use yii\bootstrap\Modal;
 ?>
<div class="content-top">                    
    <div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
        <?php foreach ($products as $key => $product):?>
                <div class="col-sm-4 item-grid">
                    <div class="grid-pro">
                        <div  class="grid-product">
                            <figure>  
                                <?php 
                                    echo Html::a(Html::img('/stogares/'.$product->thumbnail_path,['class' => 'img-responsive']),['site/view','id' => $product->id],['class'=>"grid-img"])
                                 ?>
                            </figure>
                        </div>
                        <div class="women">
                            <h6><?php  echo Html::a($product->title,['site/view','id' => $product->id]) ?></h6>
                            <p ><em class="item_price">$<?=$product->price?></em></p>
                            <!-- <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a> -->
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                    <div class="clearfix"></div>
                    </div>
                    <div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
        <div class="col-3">
            <a href="single.html"><img src="/stogares/category/default.png" class="img-responsive " alt="">
            <div class="col-pic">   
                <h5><?=$category->title?></h5>
            </div></a>
        </div>
        
    </div>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<?php foreach ($products as $key => $product):?>
<?php 
Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'id'=>'myModal-'.$product->id,
    'size' => Modal::SIZE_LARGE,
]);
    echo $this->render('view',['a'=>$product->id]);
Modal::end();
 ?>
 <?php endforeach; ?>