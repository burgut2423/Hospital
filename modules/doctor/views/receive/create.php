<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Receive */

$this->title = 'Umimiy axvolini kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Receives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receive-create">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
