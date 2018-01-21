<?php

use yii\db\Migration;

/**
 * Class m180108_144939_create_table_pedidos
 */
class m180108_144939_create_table_pedidos extends Migration
{
    /**
     * @inheritdoc
     */
    public function Up()
    {
        $this->createTable('pedidos', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'dish_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        $this->dropTable('pedidos');
        echo "m180108_144939_create_table_pedidos tabla pedidos fue eliminada.\n";
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_144939_create_table_pedidos cannot be reverted.\n";

        return false;
    }
    */
}
