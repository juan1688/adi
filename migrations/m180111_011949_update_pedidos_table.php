<?php

use yii\db\Migration;

/**
 * Class m180111_011949_update_pedidos_table
 */
class m180111_011949_update_pedidos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('pedidos', 'date', $this->date()->after('id'));

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('pedidos', 'date');
        echo "m180111_011949_update_pedidos_table columna pedidos eliminada.\n";
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180111_011949_update_pedidos_table cannot be reverted.\n";

        return false;
    }
    */
}
