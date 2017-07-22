<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\widgets\MaskedInputAsset;

class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fonts.css',
        'css/landing.css',
    ];
    public $js = [
        'js/site.js'
    ];
    public $depends = [
        JqueryAsset::class,
        MaskedInputAsset::class
//        'yii\bootstrap\BootstrapAsset',
    ];
}
