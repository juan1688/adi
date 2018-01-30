<?php

use yii\db\Migration;

/**
 * Class m180128_025805_update_table_profile_remove_user_id
 */
class m180128_025805_update_table_profile_remove_user_id extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropColumn('profile','user_id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180128_025805_update_table_profile_remove_user_id cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180128_025805_update_table_profile_remove_user_id cannot be reverted.\n";

        return false;
    }
    */
}
