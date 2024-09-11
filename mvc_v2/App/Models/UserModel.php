<?php

namespace App\Models;

use PDO;
use PDOException;

/**
 * Classe Model (Modelo) responsável por gerenciar e fornecer os dados.
 */
class UserModel
{
    private PDO $pdo;

    /**
     * Construtor que inicializa a conexão com o banco de dados.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * Estabelece uma conexão com o banco de dados utilizando o PDO.
     */
    private function connect(): void
    {
        try {
            // Caminho completo para o arquivo do banco de dados SQLite.
            $dbFilePath = dirname(__DIR__, 1) . '/Database/users.db';

            // Inicializa a conexão PDO com o banco de dados SQLite.
            $this->pdo = new PDO("sqlite:{$dbFilePath}");

            // Define o modo de tratamento de erros do PDO para lançar exceções.
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Exibe a mensagem de erro em caso de falha na conexão.
            echo $e->getMessage();
        }
    }

    /**
     * Retorna todos os usuários do banco de dados.
     */
    public function getAllUsers(): array
    {
        // Prepara a consutla SQL para selecionar todos os usuários.
        $stmt = $this->pdo->prepare('SELECT * FROM users');

        // Executa a cosulta preparada.
        $stmt->execute();

        // Retorna os resultados como uma lista de objetos.
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}