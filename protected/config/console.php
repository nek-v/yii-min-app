<?php

return CMap::mergeArray(
    CMap::mergeArray([
        'basePath'  => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'preload'   => ['log'],
        'aliases' => [
            'vendor'    => realpath(__DIR__ . '/../vendor')
        ],
        'import'    => [
            'application.models.*',
            'application.components.*',
            'vendor.nek-v.yii-econsolecommand.*'
        ],
        'commandMap'    => [
            'migrate'    =>[
                'class'             =>'vendor.yiiext.migrate-command.EMigrateCommand',
                'migrationTable'    =>'{{migrations}}',
                'connectionID'      =>'db'
            ]
        ]
    ],
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'components.php')
    ),
    CMap::mergeArray(
        require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php'),
        require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'database.php')
    )
);

