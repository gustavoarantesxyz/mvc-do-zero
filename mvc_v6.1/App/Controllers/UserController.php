<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Core\View;

/**
 * Classe UserController (Controlador) reponsável por gerenciar as requisições
 * relacionadas aos usuários, e interagir com a model UserModel e fornece os
 * dados necessários para renderizar as views.
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
     * Renderiza a view 'show' com os dados fornecido da model com base no ID.
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