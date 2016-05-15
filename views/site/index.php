<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

 ?>
    <?php foreach ($categories as $key => $category):?>
        <?php if($key%2==0): ?>     
                    <?php echo $this->render('_md-5-7',['category' => $category, 'products' => $category->productMasters]) ?>      
        <?php else: ?>
                    <?php echo $this->render('_md-7-5',['category' => $category, 'products' => $category->productMasters]) ?>
        <?php endif; ?>
    <?php endforeach; ?>            
                <!--products-->
<div class="social animated wow fadeInDown" data-wow-delay=".1s">
    <div class="container">
        
    </div>
</div>