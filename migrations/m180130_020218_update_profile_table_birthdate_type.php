<?php

use yii\db\Migration;

/**
 * Class m180130_020218_update_profile_table_birthdate_type
 */
class m180130_020218_update_profile_table_birthdate_type extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->alterColumn('profile','birthdate', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180130_020218_update_profile_table_birthdate_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180130_020218_update_profile_table_birthdate_type cannot be reverted.\n";

        return false;
    }
    */
}
