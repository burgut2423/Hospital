<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBioximya */

$this->title = 'Create Analiz Bioximya';
$this->params['breadcrumbs'][] = ['label' => 'Analiz Bioximyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analiz-bioximya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
