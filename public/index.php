<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Carrega todas as rotas
(require __DIR__ . '/../routes/index.php')($app);

$app->run();
