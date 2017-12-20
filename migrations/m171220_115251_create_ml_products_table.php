<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ml_products`.
 */
class m171220_115251_create_ml_products_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('ml_products', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull()->comment('类目id'),
            'name' => $this->string()->notNull()->defaultValue('')->comment('单品名称'),
            'price' => $this->double()->notNull()->defaultValue(0.0)->comment('单价'),
            'count' => $this->integer()->notNull()->defaultValue(0)->comment('购买数量'),
            'finish' => $this->boolean()->notNull()->defaultValue(false)->comment('是否完成采购'),
            'created_at' => $this->dateTime()->comment('创建时间'),
            'updated_at' => $this->dateTime()->comment('更新时间'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('ml_products');
    }
}
