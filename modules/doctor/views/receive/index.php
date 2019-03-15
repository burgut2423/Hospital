<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReceiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Receives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receive-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Receive', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'visit.client.name',
            'visit.client.lastname',
            'visit.visit_time:datetime',
            'ahvol',
            // 'eye_status',
            // 'auskultatsiya',
            // 'xirillash',
            // 'arterial_bosim_ong',
            // 'arterial_bosim_chap',
            // 'yurak_qis_soni',
            // 'puls',
            // 'fibrilyatsiya',
            // 'shovqin',
            // 'tili',
            // 'qorni',
            // 'jigar',
            // 'taloq',
            // 'astsit',
            // 'disease:ntext',
            // 'disease_level',
            // 'asorat:ntext',
            // 'yuldosh:ntext',
            // 'tavsiya:ntext',
            // 'receive_time:datetime',
            // 'doctor_id',
            // 'receive_state',
            // 'direction',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
