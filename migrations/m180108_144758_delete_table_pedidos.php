<?php

use yii\db\Migration;

/**
 * Class m180108_144758_delete_table_pedidos
 */
class m180108_144758_delete_table_pedidos extends Migration
{
    /**
     * @inheritdoc
     */
    public function Up()
    {
        $this->dropTable('pedidos');
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        $this->createTable('pedidos', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
        echo "m180108_144758_delete_table_pedidos fue creada nuevamente.\n";
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_144758_delete_table_pedidos cannot be reverted.\n";

        return false;
    }
    */
}
