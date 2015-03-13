<?php

$yii=  dirname(__FILE__).DIRECTORY_SEPARATOR.'/protected/vendor/yiisoft/yii/framework/yii.php';

defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'production'));
//
if (APP_ENV == 'dev') {
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
} else {
    define('YII_DEBUG', false);
}

$config = dirname(__FILE__).'/protected/config/'.APP_ENV.'.php';
require_once($yii);
Yii::createWebApplication($config)->run();
