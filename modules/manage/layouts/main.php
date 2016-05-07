<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\modules\manage\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<?= Html::beginTag('html',['lang' => Yii::$app->language])?>
<?= Html::beginTag('head')?>
    <?= Html::tag('meta',false,['charset' => Yii::$app->charset])?>
    <?= Html::tag('meta',false,['name'=>'viewport','content'=>'width=device-width, initial-scale=1'])?>
    <?= Html::csrfMetaTags() ?>
    <?= (isset($this->title) || $this->title = '') ?  Html::tag('title',Html::encode(implode(" | ", [Yii::$app->name,$this->title]))) : Html::tag('title',Yii::$app->name)?>
    <?php $this->head() ?>
<?= Html::endTag('head') ?>
<?= Html::beginTag('body', [
    'class' => 'hold-transition skin-blue sidebar-mini'
])?>
<?php $this->beginBody() ?>

<?= Html::beginTag('div',['class' => 'wrap'])?>
    <?= $this->render('partial/header');?>
    <!-- Left side column. contains the logo and sidebar -->
    <?= $this->render('partial/main-sidebar');?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <?= Html::beginTag('aside',['class' => 'content-wrapper'])?>
        <!-- Content Header (Page header) -->
        <?= Html::beginTag('section',['class' => 'content-header'])?>
            <?= Html::tag('h1',implode(" ", [$this->title, isset($this->params['subtitle']) ? Html::tag('small',$this->params['subtitle']) : " "]))?>
            <?= Breadcrumbs::widget([
                'tag'=>'ol',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        <?= Html::endTag('section') ?>

            <!-- Main content -->
        <?= Html::beginTag('section',['class' => 'content'])?>
            <?= Yii::$app->session->hasFlash('alert') ? \yii\bootstrap\Alert::widget([
                    'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                    'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                ]) : "";?>
            <?= $content ?>
        <?= Html::endTag('section') ?><!-- /.content -->
    <?= Html::endTag('aside') ?><!-- /.right-side -->
<?= Html::endTag('div') ?>
<?= $this->render('partial/footer');?>

<?php $this->endBody() ?>
<?= Html::endTag('body') ?>

<?php $this->endPage() ?>
<?= Html::endTag('html') ?>