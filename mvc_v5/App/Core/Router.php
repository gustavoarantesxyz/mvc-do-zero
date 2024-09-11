<?php

namespace App\Core;

use App\Routes\Routes;
use App\Core\Uri;
use App\Exceptions\MethodNotAllowedException;
use App\Exceptions\NotFoundException;

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

        // Obtém e armazena as rotas definidas.
        $this->uri = Uri::getUri();

        // Executa o sistema de roteamento com as rotas e URI carregadas.
        $this->execute();
    }

    /**
     * Executa o sistema de rotas.
     */
    private function execute(): void
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
                [$controllerName, $actionName] = explode('@', $controllerAndAction);

                // Define o namespace completo do controlador.
                $controllerNamespace = "App\\Controllers\\{$controllerName}";

                // Verifica se o controlador existe, caso contrário lança uma exceção.
                if (!class_exists($controllerNamespace)) {
                    throw new NotFoundException('<center><h1>404 - Controller not found!</h1></center>');
                }

                // Instancia o controlador.
                $controller = new $controllerNamespace;

                // Verifica se o método do controlador existe, caso contrário lança uma exceção.
                if (!method_exists($controller, $actionName)) {
                    throw new MethodNotAllowedException('<center><h1>405 - Method not found!</h1></center>');
                }

                // Invoca o método do controlador sem parâmetros.
                $controller->$actionName(...$this->sanitizeParams($matches));

                exit;
            }
        }

        // Se nenhuma rota corresponder, lança uma exceção de rota não encontrada.
        throw new NotFoundException('<center><h1>404 - Route not found!</h1></center>');
    }

    /**
     * Sanitiza os parametros da URI.
     */
    private function sanitizeParams(array $params): array
    {
        return array_map('htmlspecialchars', $params);
    }
}