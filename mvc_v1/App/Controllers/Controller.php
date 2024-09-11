<?php

/**
 * Classe Controller (Controlador) que gerencia a interação entre a Model e
 * a View. Recebe as requisições, obtém os dados da Model e os passa para a View.
 */
class Controller
{
    /**
     * Método principal que lida com a requisição inicial.
     * Recupera todos os usuários da Model e exibe na View.
     */
    public function index(): void
    {
        // Instancia a Model.
        $model = new Model();

        // Obtém e armazena os dados.
        $data = $model->getAllUsers();

        // Instancia a View.
        $view = new View();

        // Invoca o método da view passando os dados.
        $view->show($data);
    }
}