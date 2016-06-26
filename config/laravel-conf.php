<?php

return [
    // possible values are 'file', 'database'
    'driver' => 'database',

    'drivers' => [
        'file' => [
            'path' => storage_path('app/conf.json'),
        ],
        'database' => [
            'table' => 'laravel_conf',
        ],
    ],
];
