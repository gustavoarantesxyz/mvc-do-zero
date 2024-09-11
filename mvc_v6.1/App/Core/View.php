<?php

namespace App\Core;

use App\Exceptions\NotFoundException;
use League\Plates\Engine;

/**
 * Classe responsável por renderiza as views da aplicação.
 */
abstract class View
{
    /**
     * Renderiza uma view com base no nome do arquivo fornecido.
     * Se dados forem passados, eles serão extraídos e disponibilizado na view.
     */
    public static function render(string $viewName, array $data = []): void
    {
        // Caminho completo do arquivo da view.
        $viewPath = dirname(__DIR__, 1) . '/Views';

        // Lança exceção se o arquivo da view não for encontrado.
        if (!file_exists($viewPath . DIRECTORY_SEPARATOR . $viewName . '.php')) {
            throw new NotFoundException('<h1>404 - View file not found</h1>');
        }

        // Instancia o Plates.
        $templates = new Engine($viewPath);

        // Renderiza o template e extrai os dados.
        echo $templates->render($viewName, $data);
    }
}