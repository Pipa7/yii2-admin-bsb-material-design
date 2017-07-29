<?php

namespace pipa7\adminbsb\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminbsb-materialdesign/';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'plugins/node-waves/waves.css',
        'plugins/animate-css/animate.css',
        'css/style.css',

    ];
    public $js = [
        'plugins/node-waves/waves.js',
        'plugins/jquery-validation/jquery.validate.js',
        'js/admin.js',
        'js/pages/examples/sign-in.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
