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
        // Obtém e armazena os dados.
        $this->data = Database::getData();
    }

    /**
     * Retorna todos os usuários.
     */
    public function getAllUsers(): array
    {
        return $this->data;
    }
}