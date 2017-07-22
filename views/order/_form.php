<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '+7(799)999-99-99'
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'item')->dropDownList(\yii\helpers\ArrayHelper::map(Yii::$app->params['items'], 'id', 'name')) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'status')->dropDownList(\app\models\Order::statusNames()) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'price')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'discount')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'discount_comment')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'comment')->textInput() ?>
    </div>
    <div class="col-md-6">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
