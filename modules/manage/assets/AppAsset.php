<?php
namespace app\modules\manage\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package app\modules\manage\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\modules\manage\assets\AdminLte',
        'app\modules\manage\assets\Html5shiv'
    ];
}
