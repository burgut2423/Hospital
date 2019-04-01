<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBlood */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Analiz Bloods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="analiz-blood-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'visit_id' => $model->visit_id], ['class' => 'btn btn-primary']) ?>
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
        'options' => [
            'class' => 'table w3-table-all w3-card-16 detail-view ',
        ],
        'attributes' => [
            'bulim',
            'palata',
            'wbc',
            'lymph',
            'mid',
            'gran',
            'lymph_p',
            'mid_p',
            'gran_p',
            'pal',
            'seg',
            'eozinofid',
            'bazofid',
            'monozit',
            'hgb',
            'rbc',
            'hct',
            'mcv',
            'mch',
            'mchc',
            'rdwcv',
            'rdwsd',
            'plt',
            'mpv',
            'pdw',
            'pct',
            'coe',
            'morf_erit',
            'morf_leyk',
            'sana:dateTime',
        ],
    ]) ?>

</div>


