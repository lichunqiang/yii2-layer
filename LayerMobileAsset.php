<?php namespace ligh\assets;

use yii\web\AssetBundle;
/**
 * ~~~
 * use light\assets\LayerMobileAsset;
 *
 * LayerMobielAsset::register($this);
 * ~~~
 * @version 0.1.2
 * @author light-li<light-li@hotmail.com>
 */
class LayerMobileAsset extends AssetBundle
{
    public $sourcePath = '@vendor/light/yii2-layer/source/layer/1.9.0';

    public $js = ['layer.m.js'];

    public $css = ['need/layer.css'];
}
