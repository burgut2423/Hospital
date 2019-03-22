<?php

use app\models\Visit;
use yii\bootstrap\Html;
use yii\grid\GridView;
use timurmelnikov\widgets\WebcamShoot;
use yii\widgets\LinkPager;

/*  @var $searchModel `app\models\QuerySearch` */
/*  @var $dataProvider yii\data\ActiveDataProvider */
/* @var  $query mixed app\models\Query */
/* @var  $querilar ,$mymodel  app\models\Query */
/*  @var  $qaluqilinganlar app\models\Visit*/
/* @var  $this yii\web\View */
?>

<div class="w3-container">
    <h2>Doctor <?= \app\models\User::getUsername(Yii::$app->user->id) ?> ni qabulidagilar</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Navbatdagilar</a></li>
        <li><a data-toggle="tab" href="#menu1">Qabul qilinganlar</a></li>
        <!--        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
        <!--        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
    </ul>

    <div class="tab-content ">
        <div id="home" class="tab-pane fade in active w3-animate-right">
           <div id="example1_wrapper" class="w3-table w3-bordered w3-striped w3-card-4 ">
            </div>
            <div class="w3-row">
                <div class="col-sm-12">
                    <table id="example1" class="w3-table w3-bordered w3-striped w3-white w3-card-24" role="grid"
                           aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                                style="width: 64px;">Nomer
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 53px;">Bemor ismi
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 72px;">
                                Bemor familyasi
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending" style="width: 46px;">
                                Kelgan vaqti
                            </th>
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="CSS grade: activate to sort column ascending" style="width:60px">Action
                            </th>
                             </tr>
                        </thead>
                        <tbody>
                        <?php $r = 1;
                        foreach ($query as $querilar): ?>
                            <?php if ($querilar->visit->inside == 1): ?>
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><?= $r++; ?></td>
                                    <td><?= $querilar->visit->client->name; ?></td>
                                    <td><?= $querilar->visit->client->surname; ?></td>
                                    <td><?= date("d-m-Y l  H:i:s", $querilar->visit->visit_time); ?></td>
                                    <td class="no-padding text-center">
                                        <?= Html::a('Qabul', ['/doctor/receive/create?visit_id=' . $querilar->visit_id], ['class' => 'btn btn-success flat','style'=>'float:left']) ?>
                                        <?= Html::a('Result', ['/doctor/receive/view?visit_id=' . $querilar->visit_id], ['class' => 'btn btn-primary flat']) ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <div id="menu1" class="tab-pane fade ">
            <table border="2" class="w3-table w3-animate-zoom table-responsive table-hover w3-card-16 w3-white">
                <th>id</th>
                <th>Ismi</th>
                <th>Familyasi</th>
                <th>Qabul Vaqti</th>
                <th  colspan="2" class="text-center w3-blue" ><center>Amallar</center></th>


                <?php
               foreach($modelss as $qabul):?>

                   <tr>
                    <td class="w3-green"><?=$qabul->client->id?></td>
                    <td><?=$qabul->client->name?></td>
                    <td><?=$qabul->client->lastname?></td>
                    <td style="width: 30%"><?=date('Y-M-D H:i:s', $qabul->visit_time)?></td>
                    <td>
                        <span class="fa fa-spinner w3-spin"></span>
                        <?=Html::a('Qabul malumotlari',\yii\helpers\Url::to(['receive/view?id='.\app\models\Receive::findOne(['visit_id'=>$qabul->id])->id]),['class'=>'w3-btn w3-green'])?>
                    </td>
                       <td>
                           <?=Html::a('Tarixi',\yii\helpers\Url::to(['about']),['class'=>'w3-btn w3-animate-right w3-blue fa fa-home'])?>
                       </td>
                </tr>

               <?php endforeach;?>

             </table>
            <?php echo
            LinkPager::widget([
                'pagination' => $pages,
                'registerLinkTags' => true,
                'options'=>['class'=>'pagination'],
            ]);
            ?>
        </div>



        <?php
        $this->registerJs("
         $(function () {
         $('#example1').DataTable()
         $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
    })
})");
        ?>

        <!--        <div id="menu2" class="tab-pane fade">-->
        <!--            <h3>Menu 2</h3>-->
        <!--            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>-->
        <!--        </div>-->
        <!--        <div id="menu3" class="tab-pane fade">-->
        <!--            <h3>Menu 3</h3>-->
        <!--            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
        <!--        </div>-->
    </div>


</div>
