<?php 
use yii\helpers\Html;
?>
<div class="col-md-9 animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
   <div class="col-md-5 grid-im">
      <div class="flexslider">
         <div class="flex-viewport" style="overflow: hidden; position: relative;">
            <ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-608px, 0px, 0px);">
               <li data-thumb="/stogares/product/thumb-product.png" class="clone" aria-hidden="true" style="width: 304px; float: left; display: block;">
                  <div class="thumb-image"> <img src="/stogares/product/thumb-product.png" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
               </li>
               <li data-thumb="/stogares/product/thumb-product.png" class="" style="width: 304px; float: left; display: block;">
                  <div class="thumb-image"> <img src="/stogares/product/thumb-product.png" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
               </li>
               <li data-thumb="/stogares/product/thumb-product.png" class="flex-active-slide" style="width: 304px; float: left; display: block;">
                  <div class="thumb-image"> <img src="/stogares/product/thumb-product.png" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
               </li>
               <li data-thumb="/stogares/product/thumb-product.png" class="" style="width: 304px; float: left; display: block;">
                  <div class="thumb-image"> <img src="/stogares/product/thumb-product.png" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
               </li>
               <li data-thumb="/stogares/product/thumb-product.png" class="clone" aria-hidden="true" style="width: 304px; float: left; display: block;">
                  <div class="thumb-image"> <img src="/stogares/product/thumb-product.png" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
               </li>
            </ul>
         </div>
         <ol class="flex-control-nav flex-control-thumbs">
            <li><img src="/stogares/product/thumb-product.png" class="" draggable="false"></li>
            <li><img src="/stogares/product/thumb-product.png" draggable="false" class="flex-active"></li>
            <li><img src="/stogares/product/thumb-product.png" draggable="false" class=""></li>
         </ol>
         <ul class="flex-direction-nav">
            <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
         </ul>
      </div>
   </div>
   <div class="col-md-7 single-top-in">
      <div class="span_2_of_a1 simpleCart_shelfItem">
         <h3>Nam liber tempor cum</h3>
         <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
         <div class="price_single">
            <span class="reducedfrom item_price">$140.00</span>
            <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"> </div>
      </div>
      <!----- tabs-box ---->
      <div class="sap_tabs">
         <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
               <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
               <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
               <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
               <div class="clearfix"></div>
            </ul>
            <div class="resp-tabs-container">
               <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product DescriptionProduct Description</h2>
               <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2>
               <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                  <div class="facts">
                     <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                     <ul>
                        <li>Research</li>
                        <li>Design and Development</li>
                        <li>Porting and Optimization</li>
                        <li>System integration</li>
                        <li>Verification, Validation and Testing</li>
                        <li>Maintenance and Support</li>
                     </ul>
                  </div>
               </div>
               <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Additional InformationReviews</h2>
               <h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h2>
               <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                  <div class="facts1">
                     <div class="color">
                        <p>Color</p>
                        <span>Blue, Black, Red</span>
                        <div class="clearfix"></div>
                     </div>
                     <div class="color">
                        <p>Size</p>
                        <span>S, M, L, XL</span>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <h2 class="resp-accordion" role="tab" aria-controls="tab_item-4"><span class="resp-arrow"></span>Reviews</h2>
               <h2 class="resp-accordion" role="tab" aria-controls="tab_item-5"><span class="resp-arrow"></span></h2>
               <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                  <div class="comments-top-top">
                     <div class="top-comment-left">
                        <img class="img-responsive" src="images/co.png" alt="">
                     </div>
                     <div class="top-comment-right">
                        <h6><a href="#">Hendri</a> - September 3, 2014</h6>
                        <p>Wow nice!</p>
                     </div>
                     <div class="clearfix"> </div>
                     <a class="add-re" href="single.html">Add Review</a>
                  </div>
               </div>
            </div>
         </div>
         <!---->
      </div>
   </div>
   <?php 
$script = <<<JS
   $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
    $(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });
	});
JS;
$this->registerJs($script);
?>