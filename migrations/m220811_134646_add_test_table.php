<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m220811_134646_add_test_table
 */
class m220811_134646_add_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220811_134646_add_test_table cannot be reverted.\n";
        $this->dropTable('news');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220811_134646_add_test_table cannot be reverted.\n";

        return false;
    }
    */
}
