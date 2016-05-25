<?php 
use yii\helpers\Html;
use app\widgets\tinybox\TinyBox;
 ?>
<div class="content-top">                    
    <div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
        <?php foreach ($products as $key => $product):?>
                <div class="col-sm-4 item-grid">
                    <div class="grid-pro">
                        <div  class="grid-product">
                            <?php 
                                echo Html::a(Html::img('/stogares/'.$product->thumbnail_path,['class' => 'img-responsive']),['site/view','id' => $product->id],['class'=>"grid-img"])
                             ?>
                                    
                        </div>
                        <div class="women">
                            <h6><a href="single.html"><?=$product->title?></a></h6>
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