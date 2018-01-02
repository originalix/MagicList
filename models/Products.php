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
            ['category_id', 'required', 'message' => '类目id不能为空'],
            ['name', 'required', 'message' => '单品名称不能为空'],
            ['price', 'required', 'message' => '商品单价不能为空'],
            ['count', 'required', 'message' => '购买数量不能为空'],
            [['category_id', 'count', 'finish'], 'integer'],
            [['price'], 'number', 'min' => 0],
            [['count'], 'integer', 'min' => 1],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255, 'min' => 3],
        ];
    }

    public function validateAjax($data)
    {
        $this->category_id = intval($data['category_id']);
        $this->name = $data['name'];
        $this->price = doubleval($data['price']);
        $this->count = intval($data['count']);
    }
    
    public function createProducts($data)
    {
        $this->validateAjax($data);
        if ($this->validate()) {
            if ($this->save()) {
                return true;
            }
        }
        return false;
    }

    public function deleteById($id)
    {
        $model = Products::findOne($id);
        if ($model != NULL) {
            if ($model->delete()) {
                return true;
            }
        }

        return false;
    }

    public function edit($data)
    {
        $this->name = $data['name'];
        $this->price = doubleval($data['price']);
        $this->count = intval($data['count']);
        if ($this->validate()) {
            if ($this->save()) {
                return true;
            }
        }
        
        return false;
    }

    public static function getModelError($model) {
        $errors = $model->getErrors();    //得到所有的错误信息
        if(!is_array($errors)) return '';
        $firstError = array_shift($errors);
        if(!is_array($firstError)) return '';
        return array_shift($firstError);
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
