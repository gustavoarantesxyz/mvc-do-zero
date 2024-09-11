<?php

namespace App\Controllers;

use App\Core\View;

/**
 * Classe HomeController (Controlador) responsável por gerenciar as requisições
 * e renderizar as views.
 */
class HomeController
{
    /**
     * Renderiza a view 'index'.
     */
    public function index(): void 
    {
        // Renderiza a view 'index' na pasta 'home'.
        View::render('home/index');
    }

    /**
     * Método que renderiz a view about.
     */
    public function about(): void
    {
        // Renderiza a view 'about', na pasta 'home'.
        View::render('home/about');
    }
}