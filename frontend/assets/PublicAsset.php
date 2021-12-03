<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/style.css',
        'public/css/utility.css',
        'public/css/responsive.css',
        'public/slick-1.8.1/slick/slick.css',
        'public/slick-1.8.1/slick/slick-theme.css',
        'public/css/font-awesome.min.css'

    ];
    public $js = [
        'public/slick-1.8.1/slick/slick.js',
        'public/js/gallery.js',
        'public/js/script.js',
        'public/js/jquery-1.11.3.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
