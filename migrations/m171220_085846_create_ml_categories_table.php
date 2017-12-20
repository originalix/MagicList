<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ml_categories`.
 */
class m171220_085846_create_ml_categories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('ml_categories', [
            'id' => $this->primaryKey(),
            'uid' => $this->integer()->notNull()->defaultValue(0)->comment('用户id'),
            'name' => $this->string()->notNull()->defaultValue('')->comment('清单 类目名称'),
            'type_id' => $this->integer()->notNull()->comment('类型id, 为使用icon做区分'),
            'total_up' => $this->integer()->notNull()->defaultValue(0)->comment('清单总金额'),
            'created_time' => $this->dateTime()->comment('创建时间'),
            'updated_time' => $this->dateTime()->comment('更新时间'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('ml_categories');
    }
}
