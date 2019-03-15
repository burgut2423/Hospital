<?php


use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\registrator\model\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::button('Create',['value'=>Url::to('/registrator/patient/create'),'class'=>'btn btn-success flat','id'=>'ModalButton'])?>
    </p>
     <?php
        Modal::begin([
                'header'=>'<h4>Bemor ro\'yxatga olish</h4>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]
        );
        echo "<div id='modalContent'></div>";
        Modal::end();
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'lastname',
            'midname',
            // 'address:ntext',
            // 'phone_number',
            // 'work_phone',
            // 'work',
            // 'gender_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>


