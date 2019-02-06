<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clients */

$this->title = 'Bemorlarni ro\'yxatga olish';
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-create ">

    <h1 class="text-bold  text-justify"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
