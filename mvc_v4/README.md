# MVC v4

Nesta versão, o método `execute` da classe `Router` foi ajustado para lidar com
parâmetros na URI utilizando expressões regulares. Quando há um parâmetro na
URI, ele é extraído e passado para o método correspondente do controller,
permitindo, por exemplo, listar um usuário específico.

## Funcionamento

O ponto de entrada do projeto é o arquivo `index.php`, que instancia a classe
`Router`. O construtor da classe `Router` armazena as rotas e define a URI da
URL, executando o sistema de rotas.

Durante a execução, o sistema de rotas verifica se a URI atual corresponde a
uma das rotas definidas no array de rotas. Se houver correspondência, o sistema
divide o controller e o método com base na URI. Caso a URI contenha um parâmetro,
ele será extraído e passado ao método do controller.

Em seguida, o namespace completo do controller é definido, o controller é
instanciado, e o método é chamado, com o parâmetro sendo passado, se aplicável.
Se não houver uma rota correspondente, uma exceção é lançada.

### Rotas disponíveis:
- `/`:          Página inicial
- `/about`:     Página "sobre"
- `/users`:     Página que lista todos os usuários
- `/user/{id}`: Página que exibe informações de um usuário específico

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