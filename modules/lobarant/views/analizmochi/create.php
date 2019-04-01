<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizMochi */

$this->title = 'Create Analiz Mochi';
$this->params['breadcrumbs'][] = ['label' => 'Analiz Mochis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analiz-mochi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
