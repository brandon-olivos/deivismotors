<?php

return [
    'gii' => [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
    ],
    'rbac' => [
        'class' => 'johnitvn\rbacplus\Module',
        'as access' => [
            'class' => 'yii\filters\AccessControl',
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['admin'],
                ],
            ],
        ],
    ],
    'main' => [
        'class' => 'app\modules\main\Main',
    ],


    'articulosventas' => [
        'class' => 'app\modules\articulosventas\Articulosventas',
    ],

    'articulosentradasalida' => [
        'class' => 'app\modules\articulosentradasalida\Articulosentradasalida',
    ],


    'articulos' => [
        'class' => 'app\modules\articulos\Articulos',
    ],

    'articulosinventario' => [
        'class' => 'app\modules\articulosinventario\Articulosinventario',
    ],

    'articuloscategoria' => [
        'class' => 'app\modules\articuloscategoria\Articuloscategoria',
    ],

    'articulosmarca' => [
        'class' => 'app\modules\articulosmarca\Articulosmarca',
    ],


    'login' => [
        'class' => 'app\modules\login\LoginModule',
    ],
    'persona' => [
        'class' => 'app\modules\persona\Persona',
    ],
    'seguridad' => [
        'class' => 'app\modules\seguridad\Seguridad',
    ],
    
    'tipodocumento' => [
        'class' => 'app\modules\tipodocumento\TipoDocumento',
    ],

    'dashboard' => [
        'class' => 'app\modules\dashboard\Dashboard',
    ],
    'ubigeos' => [
        'class' => 'app\modules\ubigeos\Ubigeos',
    ],

];
