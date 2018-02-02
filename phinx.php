<?php

require __DIR__ . '/vendor/autoload.php';

$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/src/dependencies.php';

$pdo = $container['db']->getPdo();

return [
    'paths' => [
        'migrations' => __DIR__ . '/src/db/migrations'
    ],
    'environments' => [
        'default_database' => 'development',
        'development' => [
            'name' => $container->get('settings')['db']['database'],
            'connection' => $pdo
        ]
    ]
];
