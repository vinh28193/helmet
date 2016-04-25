<?php
namespace app\modules\manage\assets;

use yii\web\AssetBundle;

/**
 * Class Html5shiv
 * @package app\modules\manage\assets
 */
class Html5shiv extends AssetBundle
{
    public $sourcePath = '@bower/html5shiv';
    public $js = [
        'dist/html5shiv.min.js'
    ];

    public $jsOptions = [
        'condition'=>'lt IE 9'
    ];
}
