<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $id
 * @property string $username 用户名
 * @property string $password 密码
 * @property string $access_token 登录令牌
 * @property string $qq_account qq账号
 * @property string $created_time 创建时间
 * @property string $updated_time 更新时间
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['created_time', 'updated_time'], 'safe'],
            [['username', 'password', 'access_token', 'qq_account'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'access_token' => '登录令牌',
            'qq_account' => 'qq账号',
            'created_time' => '创建时间',
            'updated_time' => '更新时间',
        ];
    }
}
