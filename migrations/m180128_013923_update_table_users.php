<?php

use yii\db\Migration;

/**
 * Class m180128_013923_update_table_users
 */
class m180128_013923_update_table_users extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
            $this->addColumn('users', 'profile_id', $this->integer()->after('user_id'));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180128_013923_update_table_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180128_013923_update_table_users cannot be reverted.\n";

        return false;
    }
    */
}
