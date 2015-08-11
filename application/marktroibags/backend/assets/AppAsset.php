<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

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
        'css/site.css',
		'css/animate.min.css',
		'css/bootstrap.min.css',
		'css/custom.css',
		'css/floatexamples.css',
		'css/ion.rangeSlider.css',
		'css/ion.rangeSlider.skinFlat.css',
		'css/normalize.css',
		'css/nprogress.css',
		
		'fonts/css/font-awesome.min.css',
		
		'css/maps/jquery-jvectormap-2.0.1.css',
		'css/icheck/flat/green.css',
		
		
    ];
    public $js = [
		'js/jquery.min.js',
		'js/nprogress.js',
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
