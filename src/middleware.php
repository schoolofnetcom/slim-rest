<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

$app->add(new \Slim\Middleware\JwtAuthentication([
    'regexp' => '/(.*)/',
    'header' => 'Authorization',
    'path' => '/api',
    'realm' => 'Protected',
    'secret' => $container['settings']['secretKey']
]));

$app->add(function ($req, $res, $next) {
    $token = filter_input(INPUT_GET, 'token');
    if ($token) {
        $req = $req->withHeader('Authorization', $token);
    }

    return $next($req, $res);
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Authorization, Origin, Accept')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});
