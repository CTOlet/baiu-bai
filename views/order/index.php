<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            'phone',
            [
                'attribute' => 'item',
                'value' => 'itemName',
                'filter' => \yii\helpers\ArrayHelper::map(Yii::$app->params['items'], 'id', 'name')
            ],
            'address',
            [
                'attribute' => 'status',
                'value' => 'statusName',
                'filter' => \app\models\Order::statusNames()
            ],
            'price:currency',
            'discount:currency',
            // 'discount_comment:ntext',
            // 'userAgent:ntext',
            // 'userHost:ntext',
            // 'userIp:ntext',
            'comment:ntext',
            'createdAt:dateTime',
            'updatedAt:dateTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'rowOptions' => function ($model) {
            switch ($model->status) {
                case \app\models\Order::STATUS_NEW:
                    return [];
                case \app\models\Order::STATUS_ACCEPTED:
                    return ['class' => 'info'];
                case \app\models\Order::STATUS_DELIVERED:
                    return ['class' => 'success'];
                case \app\models\Order::STATUS_CANCELLED:
                    return ['class' => 'danger'];
            }
        }
    ]); ?>
</div>
