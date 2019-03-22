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
    <p>
        <?=Html::a('Orqaga',Url::to('/registrator'),['class'=>'w3-btn w3-margin-bottom w3-sn'])?>
        <?=Html::button('Create',['value'=>Url::to('/registrator/patient/create'),'class'=>'w3-btn w3-margin-bottom btn-success w3-sn','id'=>'ModalButton'])?>
    </p>
     <?php
        Modal::begin([

                 'id'=>'modal',
                 'class'=>'w3-animate-zoom',

            ]
        );
        echo "<div id='modalContent' class='w3-animate-zoom'></div>";
        Modal::end();
     ?>


        <div class="box box-default box-solid collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Barchasi</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display:block">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions'=>[
                        'class'=>'w3-table w3-bordered w3-striped w3-white w3-card-24 dataTable no-footer',
                    ],
                    'options'=>[
                        'class'=>'bg-green',
                    ],
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

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{view}',
                        ],

                    ],
                ]); ?>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->



</div>


