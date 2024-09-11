# MVC v3

Nesta versão, foi adicionada a classe `Router` para gerenciar o roteamento do
MVC, além da classe `Model`, que centraliza a conexão com o banco de dados, e a
classe `View`, responsável pela renderização das views. Um bloco `try...catch`
foi incluído no arquivo `index.php` para tratar exceções, enquanto as views
foram organizadas em arquivos separados na pasta `View`. Também foi criada a
classe `Routes`, para definir as rotas, e o `HomeController` foi adicionado como
um novo controller para a página inicial.

## Funcionamento

O ponto de entrada do projeto é o arquivo `index.php`, que instancia a classe
`Router`. No construtor da classe `Router`, as rotas são armazenadas e a URI da
URL é definida, ativando o sistema de rotas.

Durante a execução, o sistema verifica se a URI atual corresponde a uma das 
rotas definidas. Se a rota for válida, o controller e o método são extraídos da
URI. O namespace completo do controller é definido, o controller é instanciado,
e o método correspondente é executado. Se a rota não for encontrada, uma exceção
é lançada.

### Rotas disponíveis:
- `/`:          Página inicial
- `/about`:     Página "sobre"
- `/users`:     Página que lista todos os usuários

## Como usar

Requisitos:
- PHP
- SQLite
- Composer

Siga os passos abaixo para configurar o projeto:
- Clone este repositório.
- Execute os comandos **DDL** e **DML** disponíveis no arquivo `db.sql`.
- Rode o comando `composer du` para gerar o autoload.
- Inicie o servidor embutido do PHP `php -S localhost:8888 -t public`.
- Acesse a URL `http://localhost:8888`.