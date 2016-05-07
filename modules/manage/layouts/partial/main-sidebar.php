<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\modules\manage\widgets\AdminLTEMenu;
/* @var $this \yii\web\View */
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                 <?= Html::img(Yii::$app->user->identity->userProfile->getAvatar('stogares/user/default.jpg'))?>
                </div>
                <div class="pull-left info">
                 <?= Html::tag('p',Yii::$app->user->identity->getPublicIdentity())?>
                 <?= Html::a('<i class="fa fa-circle text-success"></i> '.Yii::$app->formatter->asDatetime(time()))?>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php echo AdminLTEMenu::widget([
                'options'=> ['class'=>'sidebar-menu'],
                'linkTemplate' => '<a href="{url}">{icon}<span>{label}</span>{right-icon}{badge}</a>',
                'submenuTemplate'=>"\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
                'activateParents'=>true,
                'items'=> [
                    [
                        'label'=>'Main',
                        'options' => ['class' => 'header']
                    ],
                    [
                        'label'=>'Content',
                        'url' => '#',
                        'icon'=>'<i class="fa fa-edit"></i>',
                        'options'=>['class'=>'treeview'],
                        'items'=>[
                            ['label'=>'Static pages', 'url'=>['/page/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                            
                        ]
                    ],

                    [
                        'label'=>'System',
                        'options' => ['class' => 'header']
                    ],
                ]
            ]) ?>
    </section>
    <!-- /.sidebar -->
</aside>