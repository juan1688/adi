<?php

use yii\db\Migration;

/**
 * Class m171216_012732_create_table_assets
 */
class m171216_012732_create_table_assets extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('assets', [
            'id' => $this->primaryKey(),
            'brand_id' => $this->integer(),
            'name' => $this->string(),
            'description' => $this->text(),
            'tags' => $this->string(),
            'category' => $this->string(),
            'image' => $this->string(),
            'created_at' => $this->dateTime(),
            'deleted_at' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('assets');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171216_012732_create_table_assets cannot be reverted.\n";

        return false;
    }
    */
}
