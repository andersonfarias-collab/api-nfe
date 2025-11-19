<?php

use Slim\App;

return function (App $app) {

    // Carrega rotas públicas
    (require __DIR__ . '/web.php')($app);

    // Carrega rotas da API protegida
    (require __DIR__ . '/api.php')($app);

};
