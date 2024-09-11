# MVC v6

Nesta versão, a classe `Router` foi ajustada para funcionar com query strings na
URI. O método `handleQueryString` foi adicionado para lidar com essas query 
strings. Além disso, foram implementados **partials** para as views, permitindo
que elas compartilham uma estrutura HTML base. O contéudo das páginas foi
melhorado com estilização feita com Bootstrap. Tabém foi adicionado um arquivo
`config.php` na pasta raiz do projeto, que contém a constante da URL base do
projeto, utilizada para limpar a URI na classe `Uri`. A classe `View` também foi
ajustada para renderizar os partials da pasta views.

## Funcionamento

A partir da view `index`, é possível filtrar usuários pelo ID. O formulário
envia o ID como parte da URI, que é processada pelo método handleQueryString da
classe `Router`. Esse método captura a URI e o parâmetro, redireciona para
limpar a URL e fornece a nova URI para a classe `Router`. A classe `Router`
define qual controlador e método devem ser instanciados, além de sanitizar o
parâmetro. Agora é possível acessar um usuário tanto pela rota `/user/1` quanto
por `/user?id=1`, que levam ao mesmo resultado — listar o usuário de ID 1.

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
- Acesse a URL `http://localhost/mvc-do-zero/mvc_v6`.