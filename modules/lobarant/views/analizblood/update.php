<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBlood */

$this->title = 'Update Analiz Blood: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Analiz Bloods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="analiz-blood-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
