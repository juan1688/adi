<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m171128_210758_create_company_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'brand_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('company');
    }
}
