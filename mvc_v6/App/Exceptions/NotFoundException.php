<?php

namespace App\Exceptions;

use Exception;

/**
 * Classe abstrata responsável por definir o código da exceção, se o arquivo não
 * existir.
 */
class NotFoundException extends Exception
{
    protected $code = 404;
}