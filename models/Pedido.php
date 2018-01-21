<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $dish_id
 * @property string $name
 * @property string $description
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'dish_id'], 'required'],
            [['user_id', 'dish_id'], 'integer'],
            [['description'], 'string'],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
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
            'user_id' => 'User ID',
            'dish_id' => 'Dish ID',
            'date' => 'Fecha',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
