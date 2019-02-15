<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-form">

    <?php $form = ActiveForm::begin(
            [
                    'options'=>['class'=>'']
            ]
    ); ?>

    <div class="col-md-4">
        <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'midname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'birth_date')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'home_phone')->textInput(['maxlength' => true])?>
        <?= $form->field($model, 'sex')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Jinsi::find()->asArray()->all(),'id','type'   )
        ) ?>
    </div>

   <div class="col-md-4">
       <?= $form->field($model, 'work_phone')->textInput(['maxlength' => true]) ?>
       <?= $form->field($model, 'work_place')->textInput(['maxlength' => true])?>
       <?= $form->field($model, 'region_id')->dropDownList(
               \yii\helpers\ArrayHelper::map(\app\models\Region::find()->asArray()->all(),'id','name')
       )?>
       <?= $form->field($model, 'district_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\District::find()->asArray()->all(),'id','name')) ?>
       <?= $form->field($model, 'address')->textarea(['maxlength' => true])->label(false) ?>

          <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Saqlash' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success  btn-flat' : 'btn btn-primary']) ?>
          <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-xing"></i> Bekor qilish</button>
          <a href="/registrator" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Orqaga</a>

   </div>
   <div class="col-md-4">
         <div class="row">
             <img src="/hospital/doctor1.png" alt="" width="320" height="320" class="menu-open" >
         </div>
   </div>
    <?php ActiveForm::end(); ?>

</div>
