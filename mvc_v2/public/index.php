<?php

require '../vendor/autoload.php';

use App\Controllers\UserController;

/**
 * Ponto de entrada da aplicação.
 */
$controller = new UserController();
$controller->index();