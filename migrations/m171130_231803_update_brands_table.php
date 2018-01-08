<?php

use yii\db\Migration;

/**
 * Class m171130_231803_update_brands_table
 */
class m171130_231803_update_brands_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('brands',
            'parent_id', $this->integer()
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('brands',
            'parent_id'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171130_231803_update_brands_table cannot be reverted.\n";

        return false;
    }
    */
}
