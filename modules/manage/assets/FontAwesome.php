<?php
namespace app\modules\manage\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesome
 * @package app\modules\manage\assets
 */
class FontAwesome extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css'
    ];
}
