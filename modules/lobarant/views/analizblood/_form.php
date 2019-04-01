<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnalizBlood */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="analiz-blood-form box-body">


    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'visit_id')->hiddenInput(['value' =>$_GET['visit_id']])->label(false) ?>
    <table class="w3-table w3-padding-small w3-small w3-bordered w3-striped w3-card-4" cellspacing="1" cellpadding="1">
        <tbody>
        <tr class="w3-card-24 w3-blue-gray no-print">
            <th class="w3-hover-red">O'zgaruvchilar</th>
            <th class="w3-hover-red">Ma'lumotlari</th>
            <th class="w3-hover-red">Normal xolatda</th>
            <th class="w3-hover-red">o'lchov birligi</th>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'wbc')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>4.0-9.0</td>
            <td>10 <sup>3</sup>/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'lymph')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>0.8-4.0</td>
            <td>10 <sup>3</sup>/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'mid')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 0.1-0.2</td>
            <td>10 <sup>3</sup>/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'gran')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 2.0-7.0</td>
            <td>10 <sup>3</sup>/л</td>
        </tr>
        <tr>
            <td></td>
            <td> <?= $form->field($model, 'lymph_p')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 19-39</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'mid_p')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 3.0-11.0</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'gran_p')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>50-70</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'pal')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>1-5</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'seg')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>47-72</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'eozinofid')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>1-6</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'bazofid')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 0.5-1</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'monozit')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 3-11</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'hgb')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>М: 130-160
                Ж:120-140
            </td>
            <td>г/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'rbc')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>М: 4,0-5,0
                Ж:3,9-4,7
            </td>
            <td>10/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'hct')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>М: 40-48
                Ж: 33-44
            </td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'mcv')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 82.0-95.0</td>
            <td> ф/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'mch')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 27.0-32.0</td>
            <td> н/г</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'mchc')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>320-360</td>
            <td>г/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'rdwcv')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 11.5-14.5</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'rdwsd')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>35-56</td>
            <td>ф/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'plt')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> 180-320</td>
            <td>10 <sup>3</sup>/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'mpv')->textInput(['maxlength' => true])->label(false) ?> </td>
            <td>7-11</td>
            <td>ф/л</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'pdw')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>15-17</td>
            <td>null</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'pct')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>0.108 - 0.282</td>
            <td>%</td>
        </tr>
        <tr>
            <td></td>
            <td><?= $form->field($model, 'coe')->textInput(['maxlength' => true])->label(false) ?></td>
            <td> М:0-10
                Ж:0-15
            </td>
            <td>мм/час</td>
        </tr>
        <tr class="no-print">
            <td></td>
            <td><?= $form->field($model, 'morf_erit')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'bulim')->textInput(['maxlength' => true])->label(false) ?></td>
            <td></td>
        </tr>
        <?= $form->field($model, 'sana')->hiddenInput(['value' => time()])->label(false) ?>

        <?= $form->field($model, 'laborant_id')->hiddenInput(['value' => Yii::$app->user->identity->getId()])->label(false) ?>

        <?= $form->field($model, 'direction')->hiddenInput(['value' => 1])->label(false) ?>
        <tr class="no-print">
            <td></td>
            <td><?= $form->field($model, 'morf_leyk')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'palata')->textInput(['maxlength' => true])->label(false) ?></td>
            <td>
                <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'w3-large w3-btn w3-card-24','style'=>'width:100%']) ?>
    </div>
            </td>
        </tr>
        </tbody>
    </table>


    <?php ActiveForm::end(); ?>

</div>
