<?php

use yii\db\Migration;

/**
 * Class m180121_231402_create_table_profile
 */
class m180121_231402_create_table_profile extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('profile', [
            'profile_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'first_name' => $this->string(),
            'second_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->datetime(),
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
        echo "m180121_231402_create_table_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180121_231402_create_table_profile cannot be reverted.\n";

        return false;
    }
    */
}
