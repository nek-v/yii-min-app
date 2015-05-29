<?php

return [
    'components' => [
        'errorHandler' => [
            'errorAction' => 'error/index',
        ],
        'urlManager' => [
            'urlFormat' => 'path',
            'showScriptName' => false,
        ],
        'bootstrap' => [
            'class' => 'bootstrap.components.TbApi',
        ]
    ]
];
