

<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\registrator\model\Patient */
/* @var $visit app\modules\registrator\model\Visit */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view w3-animate-right">

    <h1> Bemor ismi :<?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('yangilash', ['value' => \yii\helpers\Url::to('/registrator/patient/update?id=' . $model->id), 'class' => 'btn btn-success flat', 'id' => 'UpdatePatient']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>


        <?php
        Modal::begin([
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        echo "<div id='modalUpdate'></div>";
        Modal::end();
        ?>

    </p>

    <?php $form = \yii\widgets\ActiveForm::begin() ?>
    <?= $form->field($visit, 'client_id')->hiddenInput(['value' => $model->id])->label(false) ?>
    <?= $form->field($query, 'user_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \app\models\User::find()->where(['role' => 2])->asArray()->all(), 'id', 'username'
    ))->label('Kimni qabuliga yozish') ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success flat']) ?>
    <?php \yii\widgets\ActiveForm::end() ?>
</div>



