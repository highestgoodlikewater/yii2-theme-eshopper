<?php

namespace frontend\assets;

use Yii; # ปิดการใช้งาน BootstrapAsset
use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle {
    
    # ปิดการใช้งาน BootstrapAsset
    public function init(){
        parent::init();
        Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
    
    public $jsOptions = ['position' => View::POS_END];
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'vendor/bootstrap-3.3.6/dist/css/bootstrap.min.css',
        'vendor/font-awesome-4.5.0/css/font-awesome.min.css',
        'vendor/pretty-photo-3.1.5/prettyPhoto.css',
        'vendor/price-range-1.0.0/price-range.css',
        'vendor/animate-3.5.0/animate.min.css',
        'css/main.css',
        'css/responsive.css',
    ];
    
    public $js = [
        'vendor/bootstrap-3.3.6/dist/js/bootstrap.min.js',
        'vendor/jquery-scrollup-1.0.0/jquery-scrollup.min.js',
        'vendor/price-range-1.0.0/price-range.js',
        'vendor/pretty-photo-3.1.5/jquery.prettyPhoto.js',
        'vendor/holder-2.9.0/holder.min.js',
        'vendor/numeral-1.5.3/numeral.js',
        'vendor/jquery-validation-1.14.0/dist/jquery.validate.min.js',
        'vendor/jquery-validation-1.14.0/dist/additional-methods.min.js',
        'js/main.js',  
    ];
    
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
    
}