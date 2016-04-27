<?php

namespace app\modules\manage;

use Yii;
use yii\base\Module;
/**
 * manage module definition class
 */
class ManageModule extends Module
{
    /**
     * @inheritdoc
     */
    public $layout = '@app/modules/manage/layouts/main.php';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\manage\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->on(self::EVENT_BEFORE_ACTION,[$this,'loginRequite']);
        // custom initialization code goes here
    }

    public function loginRequite(){
        return true;
    }
}
