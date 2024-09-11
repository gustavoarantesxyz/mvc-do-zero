<?php

/**
 * Classe abstrata Database que simula a fonte de dados.
 */
abstract class Database
{
    /**
     * Retorna os dados
     */
    public static function getData(): array
    {
        return [
            [1, 'Ethan', 23],
            [2, 'Grace', 48],
            [3, 'Lucas', 52],
        ];
    }
}