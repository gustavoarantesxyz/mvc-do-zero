<?php

require '../vendor/autoload.php';

use App\Core\Router;
use App\Exceptions\MethodNotAllowedException;
use App\Exceptions\NotFoundException;

/**
 * Ponto de entrada da aplicação que inicializa o sistema de roteamento.
 */
try {
    $router = new Router();
} catch (MethodNotAllowedException | NotFoundException $e) {
    http_response_code($e->getCode());
    echo $e->getMessage();
} catch (\Exception $e) {
    http_response_code(500);
    echo '<center><h1>500 - Internal server error!</h1></center>';
}