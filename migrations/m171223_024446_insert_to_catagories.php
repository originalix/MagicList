<?php

use yii\db\Migration;

/**
 * Class m171223_024446_insert_to_catagories
 */
class m171223_024446_insert_to_catagories extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('ml_categories', [
            'uid' => 1,
            'name' => '硬装',
            'type_id' => 2,
            'total_up' => 8888,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('ml_categories', [
            'uid' => 1,
            'name' => '软装',
            'type_id' => 3,
            'total_up' => 50210,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('ml_categories', [
            'uid' => 1,
            'name' => '数码',
            'type_id' => 4,
            'total_up' => 123013,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('ml_categories', [
            'uid' => 1,
            'name' => '显示器',
            'type_id' => 5,
            'total_up' => 1599,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('ml_categories', [
            'uid' => 1,
            'name' => '机械键盘',
            'type_id' => 6,
            'total_up' => 2150,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171223_024446_insert_to_catagories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171223_024446_insert_to_catagories cannot be reverted.\n";

        return false;
    }
    */
}
