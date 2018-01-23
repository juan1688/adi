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
        $this->dropTable('users');
        $this->createTable('users', [
            'user_id' => $this->primaryKey(),
            'nicename' => $this->string()->notNull(),
            'email' => $this->string(255)->notNull(),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
            'deleted_at' => $this->datetime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('users');
        echo "m180121_223143_create_table_users table deleted.\n";
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
