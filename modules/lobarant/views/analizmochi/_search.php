<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizMochiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="analiz-mochi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'visit_id') ?>

    <?= $form->field($model, 'sana') ?>

    <?= $form->field($model, 'muassasa') ?>

    <?= $form->field($model, 'bulim') ?>

    <?php // echo $form->field($model, 'palata') ?>

    <?php // echo $form->field($model, 'uchastok') ?>

    <?php // echo $form->field($model, 'varaqa') ?>

    <?php // echo $form->field($model, 'miqdori') ?>

    <?php // echo $form->field($model, 'rangi') ?>

    <?php // echo $form->field($model, 'tiniqligi') ?>

    <?php // echo $form->field($model, 'nisb_zichligi') ?>

    <?php // echo $form->field($model, 'reaksiyasi') ?>

    <?php // echo $form->field($model, 'oqsil') ?>

    <?php // echo $form->field($model, 'oqsil_gl') ?>

    <?php // echo $form->field($model, 'oqsil_gp') ?>

    <?php // echo $form->field($model, 'glyukoza') ?>

    <?php // echo $form->field($model, 'glyukoza_ml') ?>

    <?php // echo $form->field($model, 'glyukoza_gp') ?>

    <?php // echo $form->field($model, 'keton') ?>

    <?php // echo $form->field($model, 'qon_reak') ?>

    <?php // echo $form->field($model, 'bilirubin') ?>

    <?php // echo $form->field($model, 'urobilinoidlar') ?>

    <?php // echo $form->field($model, 'ot_kislota') ?>

    <?php // echo $form->field($model, 'indikan') ?>

    <?php // echo $form->field($model, 'ep_yassi') ?>

    <?php // echo $form->field($model, 'ep_utuvchi') ?>

    <?php // echo $form->field($model, 'ep_buyrak') ?>

    <?php // echo $form->field($model, 'ep_leykositlar') ?>

    <?php // echo $form->field($model, 'er_uzgarmagan') ?>

    <?php // echo $form->field($model, 'er_uzgargan') ?>

    <?php // echo $form->field($model, 's_gizlinli') ?>

    <?php // echo $form->field($model, 's_donador') ?>

    <?php // echo $form->field($model, 's_mumsimon') ?>

    <?php // echo $form->field($model, 's_piteliol') ?>

    <?php // echo $form->field($model, 's_leykositlar') ?>

    <?php // echo $form->field($model, 's_pigmentli') ?>

    <?php // echo $form->field($model, 's_shilliq') ?>

    <?php // echo $form->field($model, 's_tuzlar') ?>

    <?php // echo $form->field($model, 's_bakteriyalar') ?>

    <?php // echo $form->field($model, 'laborant_id') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
