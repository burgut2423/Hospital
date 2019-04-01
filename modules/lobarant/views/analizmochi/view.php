<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizMochi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Analiz Mochis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="analiz-mochi-view">

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
            'muassasa',
            'bulim',
            'palata',
            'uchastok',
            'varaqa',
            'miqdori',
            'rangi',
            'tiniqligi',
            'nisb_zichligi',
            'reaksiyasi',
            'oqsil',
            'oqsil_gl',
            'oqsil_gp',
            'glyukoza',
            'glyukoza_ml',
            'glyukoza_gp',
            'keton',
            'qon_reak',
            'bilirubin',
            'urobilinoidlar',
            'ot_kislota',
            'indikan',
            'ep_yassi',
            'ep_utuvchi',
            'ep_buyrak',
            'ep_leykositlar',
            'er_uzgarmagan',
            'er_uzgargan',
            's_gizlinli',
            's_donador',
            's_mumsimon',
            's_piteliol',
            's_leykositlar',
            's_pigmentli',
            's_shilliq',
            's_tuzlar',
            's_bakteriyalar',
            'laborant_id',
            'direction',
        ],
    ]) ?>

</div>
