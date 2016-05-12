<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%product_color}}".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $code
 * @property string $base_url
 * @property string $path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ProductMaster $product
 */
class ProductColor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_color}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'code', 'path'], 'required'],
            [['product_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['code'], 'string', 'max' => 512],
            [['base_url', 'path'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('db', 'ID'),
            'product_id' => Yii::t('db', 'Product ID'),
            'code' => Yii::t('db', 'Code'),
            'base_url' => Yii::t('db', 'Base Url'),
            'path' => Yii::t('db', 'Path'),
            'status' => Yii::t('db', 'Status'),
            'created_at' => Yii::t('db', 'Created At'),
            'updated_at' => Yii::t('db', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ProductMaster::className(), ['id' => 'product_id']);
    }
}
