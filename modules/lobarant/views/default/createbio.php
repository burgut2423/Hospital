<?php
/* @var $bioximya app\models\AnalizType */

use yii\widgets\LinkPager;

?>
<section class="col-md-12 container">
    <div class="box-header with-border w3-card-24 w3-hover-red text-center">
        <h3 class="box-title w3-animate-top">Biohimya ma'lumotlarini kiritish</h3>
    </div>
    <div class="box box-solid text-center">

        <!-- /.box-header -->
        <div class="box-body">
            <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary ">
                    <div class="box-header with-border w3-hover-yellow">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Navbatdagi bemorlar
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="box-body w3-animate-zoom">
                            <?php $nomer = 1;
                            foreach ($model as $bioximya): ?>
                                <div class="col-md-4 w3-card-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="box box-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-black"
                                             style="background: url('/image/photo1.png') center center;">
                                            <h3 class="w3-red w3-card-24"><?= $nomer++; ?></h3>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle" src="/image/user3-128x128.jpg" alt="User Avatar">
                                        </div>
                                        <div class="box-footer">
                                            <div class="row">
                                                <table class="table table-striped text-left">
                                                    <tbody>
                                                    <tr>
                                                        <th class="text-left w3-card-2">Ismi</th>
                                                        <th>Kelgan Vaqati</th>
                                                        <th style="width: 40px">status</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="w3-blue"><?= $bioximya->visit->client->name; ?></td>

                                                        <td>
                                                            <?= date('d-m-Y h:m:s', $bioximya->visit->visit_time) ?>
                                                        </td>
                                                        <td><span class="badge bg-red">x</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="col-sm-12 text-center">
                                                    <a class="w3-btn w3-green text-center">Qabul</a>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php
                        echo LinkPager::widget([
                            'pagination' => $page,
                            'registerLinkTags' => true,
                            'options' => ['class' => 'w3-card-24 pagination'],
                            'prevPageLabel' => 'Boshiga',
                            'nextPageLabel' => 'Oxiriga',

                        ]);
                        ?>
                    </div>

                </div>
                <div class="panel box box-danger">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Qabul qilinganlar
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="box-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                      eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                      assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                      nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                      farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                      labore sustainable VHS.
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
