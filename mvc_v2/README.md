# MVC v2

Nesta versão, as classes foram renomeadas para refletir uma arquitetura MVC mais
próxima da realidade. A classe `Controller` agora é `UserController`, a `Model`
foi renomeada para `UserModel`, e a `View` para `UserView`. Também foi
adicionado um banco de dados `SQLite`, com a conexão sendo feita através do
`PDO`. O `Composer` foi integrado para realizar o autoload das classes de acordo
com o padrão **PSR-4**.

## Funcionamento

As mudanças nesta versão foram focadas em melhorias internas, portanto, o
funcionamento geral permanece o mesmo da versão anterior.

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