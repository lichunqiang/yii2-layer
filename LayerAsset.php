<?php namespace light\assets;

use yii\web\AssetBundle;
/**
 * ~~~
 * use light\assets\LayerAsset;
 *
 * LayerAsset::register($this);
 * ~~~
 * @version 0.1.2
 * @author light-li<light-li@hotmail.com>
 */
class LayerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/light/yii2-layer/source/layer/1.9.0';

    public $js = ['layer.js'];

    public $css = ['skin/layer.css'];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
