<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\MyAssets;

MyAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini wysihtml5-supported">
<?php $this->beginBody() ?>

<div class="wrap">
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => "Hospital System",
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Asosiy menu', 'url' => ['/site/index']],
//            ['label' => 'Tizm xaqida', 'url' => ['/site/about']],
//            ['label' => 'Biz bilan aloqa', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Kirish', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Chiqish (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="/hospital/alt.png" width="32px" height="32px" alt="alt"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Hospital</b><?="\t"?>System</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">
<!--                        <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->


                                <?php echo
                                Yii::$app->user->isGuest ? (
                               // ['label' => 'Kirish', 'url' => ['/site/login']])
                                   " <li class='dropdown user user-menu'><a class='btn btn-primary' href='/site/login'>Kirish</a></li>"

                                ) : (

                                    '<li class="dropdown user user-menu">'.Html::beginForm(['/site/logout'], 'post').
                                     Html::submitButton(
                                        'Chiqish (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-primary logout ']
                                    ).
                                     Html::endForm().'</li>'
                                   )
                                ?>


                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/image/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Tizmda emassiz</p>
                    <a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>
                </div>
            </div>

            <ul class="sidebar-menu tree" data-widget="tree">
                <li class="header">Asosiy Modullar</li>
                <li class="active treeview menu-open">
                    <a href="#">
                        <img src="/hospital/module.png" alt="doctor" width="28px" height="28px "><span> Modullar</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu tree">
                        <li><a href="index.html"  class="btn-primary bg-black-gradient active  btn-flat"><img src="/hospital/doctor1.png" alt="doctor" width="32px" height="32px"> Doctor</a></li>
                        <li><a href="index2.html" class="btn-primary bg-black-gradient active  btn-flat"><img src="/hospital/doctor.png" alt="doctor" width="32px" height="32px"> Registrator</a></li>
                        <li><a href="index2.html" class="btn-primary bg-black-gradient active  btn-flat"><img src="/hospital/ekg.png" alt="doctor" width="32px" height="32px"> Ekg</a></li>
                        <li><a href="index2.html" class="btn-primary bg-black-gradient active  btn-flat"><img src="/hospital/laborotoriya.png" alt="doctor" width="32px" height="32px"> Laborotoriya</a></li>
                        <li><a href="index2.html" class="btn-soundcloud bg-black-gradient active  btn-flat"><img src="/hospital/rengen.png" alt="doctor" width="32px" height="32px"> Rengen</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper" style="min-height: 901px;">

        <section class="content">

                <?= $content ?>

        </section>
        <!-- /.content -->
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
