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

        // Remove a barra final da URI.
        $this->uri != '/' ? rtrim($this->uri, '/') : $this->uri;

        // Executa o sistema de roteamento com as rotas e URI carregadas.
        $this->execute();
    }

    /**
     * Executa o sistema de rotas.
     */
    public function execute(): void
    {
        // Percorre todas as rotas.
        foreach ($this->routes as $path => $controllerAndAction) {
            // Substitui o placeholder {id} por um padrão de expressão regular.
            $pattern = '#^' . preg_replace('/{id}/', '(\d+)', $path) . '$#';

            // Verifica se a URI atual corresponde ao padrão de rota.
            if (preg_match($pattern, $this->uri, $matches)) {
                // Remove o primeiro valor do array $matches (a URI completa).
                array_shift($matches);

                // Divide o controlador e o método a partir da rota correspondente.
                [$controllerName, $methodName] = explode('@', $controllerAndAction);

                // Define o namespace completo do controlador.
                $controllerNamespace = "App\\Controllers\\{$controllerName}";

                // Instancia o controlador.
                $controller = new $controllerNamespace();

                // Invoca o método do controlador passando o parâmetro.
                $controller->$methodName(...$matches);

                exit;
            }
        }
        http_response_code(404);

        // Se nenhuma rota corresponder, lança uma exceção de rota não encontrada.
        throw new Exception('<center><h1>404 - Route not found!</h1></center>') ;
    }
}