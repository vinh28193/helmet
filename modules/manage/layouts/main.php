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
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php echo Html::beginTag('body', [
    'class' => 'hold-transition skin-blue sidebar-mini'
])?>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $this->render('partial/header');?>
    <!-- Left side column. contains the logo and sidebar -->
    <?= $this->render('partial/main-sidebar');?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $this->title ?>
                <?php if (isset($this->params['subtitle'])): ?>
                    <small><?php echo $this->params['subtitle'] ?></small>
                <?php endif; ?>
            </h1>

            <?php echo Breadcrumbs::widget([
                'tag'=>'ol',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>

            <!-- Main content -->
        <section class="content">
            <?php if (Yii::$app->session->hasFlash('alert')):?>
                <?php echo \yii\bootstrap\Alert::widget([
                    'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                    'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                ])?>
            <?php endif; ?>
            <?php echo $content ?>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div>
<?= $this->render('partial/footer');?>

<?php $this->endBody() ?>
<?php echo Html::endTag('body') ?>
</html>
<?php $this->endPage() ?>