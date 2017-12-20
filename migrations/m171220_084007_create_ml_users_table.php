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
            'username' => $this->string()->notNull()->comment('用户名'),
            'password' => $this->string()->notNull()->comment('密码'),
            'authKey' => $this->string()->comment('登录令牌'),
            'qq_account' => $this->string()->comment('qq账号'),
            'created_at' => $this->dateTime()->comment('创建时间'),
            'updated_at' => $this->dateTime()->comment('更新时间'),
        ]);

        $this->insert('ml_users', [
            'username' => 'admin',
            'password' => '123',
            'authKey' => '',
            'qq_account' => '',
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
