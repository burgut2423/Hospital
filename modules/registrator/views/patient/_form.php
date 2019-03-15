<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $model app\modules\registrator\model\Patient */
/* @var $form yii\widgets\ActiveForm*/
?>

<div class="patient-form">

    <?php $form=ActiveForm::begin(); ?>
    <div class="col-lg-4">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'midname')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'address')->textarea(['rows' => 4]) ?>
    </div>
    <div class="col-lg-4">
        <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'work_phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>

    </div>

        <?= $form->field($model, 'gender_id')->dropDownList(
            ArrayHelper::map(\app\models\Gender::find()->asArray()->all(), 'id', 'name')
        )->label(false) ?>
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>



</div>


    <?php ActiveForm::end(); ?>

</div>
