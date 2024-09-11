# MVC v6.1

Nesta versão, a estrutura da versão anterior foi mantida, mas agora as views
são renderizadas usando o sistema de templates **Plates**. A classe `View` foi
adaptada para integrar e renderizar as views através do Plates, oferecendo mais
flexibilidade e organização na renderização do conteúdo.

## Funcionamento

O funcionamento geral permanece o mesmo da versão anterior, com a adição do
Plates como sistema de templates para melhorar a gestão das views.

### Rotas disponíveis:
- `/`:          Página inicial
- `/about`:     Página "sobre"
- `/users`:     Página que lista todos os usuários
- `/user/{id}`: Página que exibe informações de um usuário específico

## Como usar

Requisitos:
- Apache
- PHP
- SQLite
- Composer

Siga os passos abaixo para configurar o projeto:
- Clone este repositório na pasta do Apache.
- Ative o **ModRewrite** com o comando `a2enmod rewrite`.
- Inicie o servidor **Apache**.
- Execute os comandos **DDL** e **DML** disponíveis no arquivo `db.sql`.
- Rode o comando `composer du` para gerar o autoload.
- Acesse a URL `http://localhost/mvc-do-zero/mvc_v6.1`.