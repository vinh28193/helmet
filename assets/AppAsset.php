<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/owl.carousel.css',
        'css/animate.min.css',
        'css/flexslider.css',
    ];
    public $js = [
        'js/jquery.flexisel.js',
        'js/owl.carousel.js',
        'js/wow.min.js',
        'js/script.js',
        'js/easyResponsiveTabs.js',
        'js/jquery.flexslider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
