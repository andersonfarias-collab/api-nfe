<?php
use Slim\App;

return function (App $app) {
    $app->get('/ping', function ($req, $res) {
        $res->getBody()->write(json_encode(['pong'=>true]));
        return $res->withHeader('Content-Type','application/json');
    });
};
