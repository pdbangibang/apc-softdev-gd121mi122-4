<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'assets/css/bootstrap.min.css',
		'assets/css/animate.css',
		'assets/css/own.carousel.css',
        'assets/css/owl.theme.css',
		'assets/css/style.css',
        'css/site.css',
    ];
    public $js = [
		'assets/js/bootstrap.min.js',
		'assets/js/jquery.actual.js',
		'assets/js/jquery-2.1.3.min.js',
		'assets/js/modernizr.js',
		'assets/js/owl.carousel.js',
		'assets/js/script.js',
		'assets/js/smoothscroll.js',
		'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
