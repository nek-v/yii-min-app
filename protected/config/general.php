<?php

return [
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Base App',
    'preload' => ['log'],
    'defaultController' => 'site',
    'aliases' => [
        'bootstrap' => realpath(__DIR__ . '/../vendor/crisu83/yiistrap'),
        'vendor'    => realpath(__DIR__ . '/../vendor')
    ],
    'import' => [
        'application.actions.*',
        'application.models.*',
        'application.forms.*',
        'application.components.*',
        'bootstrap.helpers.*',
        'bootstrap.behaviors.*',
        'bootstrap.widgets.*',
    ]
];