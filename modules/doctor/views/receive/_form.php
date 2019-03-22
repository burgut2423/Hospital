<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Receive */
/* @var $form yii\widgets\ActiveForm */
?>
     <?php
     $patientname = \app\models\Visit::findOne(['id' => $_GET['visit_id']])->client->name;
     ?>
<div class="receive-form">   
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'visit_id')->hiddenInput(['value' => $_GET['visit_id']])->label(false) ?>
    
        <div class="col-md-3">
            <?= $form->field($model, 'complaint')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'amnesis_norby')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'ahvol')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'eye_status')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'auskultatsiya')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'xirillash')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'arterial_bosim_ong')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'arterial_bosim_chap')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'yurak_qis_soni')->textInput() ?>

            <?= $form->field($model, 'puls')->textInput() ?>

            <?= $form->field($model, 'fibrilyatsiya')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'shovqin')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'qorni')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'jigar')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'taloq')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'astsit')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'disease')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'disease_level')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-3">

            <?= $form->field($model, 'asorat')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'yuldosh')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'tavsiya')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'tili')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'receive_time')->hiddenInput(['value' => time()])->label(false) ?>

            <?= $form->field($model, 'doctor_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
              <div class="w3-animate-right">
            <?= Html::submitButton($model->isNewRecord ? 'Tastiqlash' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success flat' : 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
              </div>           
               
            
    
        </div>
    
</div>


