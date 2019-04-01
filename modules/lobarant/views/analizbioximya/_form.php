<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBioximya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="analiz-bioximya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'visit_id')->textInput() ?>

    <?= $form->field($model, 'sana')->textInput() ?>

    <?= $form->field($model, 'palata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qon_qand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'siyd_qand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umum_oqsil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mochevina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kreatinin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bilirubin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umumiy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'boglangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'erkin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diastoza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moch_kislota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kaliy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kalsiy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'natriy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_reak_belok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jelezo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xoleterin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laborant_id')->textInput() ?>

    <?= $form->field($model, 'direction')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
