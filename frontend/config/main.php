<?php

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'baseUrl' => $baseUrl,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [   
            'showScriptName' => false,   // Disable index.php
            'enablePrettyUrl' => true,   // Disable r= routes
            'enableStrictParsing' => true,
            'rules' => array(
                # Basic
                '' => 'site/index',
                # Other
                '<controller:\w+>' => '<controller>/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\w+>' => '<controller>/<action>',
                # Modules
                '<module:\w+>' => '<module>/default/index',
                '<module:\w+>/<controller:\w+>' => '<module>/<controller>/index',
                '<module:\w+>/<controller:\w+>/' => '<module>/<controller>/index',
                '<module:\w+>/<controller:\w+>/<action>' => '<module>/<controller>/<action>',
            ),
        ], 
		
		# ติดตั้ง Theme EShopper
        'view' => [
            'theme' => [
                'pathMap' => [ '@app/views' => '@app/../themes/eshopper/views' ],
            ],
        ],
		
    ],
    'params' => $params,
];
