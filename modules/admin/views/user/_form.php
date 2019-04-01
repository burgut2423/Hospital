<?php

use app\models\Receive;
use softark\duallistbox\DualListbox;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\User;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $query =Receive::find()->all();
    $items = ArrayHelper::map($query, 'id', 'visit_id');

    $selection = [
        2,
        4
    ];

    $options = [
        'multiple' => true,
        'size' => 20,
    ];

    echo $form->field($model, 'username')->widget(
        DualListbox::className(),[
            'selection' => $selection,
            'items' => $items,
            'options' => $options,
            'clientOptions' => [
                'moveOnSelect' => false,
                'selectedListLabel' => 'Selected Items',
                'nonSelectedListLabel' => 'Available Items',
            ],
        ]
    );


    ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'upadated_at')->textInput() ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
