<?php

namespace app\widgets\tinybox;


use yii\web\AssetBundle;

class TinyBoxAsset extends AssetBundle
{
    public $sourcePath = "@app/widgets/tinybox/assets";
    public $js = [
        'tinybox.js',
        'init.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\JqueryAsset'
    ];
}