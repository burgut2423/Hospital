<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizMochi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="analiz-mochi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'visit_id')->textInput() ?>

    <?= $form->field($model, 'sana')->textInput() ?>

    <?= $form->field($model, 'muassasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'palata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uchastok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'varaqa')->textInput() ?>

    <?= $form->field($model, 'miqdori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rangi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiniqligi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nisb_zichligi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reaksiyasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqsil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqsil_gl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqsil_gp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'glyukoza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'glyukoza_ml')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'glyukoza_gp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keton')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qon_reak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bilirubin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urobilinoidlar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ot_kislota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ep_yassi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ep_utuvchi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ep_buyrak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ep_leykositlar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_uzgarmagan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_uzgargan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_gizlinli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_donador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_mumsimon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_piteliol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_leykositlar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_pigmentli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_shilliq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_tuzlar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_bakteriyalar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laborant_id')->textInput() ?>

    <?= $form->field($model, 'direction')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
