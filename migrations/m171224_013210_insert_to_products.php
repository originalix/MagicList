<?php

use yii\db\Migration;

/**
 * Class m171224_013210_insert_to_products
 */
class m171224_013210_insert_to_products extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171224_013210_insert_to_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171224_013210_insert_to_products cannot be reverted.\n";

        return false;
    }
    */
}
