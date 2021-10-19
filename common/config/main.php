<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@uploads' => '@appRoot/uploads'
    ],
    'timeZone' => "Asia/Tashkent",
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
//        Production paytida
//        'assetManager' => [
//            'appendTimestamp' => true,
//        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@appRoot/common/components/localization/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                    'on missingTranslation' => ['common\components\localization\TranslationEventHandler', 'handleMissingTranslation']
                ],
                'ui' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceLanguage' => 'en',
//                    'on missingTranslation' => ['common\components\localization\TranslationEventHandler', 'handleMissingTranslation']
                ],
                'models' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceLanguage' => 'en',
//                    'on missingTranslation' => ['common\components\localization\TranslationEventHandler', 'handleMissingTranslation']
                ],
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
