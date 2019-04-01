<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBlood */

$this->title = 'Qon to\'g\'risida malumotnoma';
$this->params['breadcrumbs'][] = ['label' => 'Analiz Bloods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analiz-blood-create">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
