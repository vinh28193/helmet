<?php
namespace app\modules\manage\assets;

use yii\web\AssetBundle;

/**
 * Class Flot
 * @package app\modules\manage\assets
 */
class Flot extends AssetBundle
{
    public $sourcePath = '@bower/flot';
    public $js = [
        'jquery.flot.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
