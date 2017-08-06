<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use Detection\MobileDetect;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\widgets\MaskedInputAsset;

class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fonts.css',
        'css/loader.css',
    ];
    public $js = [
        'js/site.js'
    ];
    public $depends = [
        JqueryAsset::class,
        MaskedInputAsset::class
//        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        $detect = new MobileDetect();
        if ($detect->isMobile() && !$detect->isTablet()) {
            array_push($this->css, 'css/mobile.css', 'css/swiper.css');
            array_unshift($this->js, 'js/swiper.js');
        } else {
            array_push($this->css, 'css/landing.css');
        }
        parent::init();
    }
}
