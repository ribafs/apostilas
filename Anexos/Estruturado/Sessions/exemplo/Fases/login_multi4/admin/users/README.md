# CRUD Automático

## In English
![](images/en.png) https://github.com/ribafs/auto-crud/README-en.md

Temos apenas duas classes, Connection() e Crud() com bons métodos e os arquivos básicos do CRUD em core. Você não precisará digitar nenhum nome de campo e nenhuma linha de código. Ele gerará automaticamente o código de um CRUD para cada tabela do banco de dados, não importando quantas sejam.

## URL deste projeto

https://github.com/ribafs/auto-app

## Requisitos:

- PHP (estou usando a 7.2, mas deve funcionar também nas 5.x)
- Servidor web suportado pelo PHP, inclusive o nativo
- MySQL ou PostgreSQL (com pequenas adaptações também roda nos demais suportados pelo PDO)
- Permissão de escrita para o servidor web na pasta do aplicativo (em sistemas Linux ou similares)
- Para que tudo funcione a contento precisa que cada tabela tenha a chave primária chamada "id". Existe como capturar o nome da chave primária de cada tabela mas me daria mais trabalho.

## Recursos:

- PHP com PDO
- Paginação de resultados com bootpag
- Busca integrada
- BootStrap 4

## Instalação:

- Faça o download e descompacte no diretório web. Exemplo: /var/www/html/auto-app ou c:\xampp\htdocs\auto-app
- Crie o banco de dados ou use um existente
- E chame pelo navegador com - http://localhost/auto-app
- Abrirá o formulário para entrada dos dados do banco, como abaixo:

![](images/form.png)

- Entre com os dados do banco e com o nome da tabela e clique em Send
Já estará em frente ao menu com links para todas as tabelas do banco, como a tela abaixo

![](images/menu.png)

Clique em um link para ver o CRUD completo para a tabela selecionada:

![](images/crud.png)

## Origem

Este software partiu do aplicativo "crud_phpoo" do retpositório:
https://github.com/ribafs/aplicativos-php

## Para mudar de tabela:

- Pode editar manualmente o classes/connection.php
- Ou simplesmente remover o classes/connection.php e chamar novamente - http://localhost/auto-app

## Aprendizado:

A construção deste software me adicionou um grande aprendizado de PHP, especialmente sobre os metadados do MySQL e PostgreSQL e sobre a manipulação de strings. Caso seja um programador iniciante ou médio de PHP recomendo que estude o código para aprender os conhecimentos envolvidos.

## CRUD Automático

Tenho também o auto-crud, que faz esta mesma mágica mas somente para uma única tabela de um banco.
https://github.com/ribafs/auto-crud

## Créditos

A paginação básica que utilizei para criar este aplicativo foi encontrada no site abaixo:

https://www.kodingmadesimple.com/2017/01/simple-ajax-pagination-in-jquery-php-pdo-mysql.html

## Licença

MIT

## Sugestões

Serão muito bem vindos:
- Issues (erros, sugestões)
- Forks
- Pull Requests

