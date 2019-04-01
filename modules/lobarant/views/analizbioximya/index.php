<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnalizBioximyaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Analiz Bioximyas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analiz-bioximya-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Analiz Bioximya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'visit_id',
            'sana',
            'palata',
            'bulim',
            //'qon_qand',
            //'siyd_qand',
            //'umum_oqsil',
            //'alat',
            //'asat',
            //'mochevina',
            //'kreatinin',
            //'bilirubin',
            //'umumiy',
            //'boglangan',
            //'erkin',
            //'diastoza',
            //'moch_kislota',
            //'kaliy',
            //'kalsiy',
            //'natriy',
            //'c_reak_belok',
            //'jelezo',
            //'xoleterin',
            //'laborant_id',
            //'direction',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
