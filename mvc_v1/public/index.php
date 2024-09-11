<?php

/**
 * Função de autoload que carrega as classes.
 */
spl_autoload_register(function($className) {
    // Define o diretório base.
    $baseDir = dirname(__DIR__, '1') . '/App/';

    // Subdiretórios onde as classes podem estar localizadas.
    $paths = [
        'Controllers/', // Diretório para controladores.
        'Models/',      // Diretório para modelos.
        'Views/',       // Diretório para views.
        'Database/'     // Diretório do banco de dados.
    ];

    // Itera sobre cada diretório do array $paths.
    foreach ($paths as $path) {
        // Caminho compoleto para o arquivo da classe.
        $file = "{$baseDir}{$path}{$className}.php";

        // Verifica se o arquivo existe.
        if (file_exists($file)) {
            // Inclui o arquivo da classe.
            require_once $file;

            // Interrompe o loop.
            break;
        }
    }
});

// Intacia o controller.
$controller = new Controller();

// Invoca o método do controller.
$controller->index();