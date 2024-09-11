<?php

namespace App\Exceptions;

use Exception;

/**
 * Classe abstrata responsável por definir o código da exceção, se o método não
 * existir.
 */
abstract class MethodNotAllowedException extends Exception
{
    protected $code = 405;
}