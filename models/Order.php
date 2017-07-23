<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\widgets\DetailView;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $item
 * @property string $address
 * @property int $status
 * @property int $price
 * @property int $discount
 * @property string $discount_comment
 * @property string $userAgent
 * @property string $userHost
 * @property string $userIp
 * @property string $comment
 * @property string $createdAt
 * @property string $updatedAt
 */
class Order extends \yii\db\ActiveRecord
{
    const STATUS_NEW = 1;
    const STATUS_ACCEPTED = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_CANCELLED = 4;

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
            [['name', 'phone', 'item', 'address', 'status', 'price'], 'required'],
            [['item', 'status', 'price', 'discount'], 'integer'],
            [['discount_comment', 'userAgent', 'userHost', 'userIp', 'comment'], 'string'],
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
            'price' => 'Price',
            'discount' => 'Discount',
            'discount_comment' => 'Discount Comment',
            'userAgent' => 'User Agent',
            'userHost' => 'User Host',
            'userIp' => 'User Ip',
            'comment' => 'Comment',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'value' => gmdate('Y-m-d H:i:s'),
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt'
            ]
        ];
    }

    public function getItemName()
    {
        return Yii::$app->params['items'][$this->item]['name'];
    }

    public function getStatusName()
    {
        return self::statusNames()[$this->status];
    }

    public static function statusNames()
    {
        return [
            self::STATUS_NEW => 'Новый',
            self::STATUS_ACCEPTED => 'Принято',
            self::STATUS_DELIVERED => 'Доставлено',
            self::STATUS_CANCELLED => 'Отменено',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if ($insert) {
            Yii::$app->mailer->compose()
                ->setTo(Yii::$app->params['adminEmail'])
                ->setFrom(['info@baiu-bai.kz'])
                ->setSubject("Заказ №{$this->id}")
                ->setHtmlBody(DetailView::widget([
                    'model' => $this,
                    'attributes' => [
                        'name',
                        'phone',
                        'itemName',
                        'address',
                        'price',
                        'createdAt:dateTime',
                    ]
                ]))
                ->send();
        }
    }
}
