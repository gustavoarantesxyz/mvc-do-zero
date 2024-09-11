<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Core\View;

/**
 * Classe UserController (Controlador) que recebe a requisição, e interage com
 * a Model e fornece os dados para a View.
 */
class UserController
{
    /**
     * Renderiza a view 'index' com os dados fornecidos da model.
     */
    public function index(): void
    {
        // Instancia a model.
        $userModel = new UserModel();

        // Obtém e armazena os dados da model.
        $data = $userModel->getAllUsers();

        // Renderiza a view 'index' na pasta 'user', passando os dados.
        View::render('user/index', ['data' => $data]);
    }
}