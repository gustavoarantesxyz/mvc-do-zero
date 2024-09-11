<?php

/**
 * Classe Model (Modelo) responsável por gerenciar e fornecer os dados.
 */
class Model
{
    private array $data;

    /**
     * Construtor da classe Model carrega os dados.
     */
    public function __construct()
    {
        require 'database.php';

        // Recupera todos os usuários do banco de dados fictício.
        $this->data = $database;
    }

    /**
     * Retorna todos os usuários.
     */
    public function getAllUsers(): array
    {
        return $this->data;
    }
}

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

/**
 * Classe View (Visão) que é responsável pela apresentação dos dados fornecidos
 * pelo Controller.
 * Exibe os dados de maneira formatada na página.
 */
class View
{
    /**
     * Exibe a lista de usuários em um formato simples de HTML.
     */
    public function show(array $data): void
    {
        echo '<center>';
        echo '<h1>All users</h1>';

        // Itera sobre os dados dos usuários e exibe seus detalhes.
        foreach ($data as $user) {
            echo "{$user[0]}, {$user[1]}, {$user[2]}<br>";
        }

        echo '<center>';
    }
}

// Inicializa o controlador e executa o método index.
$controller = new Controller();
$controller->index();