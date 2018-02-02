<?php

use Slim\Http\Request;
use Slim\Http\Response;

$container['db'];

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->options('/{routes:.+}', function ($req, $res, $args) {
    return $res;
});

require __DIR__ . '/routes/auth.php';
require __DIR__ . '/routes/users.php';
