<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */

$this->title = "Bemor $model->name ni ma'lumotlari";
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-view panel ">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
            'options'=>[
                    'class'=>'table table-bordered bg-green text-left',
            ],
        'model' => $model,
        'attributes' => [
            'id',
            'surname',
            'name',
            'midname',
            'birth_date',
            'home_phone',
            'work_phone',
            [
                    'label'=>'Address',
                    'value'=>$model->getAddress()->one()->name.','.$model->getDirection()->one()->name.','.$model->address,
            ],
            'work_place',
                 [
                     'label'=>'Jinsi',
                      'attribute'=>'sex',
                'value'=>function($model){
                 $jinsi =\app\models\Jinsi::findOne(['id'=>$model->sex]);
                 return $jinsi->type;
                }

                  ],
        ],
    ]) ?>
       <div class="panel col-md-4">

               <?= Html::a('<i class="fa fa-edit"></i> Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
               <?= Html::a('<i class="fa fa-trash"></i> O\'chirish', ['delete', 'id' => $model->id], [
                   'class' => 'btn btn-danger btn-flat',
                   'data' => [
                       'confirm' => 'xaqiqatdan xam delete qilasizmi',
                       'method' => 'post',
                   ],
               ]) ?>

               <?php
               $use = \app\models\Myusers::getRole(3);
               ?>
               <?php $form =\yii\widgets\ActiveForm::begin()?>

               <?= $form->field($use,'id')->dropDownList(
                   \yii\helpers\ArrayHelper::map(\app\models\Myusers::find()->where(['role'=>$use->role])->asArray()->all(),'id','name')
               )->label("Doctor qabuliga yozish")?>
               <?=$form->field($model,'id')->textInput()->hiddenInput()->label(false)?>
               <div class="text-center">
                   <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary btn-flat text-center', 'name' => 'login-button']) ?>
               </div>
               <?php \yii\widgets\ActiveForm::end()?>



       </div>


</div>
