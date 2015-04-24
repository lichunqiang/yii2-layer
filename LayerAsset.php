<?php namespace light\yii2\assets;

use yii\web\AssetBundle;

class LayerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/light/yii2/assets/source/layer/1.9.0';

    public $js = ['layer.js'];

    public $css = ['skin/layer.css'];

    public $depends = [
        'yii2\web\JqueryAsset',
    ];
}
