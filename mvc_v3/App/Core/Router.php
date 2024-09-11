<?php

namespace App\Core;

use App\Routes\Routes;
use Exception;

/**
 * Classe Router que gerencia o sistema de rotas da aplicação.
 */
class Router
{
    private array $routes;
    private string $uri;

    /**
     * Construtor que carrega as rotas e a URI da requisição atual.
     */
    public function __construct()
    {
        // Obtém e armazena as rotas definidas.
        $this->routes = Routes::getRoutes();

        // Armazena a URI da requisição atual.
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Executa o sistema de roteamento com as rotas e URI carregadas.
        $this->execute();
    }

    /**
     * Executa o sistema de rotas.
     */
    public function execute(): void
    {
        // Verifica se a URI existe no array de rotas.
        if (array_key_exists($this->uri, $this->routes)) {
            // Divide o controlador e o método a partir da rota correspondente.
            [$controllerName, $methodName] = explode('@', $this->routes[$this->uri]);

            // Define o namespace completo do controlador.
            $controllerNamespace = "App\\Controllers\\{$controllerName}";

            // Instancia o controlador.
            $controllerInstance = new $controllerNamespace();

            // Invoca o método do controlador.
            $controllerInstance->$methodName();
        } else {
            http_response_code(404);

            // Se nenhuma rota corresponder, lança uma exceção de rota não encontrada.
            throw new Exception('<center><h1>404 - Route not found!</h1></center>') ;
        }
    }
}