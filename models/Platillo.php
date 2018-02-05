<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "platillo".
 *
 * @property integer $platillo_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $imagen
 * @property string $precio
 */
class Platillo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'platillo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['descripcion'], 'string'],
            [['precio'], 'number'],
            [['imagen'], 'file'],
            [['nombre','imagen'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'platillo_id' => 'Platillo ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'imagen' => 'Imagen',
            'precio' => 'Precio',
        ];
    }
}
