<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property int $id
 * @property int $category_id 类目id
 * @property string $name 单品名称
 * @property double $price 单价
 * @property int $count 购买数量
 * @property int $finish 是否完成采购
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'count', 'finish'], 'integer'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => '类目id',
            'name' => '单品名称',
            'price' => '单价',
            'count' => '购买数量',
            'finish' => '是否完成采购',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
