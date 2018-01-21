<?php

use yii\db\Migration;

/**
 * Class m180121_223143_create_table_users
 */
class m180121_223143_create_table_users extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180121_223143_create_table_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180121_223143_create_table_users cannot be reverted.\n";

        return false;
    }
    */
}
