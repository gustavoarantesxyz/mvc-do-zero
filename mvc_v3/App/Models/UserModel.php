<?php

namespace App\Models;

use App\Core\Model;
use PDO;

/**
 * Classe UserModel (Modelo) que gerencia os dados, e os retorna para o
 * controller.
 */
class UserModel extends Model
{
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