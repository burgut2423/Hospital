<aside class="main-sidebar w3-animate-left">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p> <?php echo Yii::$app->user->isGuest ? "Mehmon" : Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Doctor Munyusi', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Amallar',
                        'icon' => 'fa fa-refresh',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Qabul qilinganlar', 'icon' => 'fa fa-home', 'url' => ['/admin/user'],],
                            ['label' => 'Barchasi', 'icon' => 'fa fa-facebook', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
