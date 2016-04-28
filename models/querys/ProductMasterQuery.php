<?php

namespace app\models\querys;

/**
 * This is the ActiveQuery class for [[\app\models\ProductMaster]].
 *
 * @see \app\models\ProductMaster
 */
class ProductMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\ProductMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\ProductMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
