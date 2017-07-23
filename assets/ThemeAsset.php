<?php

namespace pipa7\adminbsb\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminbsb-materialdesign/';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'plugins/node-waves/waves.css',
        'plugins/animate-css/animate.css',
        'css/style.css',
        'css/themes/all-themes.css',

    ];
    public $js = [
        'plugins/bootstrap-select/js/bootstrap-select.js',
        'plugins/jquery-slimscroll/jquery.slimscroll.js',
        'plugins/node-waves/waves.js',
        'js/admin.js',
        'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
