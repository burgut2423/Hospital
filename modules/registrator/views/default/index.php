<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bemorlarni ro\'yxati';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-index  box-body table-responsive no-padding">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
         'showOnEmpty'=>false,
         'options'=>['class'=>'text-left table table-hover','style'=>'border:1px solid red'],
         'summary'=>'Bemorlar soni :{begin} - {end}',
        'columns' => [
            [
                    'class' => 'yii\grid\SerialColumn',
            ],
            'surname',
            'name',
            //mide
            //'birth_date',
            //'home_phone',
            // 'work_phone',
            // 'address',
            // 'work_place',
            // 'sex',
            // 'region_id',
            // 'district_id',

            [
                    'class' => 'yii\grid\ActionColumn',
                     'header'=>'Amallar',
                'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center'],
                'template' => '{leadView} {leadUpdate} {leadDelete}',
                'buttons'  => [
                    'leadView'   => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['client/view', 'id' => $model->id]);
                        return Html::a('<span class="fa fa-eject"></span>', $url, ['title' => 'view']);
                    },
                    'leadUpdate' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['client/update','id'=>$model->id]);
                        return Html::a('<span class="fa fa-edit"></span>', $url, ['title' => 'update']);
                    },
                    'leadDelete' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['client/delete', 'id'=>$model->id]);
                        return Html::a('<span class="fa fa-train"></span>', $url, [
                            'title'        => 'delete',
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method'  => 'post',
                        ]);
                    },
                ]
            ],
        ],
    ]); ?>
</div>
