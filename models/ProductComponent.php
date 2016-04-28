<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%product_component}}".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property integer $style
 * @property string $base_url
 * @property string $path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ProductMaster $product
 */
class ProductComponent extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_component}}';
    }

    /**
     * @inheritdoc
    */
    public function behaviors()
    {
        return [
            'timestamp' => [
            	'class' => TimestampBehavior::className(),
            	'createdAtAttribute' => 'published_at',
              	'updatedAtAttribute' => 'update_time',
              	'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'title'], 'required'],
            [['product_id', 'style', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 512],
            [['short_description'], 'string', 'max' => 1024],
            [['base_url', 'path'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMaster::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     * @return ProductComponentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductComponentQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('db', 'ID'),
            'product_id' => Yii::t('db', 'Product ID'),
            'title' => Yii::t('db', 'Title'),
            'short_description' => Yii::t('db', 'Short Description'),
            'description' => Yii::t('db', 'Description'),
            'style' => Yii::t('db', 'Style'),
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
