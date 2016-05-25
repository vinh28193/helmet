<?php 
use yii\helpers\Html;
 ?>
      <div class="product">
         <div class="container">

            <div class="col-md-3 product-bottom ">
               <!--categories-->
               <div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
                  <h3>Categories</h3>
                  <ul class="cate">
                     <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Best Selling</a> <span>(15)</span></li>
                     <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Man</a> <span>(16)</span></li>
                     <ul>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Accessories</a> <span>(2)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Coats &amp; Jackets</a> <span>(5)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Jeans</a> <span>(1)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">New Arrivals</a> <span>(0)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Suits</a> <span>(1)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
                     </ul>
                     <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Sales</a> <span>(15)</span></li>
                     <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Woman</a> <span>(15)</span></li>
                     <ul>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Accessories</a> <span>(2)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">New Arrivals</a> <span>(0)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Dresses</a> <span>(1)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
                        <li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Shorts</a> <span>(4)</span></li>
                     </ul>
                  </ul>
               </div>
               <!--//menu-->
               
            </div>

            <div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
               
               <div class="col-md-5 grid-im">
                  <div class="flexslider">
                     <ul class="slides">
                        <?php foreach ($model->productColors as $product):?>
                        <?php echo Html::beginTag('li',['data-thumb' => '/stogares/'.$product->path]); ?>
                           <?php echo Html::beginTag('div',['class' => 'thumb-image']) ;?>
                              <?php echo Html::img('/stogares/'.$product->path,['data-imagezoom' => 'true','class' => 'img-responsive']) ?>
                           <?php echo Html::endTag('div'); ?>
                        <?php echo Html::endTag('li'); ?>
                        </li>
                     <?php endforeach; ?>
                     </ul>
                  </div>
               </div>
               <div class="col-md-7 single-top-in">
                  <div class="span_2_of_a1">
                     <?php echo Html::tag('h3',$model->title)?>
                     <?php echo Html::tag('p',$model->short_description,['class' => 'in-para'])?>
                     <?php echo Html::beginTag('div',['class' => 'price_single']) ;?>
                        <?php echo Html::tag('span','￥'.$model->price,['class' => 'reducedfrom item_price'])?>
                        <?php echo Html::tag('div','',['class' => 'clearfix'])?>
                     <?php echo Html::endTag('div'); ?>
                     <?php echo Html::tag('div','',['class' => 'clearfix'])?>
                  </div>

                  <div class="sap_tabs">
                     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                           <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
                           <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
                           <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                           <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2>
                           <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                              <div class="facts">
                                 <?=$model->description ?>
                              </div>
                           </div>
                           <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2>
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                              <div class="facts1">
                                 <div class="color">
                                    <p>Color</p>
                                    <span >Blue, Black, Red</span>
                                    <div class="clearfix"></div>
                                 </div>
                                 
                              </div>
                           </div>
                          
                        </div>
                     </div>
                     
                  </div>
            </div>
         </div>
      </div>
   </div>

      