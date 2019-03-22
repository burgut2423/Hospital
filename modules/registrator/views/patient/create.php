<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\registrator\model\Patient */

$this->title = 'Anketa';
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-create no-padding" id ="create">
    <div class="w3-container w3-teal">
         <h4><?=Html::encode($this->title)?></h4>
    </div>
     <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
