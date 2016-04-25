<?php
namespace app\modules\manage\assets;

use yii\web\AssetBundle;

/**
 * Class JquerySlimScroll
 * @package app\modules\manage\assets
 */
class JquerySlimScroll extends AssetBundle
{
    public $sourcePath = '@bower/jquery-slimscroll';
    public $js = [
        'jquery.slimscroll.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
