<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnalizMochiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Analiz Mochis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analiz-mochi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Analiz Mochi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'visit_id',
            'sana',
            'muassasa',
            'bulim',
            //'palata',
            //'uchastok',
            //'varaqa',
            //'miqdori',
            //'rangi',
            //'tiniqligi',
            //'nisb_zichligi',
            //'reaksiyasi',
            //'oqsil',
            //'oqsil_gl',
            //'oqsil_gp',
            //'glyukoza',
            //'glyukoza_ml',
            //'glyukoza_gp',
            //'keton',
            //'qon_reak',
            //'bilirubin',
            //'urobilinoidlar',
            //'ot_kislota',
            //'indikan',
            //'ep_yassi',
            //'ep_utuvchi',
            //'ep_buyrak',
            //'ep_leykositlar',
            //'er_uzgarmagan',
            //'er_uzgargan',
            //'s_gizlinli',
            //'s_donador',
            //'s_mumsimon',
            //'s_piteliol',
            //'s_leykositlar',
            //'s_pigmentli',
            //'s_shilliq',
            //'s_tuzlar',
            //'s_bakteriyalar',
            //'laborant_id',
            //'direction',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
