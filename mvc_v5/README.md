# MVC v5

Nesta versão, foi adicionado o método `sanitizeParams` para sanitizar os
parâmetros da URI, melhorando a segurança e confiabilidade da aplicação.
A captura da URI foi separada em uma nova classe chamada `URI`, promovendo
melhor responsabilidade ao reduzir a sobrecarga da classe `Router`. Além disso,
dois arquivos `.htaccess` foram adicionados para garantir que todas as
requisições sejam redirecionadas ao `index.php`, que serve como ponto de entrada
do projeto. Foram incluídas exceções na classe `Router` para lidar com situações
em que o controller ou o método não existem, ou quando uma rota válida não é
encontrada.

## Funcionamento

Esta versão se concentra em melhorias internas, mantendo o funcionamento igual
ao da versão anterior. Agora, os parâmetros da URI são sanitizados e, em caso de
erros, como a inexistência de controllers, métodos ou rotas, uma exceção
apropriada será lançada, oferecendo um tratamento mais robusto.

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
- Acesse a URL `http://localhost/mvc-do-zero/mvc_v5`.