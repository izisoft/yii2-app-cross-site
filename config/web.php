<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'cross-site',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3PPewWyp_DjC4aSrnSxWeqvTUOK6-8my',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'site' => [
            'class' => 'izi\cross\CrossSite',
        ],
        
        'view' => [
            'class' => 'izi\cross\View',
            'theme' => [
                'basePath' => '@app/themes/nz1',
                'baseUrl' => '@web/themes/nz1',
                'pathMap' => [
                    '@app/views' => '@app/themes/nz1',
                ],
            ],
        ],
        
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'index/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        
        'db' => $db,

        'f' => [
            'class' => 'izi\cross\CrossSite'
        ],
        
        'urlManager' => [
            'class' => 'izi\cross\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'baseUrl' => '',
            'rules' => [
                '' => 'index/index',
//                 '<action>' => 'site/index'
            ],
        ],
       
    ],
    'params' => $params,
];

// if (YII_ENV_DEV) {
//     // configuration adjustments for 'dev' environment
//     $config['bootstrap'][] = 'debug';
//     $config['modules']['debug'] = [
//         'class' => 'yii\debug\Module',
//         // uncomment the following to add your IP if you are not connecting from localhost.
//         //'allowedIPs' => ['127.0.0.1', '::1'],
//     ];

//     $config['bootstrap'][] = 'gii';
//     $config['modules']['gii'] = [
//         'class' => 'yii\gii\Module',
//         // uncomment the following to add your IP if you are not connecting from localhost.
//         //'allowedIPs' => ['127.0.0.1', '::1'],
//     ];
// }

return $config;
