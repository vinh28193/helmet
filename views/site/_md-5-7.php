<?php 
use yii\bootstrap\Modal;
 ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
	    <div class="col-3">
	        <a href="single.html"><img src="/stogares/category/default.png" class="img-responsive " alt="">
	        <div class="col-pic">   
	            <h5><?=$category->title?></h5>
	            <p>At vero eos et accusamus et</p>
	        </div></a>
	    </div>
	    
	</div>
	<div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
	    <?php foreach ($products as $key => $product):?>
	            <div class="col-sm-4 item-grid simpleCart_shelfItem">
	                <div class="grid-pro" data-toggle="modal" data-target="#myModal-<?=$product->id?>">
	                    <div  class="grid-product " >
	                        <figure>        
	                            <!-- <a href="single.html">	                             -->
									<div class="grid-img">
	                                    <img  src="/stogares/<?=$product->thumbnail_path?>" class="img-responsive" alt="">
									</div>
	                            <!-- </a>         -->
	                        </figure>   
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