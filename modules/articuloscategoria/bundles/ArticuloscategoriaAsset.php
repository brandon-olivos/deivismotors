<?php

namespace app\modules\articuloscategoria\bundles;

use yii\web\AssetBundle;

class ArticuloscategoriaAsset extends AssetBundle {

    public $sourcePath = '@app/modules/articuloscategoria/assets';
    public $css = [
    ];
    public $js = [
        'js/index.js',
        'js/crear.js',
        'js/editar.js',
    ];
    public $depends = [
        'app\bundles\TemplateAsset',
    ];
    public $publishOptions = [
        'forceCopy' => true,
    ];

}
