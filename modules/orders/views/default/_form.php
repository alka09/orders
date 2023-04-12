<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\orders\models\Status;

/** @var yii\web\View $this */
/** @var app\modules\orders\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
/** @var app\modules\orders\models\Status $statusModel*/
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_name')->textInput(['maxlength' => true]) ?>

    <?php
    $statuses = Status::find()->all();
    $items = \yii\helpers\ArrayHelper::map($statuses, 'id', 'status_name');
        $params = [
            'prompt' => 'Выберите статус заказа'
        ];
    ?>

    <?= $form->field($model, 'status_id')->dropDownList($items, $params) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
