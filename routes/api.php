<?php
use Slim\App;

return function (App $app) {

    // Grupo de rotas protegidas (vamos adicionar middleware Supabase JWT depois)
    $app->group('/api', function (App $api) {

        // Empresas
        $api->get('/empresas', \App\Controllers\EmpresaController::class . ':listar');
        $api->post('/empresas', \App\Controllers\EmpresaController::class . ':criar');
        $api->put('/empresas/{id}', \App\Controllers\EmpresaController::class . ':atualizar');
        $api->delete('/empresas/{id}', \App\Controllers\EmpresaController::class . ':excluir');

        // Certificados A1
        $api->post('/certificado/upload', \App\Controllers\CertificadoController::class . ':upload');
        $api->get('/certificado/{empresa_id}', \App\Controllers\CertificadoController::class . ':verificar');

        // Emissão de NF-e
        $api->post('/nfe/emitir', \App\Controllers\NFeController::class . ':emitir');
        $api->get('/nfe/consultar/{chave}', \App\Controllers\NFeController::class . ':consultar');

    });

};
