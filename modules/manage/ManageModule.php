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
    public $controllerNamespace = 'app\modules\manage\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->layout = '@app/modules/manage/layouts/main.php';
        // custom initialization code goes here
    }
}
