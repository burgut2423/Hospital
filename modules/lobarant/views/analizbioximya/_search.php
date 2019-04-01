<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBioximyaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="analiz-bioximya-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'visit_id') ?>

    <?= $form->field($model, 'sana') ?>

    <?= $form->field($model, 'palata') ?>

    <?= $form->field($model, 'bulim') ?>

    <?php // echo $form->field($model, 'qon_qand') ?>

    <?php // echo $form->field($model, 'siyd_qand') ?>

    <?php // echo $form->field($model, 'umum_oqsil') ?>

    <?php // echo $form->field($model, 'alat') ?>

    <?php // echo $form->field($model, 'asat') ?>

    <?php // echo $form->field($model, 'mochevina') ?>

    <?php // echo $form->field($model, 'kreatinin') ?>

    <?php // echo $form->field($model, 'bilirubin') ?>

    <?php // echo $form->field($model, 'umumiy') ?>

    <?php // echo $form->field($model, 'boglangan') ?>

    <?php // echo $form->field($model, 'erkin') ?>

    <?php // echo $form->field($model, 'diastoza') ?>

    <?php // echo $form->field($model, 'moch_kislota') ?>

    <?php // echo $form->field($model, 'kaliy') ?>

    <?php // echo $form->field($model, 'kalsiy') ?>

    <?php // echo $form->field($model, 'natriy') ?>

    <?php // echo $form->field($model, 'c_reak_belok') ?>

    <?php // echo $form->field($model, 'jelezo') ?>

    <?php // echo $form->field($model, 'xoleterin') ?>

    <?php // echo $form->field($model, 'laborant_id') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
