<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property integer $user_id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $avatar_base_url
 * @property string $avatar_path
 * @property string $locale
 * @property integer $gender
 *
 * @property User $user
 */
class UserProfile extends ActiveRecord
{
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 0;

    public $picture;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'gender'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['gender'], 'in', 'range'=>[NULL, self::GENDER_FEMALE, self::GENDER_MALE]],
            [['firstname', 'middlename', 'lastname', 'avatar_path', 'avatar_base_url'], 'string', 'max' => 255],
            ['locale', 'default', 'value' => Yii::$app->language],
            //['locale', 'in', 'range' => array_keys(Yii::$app->params['availableLocales'])],
            ['picture', 'safe']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('db', 'User ID'),
            'firstname' => Yii::t('db', 'Firstname'),
            'middlename' => Yii::t('db', 'Middlename'),
            'lastname' => Yii::t('db', 'Lastname'),
            'avatar_base_url' => Yii::t('db', 'Avatar Base Url'),
            'avatar_path' => Yii::t('db', 'Avatar Path'),
            'locale' => Yii::t('db', 'Locale'),
            'gender' => Yii::t('db', 'Gender'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Returns user genders list
     * @param mixed $gender
     * @return array|mixed
     */
    public static function getStatuses($gender = false)
    {
        $gendersLabels = [
            self::GENDER_MALE => Yii::t('db', 'Male'),
            self::GENDER_FEMALE => Yii::t('db', 'Female')
        ];
        return $gender ? ArrayHelper::getValue($statusLabels, $this->gender) : $gendersLabels;
    }
    public function getFullName()
    {
        if ($this->firstname || $this->lastname) {
            return implode(' ', [$this->firstname, $this->lastname]);
        }
        return null;
    }

    public function getAvatar($default = null)
    {
        return '/'. Yii::getAlias($this->avatar_path ? implode('/',[$this->avatar_base_url, $this->avatar_path]) : $default);
    }
}
