<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "{{%product_master}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string $view
 * @property string $short_description
 * @property string $description
 * @property string $thumbnail_base_url
 * @property string $thumbnail_path
 * @property integer $category_id
 * @property integer $author_id
 * @property integer $updater_id
 * @property integer $status
 * @property integer $published_at
 * @property integer $updated_at
 *
 * @property ProductComponent[] $productComponents
 * @property User $author
 * @property ProductCategory $category
 * @property User $updater
 */
class ProductMaster extends ActiveRecord
{
	const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
    * @var mixed thumbnail the attribute for rendering the file input
    * widget for upload on the form
    */
    public $thumbnail;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_master}}';
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
              	'updatedAtAttribute' => 'updated_at',
              	'value' => new Expression('NOW()'),
            ],
            'blameable'=>[
                'class'=> BlameableBehavior::className(),
                'createdByAttribute' => 'author_id',
                'updatedByAttribute' => 'updater_id',
            ],
            'slug'=>[
                'class'=> SluggableBehavior::className(),
                'attribute'=>'title',
                'ensureUnique'=>true,
                'immutable'=>true
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\querys\ProductMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\querys\ProductMasterQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'body'], 'required'],
            [['body', 'description'], 'string'],
            [['category_id', 'author_id', 'updater_id', 'status', 'published_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 512],
            [['slug', 'short_description', 'thumbnail_base_url', 'thumbnail_path'], 'string', 'max' => 1024],
            [['view'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['updater_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updater_id' => 'id']],
            [[ 'thumbnail'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('db', 'ID'),
            'title' => Yii::t('db', 'Title'),
            'slug' => Yii::t('db', 'Slug'),
            'body' => Yii::t('db', 'Body'),
            'view' => Yii::t('db', 'View'),
            'short_description' => Yii::t('db', 'Short Description'),
            'description' => Yii::t('db', 'Description'),
            'thumbnail_base_url' => Yii::t('db', 'Thumbnail Base Url'),
            'thumbnail_path' => Yii::t('db', 'Thumbnail Path'),
            'category_id' => Yii::t('db', 'Category ID'),
            'author_id' => Yii::t('db', 'Author ID'),
            'updater_id' => Yii::t('db', 'Updater ID'),
            'status' => Yii::t('db', 'Status'),
            'published_at' => Yii::t('db', 'Published At'),
            'updated_at' => Yii::t('db', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductComponents()
    {
        return $this->hasMany(ProductComponent::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdater()
    {
        return $this->hasOne(User::className(), ['id' => 'updater_id']);
    }
}
