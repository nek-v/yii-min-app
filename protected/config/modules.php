<?php

return [
    'modules' => [
        'gii' => [
            'class' => 'system.gii.GiiModule',
            'password' => 'password',
            'ipFilters' => ['127.0.0.1', '::1'],
            'generatorPaths' => ['bootstrap.gii'],
        ]
    ]
];