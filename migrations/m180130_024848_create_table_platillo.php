<?php

use yii\db\Migration;

/**
 * Class m180130_024848_create_table_platillo
 */
class m180130_024848_create_table_platillo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('platillo', [
            'platillo_id' => $this->primaryKey(),
            'nombre' => $this->string()->notNull(),
            'descripcion' => $this->text(),
            'imagen' => $this->text(),
            'precio' => $this->decimal()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180130_024848_create_table_platillo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180130_024848_create_table_platillo cannot be reverted.\n";

        return false;
    }
    */
}
