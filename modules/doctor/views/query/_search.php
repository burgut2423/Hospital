<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuerySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="query-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'visit_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'add_time') ?>

    <?= $form->field($model, 'reseive_time') ?>

    <?php // echo $form->field($model, 'resive_state') ?>

    <?php // echo $form->field($model, 'end_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
