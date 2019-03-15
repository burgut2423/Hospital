<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceiveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receive-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'visit_id') ?>

    <?= $form->field($model, 'complaint') ?>

    <?= $form->field($model, 'amnesis_norby') ?>

    <?= $form->field($model, 'ahvol') ?>

    <?php // echo $form->field($model, 'eye_status') ?>

    <?php // echo $form->field($model, 'auskultatsiya') ?>

    <?php // echo $form->field($model, 'xirillash') ?>

    <?php // echo $form->field($model, 'arterial_bosim_ong') ?>

    <?php // echo $form->field($model, 'arterial_bosim_chap') ?>

    <?php // echo $form->field($model, 'yurak_qis_soni') ?>

    <?php // echo $form->field($model, 'puls') ?>

    <?php // echo $form->field($model, 'fibrilyatsiya') ?>

    <?php // echo $form->field($model, 'shovqin') ?>

    <?php // echo $form->field($model, 'tili') ?>

    <?php // echo $form->field($model, 'qorni') ?>

    <?php // echo $form->field($model, 'jigar') ?>

    <?php // echo $form->field($model, 'taloq') ?>

    <?php // echo $form->field($model, 'astsit') ?>

    <?php // echo $form->field($model, 'disease') ?>

    <?php // echo $form->field($model, 'disease_level') ?>

    <?php // echo $form->field($model, 'asorat') ?>

    <?php // echo $form->field($model, 'yuldosh') ?>

    <?php // echo $form->field($model, 'tavsiya') ?>

    <?php // echo $form->field($model, 'receive_time') ?>

    <?php // echo $form->field($model, 'doctor_id') ?>

    <?php // echo $form->field($model, 'receive_state') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
