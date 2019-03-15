<?php
use yii\bootstrap\Html;
use yii\grid\GridView;

/*  @var $searchModel `app\models\QuerySearch` */
/*  @var $dataProvider yii\data\ActiveDataProvider */
/* @var  $query mixed app\models\Query */
/* @var  $querilar ,$mymodel  app\models\Query */
/* @var  $this yii\web\View */
?>
<div class="container">
    <h2>Doctor <?= \app\models\User::getUsername(Yii::$app->user->id) ?> ni qabulidagilar</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Navbatdagilar</a></li>
        <li><a data-toggle="tab" href="#menu1">Qabul qilinganlar</a></li>
        <!--        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
        <!--        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="col-sm-6">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
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
                                aria-label="CSS grade: activate to sort column ascending" style="width: 10px">Action
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
                                        <?= Html::a('Qabul', ['/doctor/receive/create?visit_id=' . $querilar->visit_id], ['class' => 'btn btn-success flat']) ?>
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
        <div id="menu1" class="tab-pane fade">
            <?php

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

