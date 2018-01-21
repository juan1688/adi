<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplies".
 *
 * @property integer $id
 * @property integer $dish_id
 * @property string $name
 * @property string $description
 */
class Supplies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dish_id'], 'required'],
            [['dish_id'], 'integer'],
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
            'dish_id' => 'Dish ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
