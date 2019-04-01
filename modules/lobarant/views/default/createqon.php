<?php
/* @var $value app\models\AnalizBlood */

use yii\widgets\LinkPager;


?>
<div class="container">

    <h1 class="text-center w3-card-4 w3-border-light-gray col-md-11">Qon Analiz bo'limi</h1>
    <div class="col-md-11 w3-card-12">
        <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary text-center">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" class="text-center">
                                    Navbatdagilar
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="box-body">
                                <table class="w3-table w3-striped w3-bordered text-center">
                                    <tr>
                                        <th class="w3-red w3-card-12">Id#</th>
                                        <th class="w3-hover-amber w3-card-12">Ismi:</th>
                                        <th class="w3-hover-blue w3-card-12">Familyasi:</th>
                                        <th class="w3-hover-blue-grey w3-card-12">Kelgan_vaqti:</th>
                                        <th class="w3-hover-aqua text-center w3-card-12">Action</th>
                                    </tr>

                                    <?php $id = 1;
                                    foreach ($model as $value): ?>
                                        <tr class="w3-hover-aqua">
                                            <td class="w3-card-8" width="2"><?= $id++ ?></td>
                                            <td class="w3-hover-white w3-hover-border-dark-gray "><?= $value->visit->client->name ?></td>
                                            <td><?= $value->visit->client->lastname ?></td>
                                            <td class="w3-card-16 w3-white"><?= date('Y-M-D H:i:s', $value->visit->visit_time) ?></td>
                                            <td class="">
                                                <a href="<?=\yii\helpers\Url::to('/lobarant/analizblood/create?visit_id='.$value->visit_id)?>"  class="btn w3-btn btn-social btn-dropbox">
                                                    <i class="fa fa-plus"></i>Qabul qilish
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </table>

                            </div>
                            <?php echo
                            LinkPager::widget([
                                'pagination' => $pages,
                                'registerLinkTags' => true,
                                'options' => ['class' => 'w3-card-24 pagination'],
                                'prevPageLabel' => 'Boshiga',
                                'nextPageLabel' => 'Oxiriga',

                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="panel box box-danger">
                        <div class="box-header with-border text-center">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"
                                   aria-expanded="false">
                                    Qabul qilinganlar
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false"
                             style="height: 0px;">
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
                    <div class="panel box box-success">
                        <div class="box-header with-border text-center">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                   class="collapsed" aria-expanded="false">
                                    Barchasi
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false"
                             style="height: 0px;">
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
    </div>

</div>