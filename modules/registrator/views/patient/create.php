<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\registrator\model\Patient */

$this->title = 'Create Patient';
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-create" id ="create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
