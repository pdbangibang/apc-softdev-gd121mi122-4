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
		'css/bootstrap.min.css',
		'css/font-awesome.min.css',
		'css/style.css',
        'css/site.css',
    ];
    public $js = [
		'js/bootstrap.js',
		'js/html5.js',
		'js/jquery.actual.min.js',
		'js/jquery.scrollTo.min.js',
		'js/jquery-2.1.3.min.js',
		'js/jquery-migrate-1.2.1.min.js',
		'js/respond.js',
		'js/script.js',
		'js/selectivizr.js',
		'js/smoothscroll.js',
		'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
