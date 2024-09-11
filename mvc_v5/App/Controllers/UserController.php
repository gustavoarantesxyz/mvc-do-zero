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

    /**
     * Método que solicita um dado de acordo com o ID para a model, (ID que
     * foi informado na URL) e passa o retorno para a view.
     */
    public function show($id): void
    {
        // Instancia a model.
        $userModel = new UserModel();

        // Obtém e armazena os dados da model com o ID especificado.
        $data = $userModel->getUserById($id);

        // Renderiza a view 'show' na pasta 'user', passando os dados.
        View::render('user/show', ['data' => $data]);
    }
}