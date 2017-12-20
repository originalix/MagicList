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
            'uid' => $this->integer()->notNull()->defaultValue(0),
            'name' => $this->string()->notNull()->defaultValue(''),
            'type_id' => $this->integer()->notNull(),
            'total_up' => $this->integer()->notNull()->defaultValue(0),
            'created_time' => $this->dateTime(),
            'updated_time' => $this->dateTime(),
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
