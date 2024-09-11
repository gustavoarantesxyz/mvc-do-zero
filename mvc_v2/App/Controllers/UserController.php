<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Views\UserView;

/**
 * Classe UserController (Controlador) que recebe a requisição, e interage com
 * a Model e fornece os dados para a View.
 */
class UserController
{
    /**
     * Renderiza a view com os dados fornecidos da model.
     */
    public function index(): void 
    {
        // Instancia a model.
        $model = new UserModel();

        // Obtém e armazena os dados da model.
        $data = $model->getAllUsers();

        // Instancia a view.
        $view = new UserView();

        // Invoca o método da view passando os dados.
        $view->show($data);
    }
}