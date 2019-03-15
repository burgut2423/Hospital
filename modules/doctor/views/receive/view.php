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

    <h1><?= Html::encode($this->title) ?>


    </h1>

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
    <!--
        Relation ni  ishlatish uchun   birinana birina  bog'anish qilish kerak
        yoki     Model da avaldan bog'lanish bo'lsa  unu qo'shimcha  inverseOf  bilan yazilgan ni atib
                  qo'shimcha Class ga  function qilib baribarish kerak akannnnnnnn ???
    -->
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
