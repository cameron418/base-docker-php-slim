<?php
// Application configuration

return [
    'settings' => [
        'displayErrorDetails' => true,

        'db' => [
            'host'   => getenv('DB_HOST'),
            'user'   => getenv('DB_USER'),
            'pass'   => getenv('DB_PASSWORD'),
            'dbname' => getenv('DB_DATABASE'),
        ],
    ],
];
