<?php

defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'production'));
$yiic = dirname(__FILE__) . '/vendor/yiisoft/yii/framework/yiic.php';
$config = dirname(__FILE__) . '/config/console.php';
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));

if (APP_ENV === 'dev') {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
}

require_once($yiic);

if (isset($config)) {
    $app = Yii::createConsoleApplication($config);
    $app->commandRunner->addCommands(YII_PATH . '/cli/commands');
} else {
    $app = Yii::createConsoleApplication(array('basePath' => dirname(__FILE__) . '/cli'));
}

$env = @getenv('YII_CONSOLE_COMMANDS');
if (!empty($env)) {
    $app->commandRunner->addCommands($env);
}

$app->run();
