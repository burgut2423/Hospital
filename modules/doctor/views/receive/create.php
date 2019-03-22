<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Receive */

$this->title = 'Umimiy axvolini kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Receives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receive-create w3-table w3-animate-zoom  w3-card-24 w3-silver">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
