<?php

namespace App\Core;

/**
 * Classe abstrata que fornece métodos para capturar e normalizar a URI da URL
 */
abstract class Uri
{
    /**
     * Obtém e retorna a URI da requisição atual.
     */
    public static function getUri(): string
    {
        // Armazena a URI.
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Caminho base do projeto.
        $baseUrl = '/mvc-do-zero/mvc_v5';

        // Remove a URL base da URI.
        if (strpos($uri, $baseUrl) === 0) {
            $uri = substr($uri, strlen($baseUrl));
        }

        // Remove a barra final da URI.
        return $uri !== '/' ? rtrim($uri, '/') : $uri;
    }
}