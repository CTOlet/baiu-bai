<?php

namespace app\models;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $item
 * @property string $address
 * @property int $status
 * @property string $userAgent
 * @property string $userHost
 * @property string $userIp
 * @property string $comment
 * @property string $createdAt
 * @property string $updatedAt
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'item', 'address', 'status', 'createdAt', 'updatedAt'], 'required'],
            [['item', 'status'], 'integer'],
            [['userAgent', 'userHost', 'userIp', 'comment'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'item' => 'Item',
            'address' => 'Address',
            'status' => 'Status',
            'userAgent' => 'User Agent',
            'userHost' => 'User Host',
            'userIp' => 'User Ip',
            'comment' => 'Comment',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
