<?php

namespace App\Core;

use Exception;

/**
 * Classe responsável por renderiza as views da aplicação.
 */
class View
{
    /**
     * Renderiza uma view com base no nome do arquivo fornecido.
     * Se dados forem passados, eles serão extraídos e disponibilizado na view.
     */
    public static function render(string $viewName, array $data = []): void
    {
        // Caminho completo do arquivo da view.
        $viewFilePath = dirname(__DIR__, 1) . "/Views/{$viewName}.php";

        // Lança exceção se o arquivo da view não for encontrado.
        if (!file_exists($viewFilePath)) {
            throw new Exception('<center><h1>404 - View file not found!</h1></center>');
        }

        // Extrai os dados passados e os disponibiliza como variáveis na view.
        extract($data);

        // Inclui a view solicitada.
        require $viewFilePath;
    }
}