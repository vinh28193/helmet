<?php 
use yii\helpers\Html;

$this->title = $model->title;
 ?>
      <div class="product">
         <div class="container">

            <div class="col-md-3 product-bottom ">
               <!--categories-->
               <!-- <div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
                  <?php echo Html::tag('h3','Categories')?>
                  <?php /*echo  echo Nav::widget([
                        'items' => $categories
                        'options' => ['class' =>'cate'], // set this to nav-tab to get tab-styled navigation
                  ]);*/ ?>
               <?php 
                  echo Html::beginTag('ul',['class' => 'cate']);
                     foreach ($categories as  $category){
                        echo Html::beginTag('li');
                        echo Html::tag('i','',['class' => 'glyphicon glyphicon-menu-right']);
                        echo Html::a($category->title,['#']);
                        echo ' ';
                        echo Html::tag('span','( ' .count($category->productMasters) . ' )');
                        echo Html::endTag('li');
                     }
                  echo Html::endTag('ul');
                  ?>
               </div> -->
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
                                    <span ><?php foreach ($model->productColors as $key =>$product) {
                                    	if ($key==0) {
                                    		echo $product->code;
                                    	}else{
                                    		echo " , ".$product->code;
                                    	}
                                    	
                                    } ?></span>
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
   <div style="margin-bottom:20px;">
   	
   </div>

      