<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnalizBloodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Analiz Bloods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analiz-blood-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Analiz Blood', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'visit_id',
            'bulim',
            'palata',
            'wbc',
            //'lymph',
            //'mid',
            //'gran',
            //'lymph_p',
            //'mid_p',
            //'gran_p',
            //'pal',
            //'seg',
            //'eozinofid',
            //'bazofid',
            //'monozit',
            //'hgb',
            //'rbc',
            //'hct',
            //'mcv',
            //'mch',
            //'mchc',
            //'rdwcv',
            //'rdwsd',
            //'plt',
            //'mpv',
            //'pdw',
            //'pct',
            //'coe',
            //'morf_erit',
            //'morf_leyk',
            //'sana',
            //'laborant_id',
            //'direction',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
