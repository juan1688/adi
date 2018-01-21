<?php

use yii\db\Migration;

/**
 * Class m180108_051115_create_table_dishes
 */
class m180108_051115_create_table_dishes extends Migration
{
    /**
     * @inheritdoc
     */
    public function Up()
    {
        $this->createTable('dishes', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        $this->dropTable('dishes');
        echo "m180108_051115_create_table_dishes tabla eliminada.\n";
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_051115_create_table_dishes cannot be reverted.\n";

        return false;
    }
    */
}
