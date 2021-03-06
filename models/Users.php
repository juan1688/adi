<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property integer $profile_id
 * @property string $nicename
 * @property string $email
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }


    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profile_id', 'created_at', 'updated_at'], 'integer'],
            [['nicename', 'email'], 'required'],
            [['deleted_at'], 'safe'],
            [['nicename', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'profile_id' => 'Profile ID',
            'nicename' => 'Nicename',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
