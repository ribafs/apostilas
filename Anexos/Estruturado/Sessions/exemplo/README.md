# Login Multi

## Alerta

Para uso em produção é recomendado um framework, pois estes contam com equipes especializadas em segurança e que assim podem garantir mais esta parte de um site ou aplicativo. Divulgo aqui por que é o melhor e xemplo que encontrei sobre login múltiplo e fiz algumas adaptações, portanto é algo didático para aprendizado.

## Nesta fase

Preparei em várias fases, como gosto de fazer para guardar sempre um backup e verificar a evolução.

Nesta fase irei implementar uma área administrativa para gerenciamento dos usuários e roles.

Para isso criarei um CRUD com acesso restrito aos usuários super.

Usei o auto-app para fazer isso e dando permissão ao usuário super de gerenciar users e roles.

Nesta fase o objetivo é implementar o hash do php

Também criei no admin/index.php um menu de acordo com a role.
Onde deve ser criado um menu com todos os itens que o usuário tenha acesso.
Ele irá acessar somente o que tem direito.

Adicionei e implementei o campo enabled na tabela users, para poder controlar cada usuário.
Se enabled = false ele não conecta. Somente se true.

Usuário cadastrado, mas pode cadastrar outros. Lembre que somente o tipo super tem acesso ao crud de administração dos usuários
- login - admin@gmail.com
- senha - admin123

## Licença

MIT
