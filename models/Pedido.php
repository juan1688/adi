<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $pedido_id
 * @property integer $user_id
 * @property integer $platillo_id
 * @property string $fecha_pedido
 * @property integer $metodo_de_pago
 * @property integer $estatus_entrega
 * @property integer $estatus_pago
 * @property integer $estatus_cancelacion
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'platillo_id'], 'required'],
            [['user_id', 'platillo_id', 'metodo_de_pago', 'estatus_entrega', 'estatus_pago', 'estatus_cancelacion'], 'integer'],
            [['fecha_pedido'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pedido_id' => 'Pedido ID',
            'user_id' => 'User ID',
            'platillo_id' => 'Platillo ID',
            'fecha_pedido' => 'Fecha Pedido',
            'metodo_de_pago' => 'Metodo De Pago',
            'estatus_entrega' => 'Estatus Entrega',
            'estatus_pago' => 'Estatus Pago',
            'estatus_cancelacion' => 'Estatus Cancelacion',
        ];
    }
}
