<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Receive */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Receives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receive-view">

        <?=
            Html::a('Back',\yii\helpers\Url::to('/doctor'),['class'=>'btn w3-btn w3-red']);
        ?>



    <!--
        Relation ni  ishlatish uchun   birinana birina  bog'anish qilish kerak
        yoki     Model da avaldan bog'lanish bo'lsa  unu qo'shimcha  inverseOf  bilan yazilgan ni atib
                  qo'shimcha Class ga  function qilib baribarish kerak akannnnnnnn ???
    -->


        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Umumiy axvoli</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        [
                            'label' => 'Bemor ismi',
                            'value' => $model->visit->client->name,
                        ],
                        'complaint:ntext',
                        'amnesis_norby:ntext',
                        'ahvol',
                        'eye_status',
                        'auskultatsiya',
                        'xirillash',
                        'arterial_bosim_ong',
                        'arterial_bosim_chap',
                        'yurak_qis_soni',
                        'puls',
                        'fibrilyatsiya',
                        'shovqin',
                        'tili',
                        'qorni',
                        'jigar',
                        'taloq',
                        'astsit',
                        'disease:ntext',
                        'disease_level',
                        'asorat:ntext',
                        'yuldosh:ntext',
                        'tavsiya:ntext',
                        'receive_time:datetime',
                    ],
                ]) ?>
            </div>
            <!-- /.box-body -->
        </div>


    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
</div>
