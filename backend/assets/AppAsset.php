<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/site.css',
        'assets/css/sb-admin-2.min.css',
        'assets/css/sb-admin-2.css',
        'assets/vendor/fontawesome-free/css/all.min.css',
        'assets/css/sb-admin-2.min.css',


    ];
    public $js = [
        'assets/vendor/jquery/jquery.js',
        'assets/vendor/jquery-easing/jquery.easing.min.js',
        'assets/vendor/chart.js/Chart.min.js',
        'assets/js/demo/chart-area-demo.js',
        'assets/js/demo/chart-pie-demo.js',
        'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',

        // 'assets/vendor/jquery/jquery.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
