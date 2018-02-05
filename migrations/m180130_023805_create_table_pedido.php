<?php

use yii\db\Migration;

/**
 * Class m180130_023805_create_table_pedido
 */
class m180130_023805_create_table_pedido extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropTable('pedidos');
        $this->dropTable('dishes');
        $this->dropTable('company');
        $this->dropTable('companies');
        $this->dropTable('brands');
        $this->dropTable('assets');
        $this->dropTable('supplies');
        $this->createTable('pedido', [
            'pedido_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'platillo_id' => $this->integer()->notNull(),
            'fecha_pedido' => $this->text(),
            'metodo_de_pago' => $this->integer(),
            'estatus_entrega' => $this->integer(),
            'estatus_pago' => $this->integer(),
            'estatus_cancelacion' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('pedido');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180130_023805_create_table_pedido cannot be reverted.\n";

        return false;
    }
    */
}
