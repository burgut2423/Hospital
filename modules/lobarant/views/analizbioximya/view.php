<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBioximya */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Analiz Bioximyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="analiz-bioximya-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'visit_id',
            'sana',
            'palata',
            'bulim',
            'qon_qand',
            'siyd_qand',
            'umum_oqsil',
            'alat',
            'asat',
            'mochevina',
            'kreatinin',
            'bilirubin',
            'umumiy',
            'boglangan',
            'erkin',
            'diastoza',
            'moch_kislota',
            'kaliy',
            'kalsiy',
            'natriy',
            'c_reak_belok',
            'jelezo',
            'xoleterin',
            'laborant_id',
            'direction',
        ],
    ]) ?>

</div>
