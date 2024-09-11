<?php

require '../vendor/autoload.php';

use App\Core\Router;

/**
 * Ponto de entrada da aplicação que inicializa o sistema de roteamento.
 */
try {
    $router = new Router();
} catch (Exception $e) {
    echo $e->getMessage();
}