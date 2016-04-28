<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "{{%product_category}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property integer $parent_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ProductCategory $parent
 * @property ProductCategory[] $productCategories
 * @property ProductMaster[] $productMasters
 */
class ProductCategory extends ActiveRecord
{
	const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_category}}';
    }

    /**
     * @inheritdoc
    */
    public function behaviors()
    {
        return [
            'timestamp' => [
            	'class' => TimestampBehavior::className(),
            	'createdAtAttribute' => 'created_at',
              	'updatedAtAttribute' => 'updated_at',
              	'value' => new Expression('NOW()'),
            ],
            'sluggable'=>[
                'class'=> SluggableBehavior::className(),
                'attribute'=>'title',
                'slugAttribute' => 'slug',
                'ensureUnique'=>true,
                'immutable'=>true
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\querys\ProductCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\querys\ProductCategoryQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'],
            [['parent_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 512],
            [['slug'], 'string', 'max' => 1024],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'parent_id' => Yii::t('db', 'Parent ID'),
            'status' => Yii::t('db', 'Status'),
            'created_at' => Yii::t('db', 'Created At'),
            'updated_at' => Yii::t('db', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategories()
    {
        return $this->hasMany(ProductCategory::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductMasters()
    {
        return $this->hasMany(ProductMaster::className(), ['category_id' => 'id']);
    }

	/**
     * get status label
     * @param bool $status default false if not set,return an array (0=無効 ,1=有効)
     * @return mixed|array 
     */
    public function getStatusLabels($status = false){
        $statusLabels = [
            self::STATUS_ACTIVE => Yii::t('db', 'Active'),
            self::STATUS_INACTIVE => Yii::t('db', 'Inactive')
        ];
        return $status ? ArrayHelper::getValue($statusLabels,$this->status) : $statusLabels;
    }
    
    /**
     *  get full name column with table name or not if not set tableName
     *  @param string $attribute
     *  @param string $tableName 
     *  @return string
     */
    public static function getColumn($attribute,$tableName = null)
    {
        return is_null($tableName) ? $attribute : $tableName. '.' .$attribute;
    }

    /**
     *  Quote Tabel Name will be replace pattern table prefix in tableName when use table name with prefix
     *  @param string $pattern if not set default '/{|{{|%|}|}}/'
     *  @return string 
     */
    public static function getQuoteTabelName($pattern = '/{|{{|%|}|}}/')
    {
        return preg_match($pattern,self::tableName()) ? preg_replace($pattern,'',self::tableName()) : self::tableName() ;
    }

    /**
     * Get all category order by parent/child with the space before child label
     * Usage: Category::collect();
     * @param int $parentId  parent category id
     * @param array $array  categorys array list
     * @param int $level  category level, will affect $repeat
     * @param int $add  category of $repeat
     * @param string $repeat  symbols or spaces to be added for sub catalog
     * @return array  category collections
     */
    static public function collect($categories = [], $activeId = null, $parent = null)
    {
        $categories = !empty($categories) ? $categories  : self::find()->isParent()->all();

        $menuItems = [];
        foreach ($categories as $key => $category) {
            if ($category->parent_id === $parent) {
                $items[$key] = [
                    'category' => count($category->categories),
                    'label' => $category->title,
                    'active' => $activeId === $category->id,
                    'url' => ['/site/category', 'slug' => $category->slug],
                     //'visible' => Yii::$app->user->isGuest,

                ];
                $subItems = self::collect($categories, $category->id, $category->parent_id);
                $menuItems[$key] = $subItems ? array_merge($items, ['items'=> $subItems]) : $items ;
            }
        }
        return $menuItems;
    }

}
