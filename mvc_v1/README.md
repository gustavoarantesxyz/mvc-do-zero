# MVC v1

Nesta versão, os componentes do MVC foram organizados em suas respectivas pastas,
seguindo a estrutura padrão do MVC. O `Model`, `Controller`, e `View`, que antes
estavam no arquivo `index.php`, agora estão alocados nas pastas apropriadas
dentro de `App`. Foi implementado o autoload das classes utilizando a função
`spl_autoload_register`, facilitando o carregamento automático das classes.
Além disso, o arquivo `database.php` foi convertido em uma classe.

## Funcionamento

No arquivo `index.php`, o autoload de todas as classes é executado, e a classe
`Controller` é instanciada diretamente. O fluxo segue o mesmo da versão anterior:
o `Controller` instancia o `Model`, que carrega os dados, e depois instancia a
`View`, passando os dados para a renderização.

## Como usar

Requisitos:
- PHP

Siga os passos abaixo para configurar o projeto:
- Clone este repositório.
- Inicie o servidor embutido do PHP `php -S localhost:8888`.
- Acesse a URL `http://localhost:8888`.