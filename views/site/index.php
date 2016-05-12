<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

 ?>
    <?php foreach ($categories as $key => $category):?>        
            
                <div class="content-top">
                    <?php echo $this->render('_md-5',['category' => $category]) ?>
                    <?php echo $this->render('_md-7',['products' => $category->productMasters]) ?>      
                </div>
    <?php endforeach; ?>

                <div class="content-top">
                    
                    <div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
                        <div class="col-sm-4 item-grid simpleCart_shelfItem">
                            <div class="grid-pro">
                                <div  class=" grid-product " >
                                    <figure>        
                                        <a href="single.html">
                                            <div class="grid-img">
                                                <img  src="images/pr6.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="images/pr7.jpg" class="img-responsive"  alt="">
                                            </div>          
                                        </a>        
                                    </figure>   
                                </div>
                                <div class="women">
                                    <a href="#"><img src="images/ll.png" alt=""></a>
                                    <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                    <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                    <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                                </div>
                            </div>
                            
                        </div>
                
                        <div class="col-sm-4 item-grid simpleCart_shelfItem">
                            <div class="grid-pro">
                                <div  class=" grid-product " >
                                    <figure>        
                                        <a href="single.html">
                                            <div class="grid-img">
                                                <img  src="images/pr9.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="images/pr8.jpg" class="img-responsive"  alt="">
                                            </div>          
                                        </a>        
                                    </figure>   
                                </div>
                                <div class="women">
                                    <a href="#"><img src="images/ll.png" alt=""></a>
                                    <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                    <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                    <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 item-grid simpleCart_shelfItem">
                        <div class="grid-pro">
                                <div  class=" grid-product " >
                                    <figure>        
                                        <a href="single.html">
                                            <div class="grid-img">
                                                <img  src="images/pr10.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="images/pr11.jpg" class="img-responsive"  alt="">
                                            </div>          
                                        </a>        
                                    </figure>   
                                </div>
                                <div class="women">
                                    <a href="#"><img src="images/ll.png" alt=""></a>
                                    <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                    <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                    <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                    <div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
                        <div class="col-3">
                            <a href="single.html"><img src="images/pi2.jpg" class="img-responsive " alt="">
                            <div class="col-pic">
                                <h5> Men's Wear</h5>
                                <p>At vero eos et accusamus et</p>
                            </div></a>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            
            
                <!--products-->
<div class="social animated wow fadeInDown" data-wow-delay=".1s">
    <div class="container">
        <div class="col-sm-3 social-ic">
            <a href="#">FACEBOOK</a>
        </div>
        <div class="col-sm-3 social-ic">
            <a href="#">TWITTER</a>
        </div>
        <div class="col-sm-3 social-ic">
            <a href="#">GOOGLE+</a>
        </div>
        <div class="col-sm-3 social-ic">
            <a href="#">PINTEREST</a>
        </div>
    <div class="clearfix"></div>
    </div>
</div>