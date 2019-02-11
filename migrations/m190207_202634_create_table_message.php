<?php

use yii\db\Migration;

/**
 * Class m190207_202634_create_table_message
 */
class m190207_202634_create_table_message extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('message', [
            'id' => $this->primaryKey()->unsigned(),
            'from_user_id' => $this->integer()->unsigned()->notNull(),
            ''
        ])

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190207_202634_create_table_message cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190207_202634_create_table_message cannot be reverted.\n";

        return false;
    }
    */
}
