<?php

return CMap::mergeArray(
    CMap::mergeArray(array(
        'basePath'  => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'preload'   => array('log'),
        'aliases' => array(
            'vendor'    => realpath(__DIR__ . '/../vendor')
        ),
        'import'    => array(
            'application.models.*',
            'application.components.*',
            'vendor.yiiext.econsolecommand.*'
        ),
        'commandMap'    => array(
            'migrate'    =>array(
                'class'             =>'vendor.yiiext.migrate-command.EMigrateCommand',
                'migrationTable'    =>'{{migration_history}}',
                'connectionID'      =>'db'
            )
        )
    ),
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'components.php')
    ),
    CMap::mergeArray(
        require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php'),
        require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'database.php')
    )
);

