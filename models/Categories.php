<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%categories}}".
 *
 * @property int $id
 * @property int $uid 用户id
 * @property string $name 清单 类目名称
 * @property int $type_id 类型id, 为使用icon做区分
 * @property int $total_up 清单总金额
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'type_id', 'total_up'], 'integer'],
            [['type_id'], 'required'],
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
            'uid' => '用户id',
            'name' => '清单 类目名称',
            'type_id' => '类型id, 为使用icon做区分',
            'total_up' => '清单总金额',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
