<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Receive */

$this->title = 'Update Receive: ' . $model->visit->client->name;
$this->params['breadcrumbs'][] = ['label' => 'Receives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="receive-update w3-animate-zoom">
    <?= $this->render('_myform', [
        'model' => $model,
    ]) ?>

</div>
