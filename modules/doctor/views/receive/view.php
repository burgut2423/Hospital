<?php

use app\models\Analiz;
use app\models\AnalizType;
use app\models\Labs;
use softark\duallistbox\DualListbox;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Receive */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Receives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receive-view ">

    <?=
    Html::a('Back', \yii\helpers\Url::to('/doctor'), ['class' => 'btn w3-btn w3-red']);

    ?>
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>


    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Ko'rik uchun qisqacha ma'lumotlar</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="">
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

    <!-- /.box -->

    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Bemor ni laborotoyaga yuborish</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php $form = ActiveForm::begin(); ?>

            <?php

            $selection = [
                1,
                1,
            ];
            $labs = Analiz::find()->all();
            $item = ArrayHelper::map($labs, 'analiz_id', 'analiz_name');
            $options = [
                'multiple' => true,
                'size' => 20,
            ];

            echo $form->field($analiz, 'analiz_id')->widget(
                DualListbox::className(), [
                    'selection' => $selection,
                    'items' => $item,
                    'options' => $options,
                    'clientOptions' => [
                        'moveOnSelect' => false,
                        'selectedListLabel' => 'Tanlanganlar',
                        'nonSelectedListLabel' => 'Tanlash..',
                    ],
                ]
            )->label(false);
            echo  $form->field($analiz,'visit_id')->hiddenInput(['value'=>$model->visit_id])->label(false);
            echo  $form->field($analiz,'add_time')->hiddenInput(['value'=>time()])->label(false);
            echo  $form->field($analiz,'end_time')->hiddenInput(['value'=>time()])->label(false);
            ?>
            <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
           </div>
            <?php ActiveForm::end(); ?>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


</div>


