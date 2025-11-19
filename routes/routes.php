<?php
use Slim\App;

return function (App $app) {

    // Rota principal (GET /)
    $app->get('/', function ($req, $res) {
        $res->getBody()->write(json_encode([
            'status' => 'ok',
            'message' => 'API-NFe rodando'
        ]));
        return $res->withHeader('Content-Type','application/json');
    });

    // Rota de teste (GET /ping)
    $app->get('/ping', function ($req, $res) {
        $res->getBody()->write(json_encode(['pong' => true]));
        return $res->withHeader('Content-Type','application/json');
    });

};
