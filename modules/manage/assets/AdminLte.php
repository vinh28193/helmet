<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 8/2/14
 * Time: 11:40 AM
 */

namespace app\modules\manage\assets;

use yii\web\AssetBundle;

class AdminLte extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte/dist';
    public $js = [
        'js/app.min.js',
    ];
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\modules\manage\assets\FontAwesome',
        'app\modules\manage\assets\JquerySlimScroll'
    ];
}
