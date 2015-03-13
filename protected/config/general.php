<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Base App',
    'preload' => array(),
    'defaultController' => 'site',
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../vendor/crisu83/yiistrap'),
        'vendor'    => realpath(__DIR__ . '/../vendor')
    ),
    'import' => array(
        'application.actions.*',
        'application.models.*',
        'application.forms.*',
        'application.components.*',
        'bootstrap.helpers.*',
        'bootstrap.behaviors.*',
        'bootstrap.widgets.*',
    ),
);