# Login Multi

## Alerta de Bug

Se você estiver usando a versão 7.4 do PHP aparecerão mensagens de erro no registro. Esbora não interfiram no resultado é algo chato. No PHP 7.3 e anteriores não acontece isso.

## Em produção
Proteja o registro, pois ficará aberto.

Com uma área administrativa para gerenciamento dos usuários e roles.

Para isso tenho um CRUD com acesso restrito aos usuários com role super.

Usei o auto-app para fazer isso e dando permissão ao usuário super de gerenciar users e roles.

Implementei o hash do php

Também criei no admin/index.php um menu de acordo com a role.
Onde deve ser criado um menu com todos os itens que o usuário tenha acesso.
Ele irá acessar somente o que tem direito.

Adicionei e implementei o campo enabled na tabela users, para poder controlar cada usuário.
Se enabled = false ele não conecta. Somente se true.

Usuário cadastrado, mas pode cadastrar outros/register. Lembre que somente o tipo super tem acesso ao crud de administração dos usuários
login - admin@gmail.com
senha - admin123

## Licença

MIT
