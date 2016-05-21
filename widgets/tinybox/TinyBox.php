<?php

namespace app\widgets\tinybox;


use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\widgets\tinybox\TinyBoxAsset;
use yii\helpers\Json;

class TinyBox extends Widget
{
    public $tag = "button";
    public $tagLabel = "Button Label";
    public $tagOptions = [];
    public $url;
    public $clientOptions = [];

    public function init(){
        $this->registerAssets();
    }
    public function run()
    {
        ArrayHelper::remove($this->tagOptions,'id');
        $tagOptions = ArrayHelper::merge(['class' => 'btn btn-simple', 'id' => $this->id], $this->tagOptions);
        return $this->tag === 'a' ? Html::a($this->tagLabel,$this->url,$tagOptions) : Html::tag($this->tag, $this->tagLabel, $tagOptions);
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        TinyBoxAsset::register($view);
        $clientOptions = ['width' => 750, 'height' => 700];
        if (isset($this->url)) $clientOptions['iframe'] = $this->url;
        $clientOptions = Json::encode(ArrayHelper::merge($clientOptions, $this->clientOptions), JSON_UNESCAPED_SLASHES);

        $js = <<<JS
$("#{$this->id}").on("click", function() {
    TINY.box.show({$clientOptions});
});
JS;
        $view->registerJs($js);
    }
}