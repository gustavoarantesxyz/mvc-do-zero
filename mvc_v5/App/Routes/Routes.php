<?php

namespace App\Routes;

/**
 * Classe responsável por definir as rotas da aplicação.
 */
abstract class Routes
{
   /**
     * Retorna o mapeamento de rotas.
     */
    public static function getRoutes()
    {
        return [
            '/'          => 'HomeController@index',
            '/about'     => 'HomeController@about',

            '/users'     => 'UserController@index',
            '/user/{id}' => 'UserController@show'
        ];
    }
}