<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dishes".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dishes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Platillo',
            'description' => 'Description',
        ];
    }
}
