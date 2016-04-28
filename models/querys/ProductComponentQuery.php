<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ProductComponent]].
 *
 * @see ProductComponent
 */
class ProductComponentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductComponent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductComponent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
