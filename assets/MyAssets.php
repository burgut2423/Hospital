<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26-Jan-19
 * Time: 0:36
 */

namespace app\assets;


use yii\web\AssetBundle;

class MyAssets  extends AssetBundle

{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/AdminLTE.min.css',
        'css/_all-skins.min.css',
        'css/site.css',
//        'css/font-awesome.min.css',
        'font-awesome/css/font-awesome.css',
        'css/Ionicons/css/ionicons.css',




    ];

    public $js = [
        'js/bootstrap.min.js',
        'dist/jquery.sparkline.js',
        'js/jquery-ui.min.js',
        'js/adminlte.min.js',
        'js/fastclick.js',
        'js/dashboard.js',
        //'js/my.js',

    ];
    public $depends = [
         'yii\web\YiiAsset',
       //'yii\bootstrap\BootstrapAsset',
    ];

}