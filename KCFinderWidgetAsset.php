<?php

namespace soju\yii2kcfinder;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by KCFinder Widget.
 * @author soju22 <soju22@gmail.com>
 */
class KCFinderWidgetAsset extends AssetBundle
{

    public $sourcePath = '@vendor/soju/yii2-kcfinder/assets';
    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
    public $css = [
        'kcfinder.css',
    ];
    public $js = [
        'kcfinder.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'soju\yii2kcfinder\KCFinderAsset',
    ];

}
