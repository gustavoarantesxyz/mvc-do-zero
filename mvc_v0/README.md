# MVC v0

Esta é a versão inicial do projeto MVC, apresentando uma implementação básica
com as separações entre Model, Controller e View. A estrutura consiste em dois
arquivos principais: `index.php`, que contém a lógica do MVC, e `database.php`,
que simula um banco de dados com dados de exemplo.

## Funcionamento:

No final do arquivo `index.php`, o `Controller` é instanciado, simulando uma
requisição do cliente. O `Controller` cria uma instância da classe `Model`.
No construtor da `Model`, é feito um `require` do arquivo `database.php`, que
contém um array de usuários, simulando a conexão com o banco de dados. 
Este array é atribuído à propriedade `$data` da `Model`. A classe `Model` possui
o método `getAllUsers`, que retorna o array `$data` para o `Controller`.
O `Controller` armazena este retorno na variável `$data`, instancia a classe
`View`, e passa a variável para o método da `View`. A classe `View` então
percorre o array `$data` e exibe os dados na tela.

Requisitos:
- PHP

Siga os passos abaixo para configurar o projeto:
- Clone este repositório.
- Inicie o servidor embutido do PHP `php -S localhost:8888`
- Acesse a URL `http://localhost:8888`.