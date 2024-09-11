<?php

/**
 * Classe View (Visão) que é responsável pela apresentação dos dados fornecidos
 * pelo Controller.
 */
class View
{
    /**
     * Exibe a lista de usuários em um formato simples de HTML.
     */
    public function show(array $data): void
    {
        echo "<center>";
        echo '<h1>All users</h1>';

        // Itera sobre os dados e imprime seus valores.
        foreach ($data as $user) {
            echo "{$user[0]}, {$user[1]}, {$user[2]}<br>";
        }

        echo "<center>";
    }
}