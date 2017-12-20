<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ml_users`.
 */
class m171220_084007_create_ml_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('ml_users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'access_token' => $this->string(),
            'qq_account' => $this->string(),
            'created_time' => $this->dateTime(),
            'updated_time' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('ml_users');
    }
}
