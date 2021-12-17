# Criador Automático de CRUDs

#### Apenas indique o banco de dados e a tabela no conexao.php e ele cria seu CRUD com PDO, Bootstrap e Paginação, com suporte a MySQL e PostgreSQL garantidos e ainda outros SGBD via PDO.

### Mais facilidades para esta versão
Agora você pode apenas inserir o script.sql na pasta script e indicar no conexão que o auto-crud-pt irá criar o banco para ele e importar seu script

### Requisitos:
- Apache2
- PHP 5.5.9+
- MySQL 5.5+ ou PostgreSQL 8+

## Download
https://github.com/ribafs/auto-crud

## Instalação
Descompacte o pacote baixado e copie o diretório auto-crud para seu diretório web (renomeie a vontade).
Supondo que tenha mudado o nome para clientes.

## Instalando via composer
- Criar um diretório via terminal
- Acessar o diretório criado e executar:

composer require ribafs/auto-crud-pt

## Configuração

Edite o arquivo db_connnect.php e ajuste para as informações do seu banco de dados
Lembre também de indicar a tabela a ser usada.
Pode testar com os scripts existentes para mysql e para postgresql: clientes_my.sql e clientes_pg.sql na pasta scripts

Chame em seu navegador com
http://localhost/clientes

Ao abrir no navegador verá o grid com o CRUD como abaixo:

<img src="imagens/grid.png">

No grid acima verá a listagem dos registros existentes com paginação, edição, exclusão e adição de um novo registro.

Para inserir um novo registro clique no botão à esquerda Novo Registro

<img src="imagens/insert.png">

Para atualizar um dos registros clique no ícone Editar à esquerda e verá a tela:

<img src="imagens/update.png">

Para remover um registro apenas clique no link Excluir à direita do Editar e confirme na tela:

<img src="imagens/delete.png">

## Funcionamento

Após configurar o banco e a tabela e chamar pelo navegador ele trata cada um dos campos da tabela de forma particular usando para isso informações de metadados do SGBD.

## Customizações

O código com a paginação está no arquivo libs/ps_pagination.php.

## Releases

- 1.0 - Versão inicial
- 1.1 - Nesta versão os arquivos foram todos renomeados para nomes em português

      - Melhorados e traduzidos os comentários
      
      - Simplificação do código removendo código desnecessário
      
      - Criadas duas funções para substituir trechos de código que se repetiam. Inseri seu include na conexao.php para facilitar
      
      - Pequena alteração no css do cabeçalho e do rodapé

- 1.2 - Correçes devido aos ajustes da 1.1

- 1.3 - Separados os arquivos principais inserir, atualizar e excluir em dois. Agora o inserir é inserir e inserirdb.

- 1.4 - Agora ele cria o banco para você e importa seu script, basta indicar onde ele está no conexao.php

- 1.5 - Otimização das funções. Passando mais informações para elas e reduzindo a quantidade de parâmetros. Assim o código fica mais simples e mais fácil de entender. 
Estes são os objetivos principais: facilitar a vida do programador/usuário e simplificar/otimizar o código.

- 1.6 - Ainda continuando a otimização do código. Melhorando as funções e com isso tambéma a quantidade de linhas foi reduzida.

- 1.7 - Mais ajustes para o código. Otimizando para separar melhor e deixar fácil para converter para OO.

## AVISO
O principal objetivo deste pequeno software é o de facilitar a vida de quem não programa e nem está pensando em aprender e também o de facilitar para quem programa mas apenas quer criar algo rápido, como uma agenda ou um cadastro simples.

## Licença

MIT

Agradecimento ao site
https://www.codeofaninja.com/2011/06/paginating-your-data-with-ajax-and.html

Sem ele a paginação não seria tão elegante e eficiente.
