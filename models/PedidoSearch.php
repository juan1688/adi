<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedido;

/**
 * PedidoSearch represents the model behind the search form about `app\models\Pedido`.
 */
class PedidoSearch extends Pedido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pedido_id', 'user_id', 'platillo_id', 'metodo_de_pago', 'estatus_entrega', 'estatus_pago', 'estatus_cancelacion'], 'integer'],
            [['fecha_pedido'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pedido::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pedido_id' => $this->pedido_id,
            'user_id' => $this->user_id,
            'platillo_id' => $this->platillo_id,
            'metodo_de_pago' => $this->metodo_de_pago,
            'estatus_entrega' => $this->estatus_entrega,
            'estatus_pago' => $this->estatus_pago,
            'estatus_cancelacion' => $this->estatus_cancelacion,
        ]);

        $query->andFilterWhere(['like', 'fecha_pedido', $this->fecha_pedido]);

        return $dataProvider;
    }
}
