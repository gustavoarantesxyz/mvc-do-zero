<?php

namespace App\Core;

use PDO;
use PDOException;

/**
 * Classe base abstrata para todos as models, centralizando a conexeção com o
 * banco de dados.
 */
abstract class Model
{
    protected PDO $pdo;

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
}