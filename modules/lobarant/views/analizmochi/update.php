<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizMochi */

$this->title = 'Update Analiz Mochi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Analiz Mochis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="analiz-mochi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
