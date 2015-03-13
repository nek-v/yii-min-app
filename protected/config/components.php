<?php

return array(
    'components' => array(
        'errorHandler' => array(
            'errorAction' => 'error/index',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
        ),
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        )
    )
);
