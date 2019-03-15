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
            <span class="logo-lg"><b>Hospital</b><?= "\t" ?>System</span>
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
                        " <li class='dropdown user user-menu'><a class='btn btn-primary' href='/site/login' id='createLoginWindow'>Kirish</a></li>"

                        ) : (

                            '<li class="dropdown user user-menu">' . Html::beginForm(['/site/logout'], 'post') .
                            Html::submitButton(
                                'Chiqish (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-primary logout ']
                            ) .
                            Html::endForm() . '</li>'
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
                        <li><a href="/doctor" class="btn-primary bg-black-gradient active  btn-flat"><img
                                        src="/hospital/doctor1.png" alt="doctor" width="32px" height="32px"> Doctor</a>
                        </li>
                        <li><a href="/registrator" class="btn-primary bg-black-gradient active  btn-flat"><img
                                        src="/hospital/doctor.png" alt="doctor" width="32px" height="32px"> Registrator</a>
                        </li>
                        <li><a href="/ekg" class="btn-primary bg-black-gradient active  btn-flat"><img
                                        src="/hospital/ekg.png" alt="doctor" width="32px" height="32px"> Ekg</a></li>
                        <li><a href="/laborotoriya" class="btn-primary bg-black-gradient active  btn-flat"><img
                                        src="/hospital/laborotoriya.png" alt="doctor" width="32px" height="32px">
                                Laborotoriya</a></li>
                        <li><a href="rentgen" class="btn-soundcloud bg-black-gradient active  btn-flat"><img
                                        src="/hospital/rengen.png" alt="doctor" width="32px" height="32px"> Rengen</a>
                        </li>
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
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i class="fa fa-wrench"></i></a></li><li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div><div id="control-sidebar-theme-demo-options-tab" class="tab-pane active"><div><h4 class="control-sidebar-heading">Layout Options</h4><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="fixed" class="pull-right"> Fixed layout</label><p>Activate the fixed layout. You can't use fixed and boxed layouts together</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="layout-boxed" class="pull-right"> Boxed Layout</label><p>Activate the boxed layout</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="sidebar-collapse" class="pull-right"> Toggle Sidebar</label><p>Toggle the left sidebar's state (open or collapse)</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-enable="expandOnHover" class="pull-right"> Sidebar Expand on Hover</label><p>Let the sidebar mini expand on hover</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-controlsidebar="control-sidebar-open" class="pull-right"> Toggle Right Sidebar Slide</label><p>Toggle between slide over content and push content effects</p></div><div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-sidebarskin="toggle" class="pull-right"> Toggle Right Sidebar Skin</label><p>Toggle between dark and light skins for the right sidebar</p></div><h4 class="control-sidebar-heading">Skins</h4><ul class="list-unstyled clearfix"><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Blue</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Black</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Purple</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Green</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Red</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin">Yellow</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Blue Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Black Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Purple Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Green Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Red Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Yellow Light</p></li></ul></div></div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked="">
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked="">
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked="">
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked="">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
