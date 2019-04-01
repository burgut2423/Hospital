<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBloodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="analiz-blood-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'visit_id') ?>

    <?= $form->field($model, 'bulim') ?>

    <?= $form->field($model, 'palata') ?>

    <?= $form->field($model, 'wbc') ?>

    <?php // echo $form->field($model, 'lymph') ?>

    <?php // echo $form->field($model, 'mid') ?>

    <?php // echo $form->field($model, 'gran') ?>

    <?php // echo $form->field($model, 'lymph_p') ?>

    <?php // echo $form->field($model, 'mid_p') ?>

    <?php // echo $form->field($model, 'gran_p') ?>

    <?php // echo $form->field($model, 'pal') ?>

    <?php // echo $form->field($model, 'seg') ?>

    <?php // echo $form->field($model, 'eozinofid') ?>

    <?php // echo $form->field($model, 'bazofid') ?>

    <?php // echo $form->field($model, 'monozit') ?>

    <?php // echo $form->field($model, 'hgb') ?>

    <?php // echo $form->field($model, 'rbc') ?>

    <?php // echo $form->field($model, 'hct') ?>

    <?php // echo $form->field($model, 'mcv') ?>

    <?php // echo $form->field($model, 'mch') ?>

    <?php // echo $form->field($model, 'mchc') ?>

    <?php // echo $form->field($model, 'rdwcv') ?>

    <?php // echo $form->field($model, 'rdwsd') ?>

    <?php // echo $form->field($model, 'plt') ?>

    <?php // echo $form->field($model, 'mpv') ?>

    <?php // echo $form->field($model, 'pdw') ?>

    <?php // echo $form->field($model, 'pct') ?>

    <?php // echo $form->field($model, 'coe') ?>

    <?php // echo $form->field($model, 'morf_erit') ?>

    <?php // echo $form->field($model, 'morf_leyk') ?>

    <?php // echo $form->field($model, 'sana') ?>

    <?php // echo $form->field($model, 'laborant_id') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
