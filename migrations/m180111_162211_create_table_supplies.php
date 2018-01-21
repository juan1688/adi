<?php

use yii\db\Migration;

/**
 * Class m180111_162211_create_table_supplies
 */
class m180111_162211_create_table_supplies extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('supplies', [
            'id' => $this->primaryKey(),
            'dish_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('supplies');
        echo "tabla supplies eliminada.\n";
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180111_162211_create_table_supplies cannot be reverted.\n";

        return false;
    }
    */
}
