# CRUD em PHP Orientado a Objetos

Partindo de um pequeno script de paginação que usa o plugin do jQuery bootpag.

## Na fase anterior

Estarei adicionando os arquivos update.php e delete.php assim como as respectivas chamadas no fetch_data.php. Depois de adicionar o de.ete.php estarei usando o confirm do javascript para remover os registros sem usar o delete.php

Com isso dow o CRUD por concluído e agora vamos partir para o Controle de Estoque propriamente dito. Também aqui iremos bem devagar, passo-a-passo, para facilitar o entendimento.

## Ne fase anterior

Para isso farei algumas alterações no index.php e no fetch_data.php e adicionarei os arquivos update.php e o delete.php. Existe uma opção de usar no index.php um confirm do javascript e dependendo da escolha do usuário já remover o registro, sem a necessidade de mostrar este pedido de confirmação em um arquivo. Eu prefiro isso, mas vou mostrar as duas formas.

Veja:
```
	    <td><a href="delete.php?id=<?=$row['id']?>"><i class="glyphicon glyphicon-remove-circle" title="Excluir"></a></td>
//ou
        <td><a onclick="return confirm('Realmente excluir o cliente <?=$name?> ?')" href="delete.php?id=<?=$id?>&table=<?=$table?>"><i class="glyphicon glyphicon-remove-circle" title="Delete"></a></td></tr>
```

Renomeei o db_connect.php para connect.php

## Um milhão de registros

Nesta fase resolvi gerar um script .sql com um milhão de registros, que gastou uns 15 minutos no meu notebook i5, com 8GB de RAM.

Tive que configurar o MariaDb assim:

https://github.com/professor/Backend/SGBD/MySQL/mysql_import_bigs.txt

O sql ficou com 74.4 MB.

Pra importar não demorou quase nada:

mysql -uroot estoque < db.sql

Esta plugin é ótimo, pois agora testando com um milhão de regsitros não percebo que ficou mais lento.


## Na fase anterior

Adicionarei a busca, implementando o botão e a caixa de texto no index.php e o arquivo search.php.

## Frontend

Observe que não estou comentando sobre o código do frontend. Realmente o bootstrap facilita muito este trabalho, por isso que o utilizo, visto que meu foco pra valer é no backend, mas é importante observar como ele funciona. Por conta disso adicionei um um pequeno tutorial sobre as classes do bootstrap usadas neste projeto. Lembre que a versão que usei foi a 3, apenas segui a usada no projeto original da paginação. Para adaptar para a versão 5 precisa fazer algumas poucas adaptações.

## Na fase anterior

Iniciei a criação do CRUD partindo da paginação, que já traz a primeira parte do cRUD, que é a listagem, formada pelo index.php e o fetch_data.php

Adicionarei os respectivos botões no index.php para: add.php, update.php e delete.php. Também estarei adicionando a busca (search.php).

## Na fase anterior

Estarei criando os arquivos header.php e footer.php que serão incluídos em todas as páginas tipo view, onde eles aparecem.

Importante em termos de reutilização de código, pois ao invés de repetir o código do cabeçalho e rodapé nas páginas, estaremos apenas incluindo. Isto facilita e muito a manutenção do aplicativo. Caso encessitemos alterar o código nestas regiões alteraremos apenas uma vez no arquivo (header ou footer) e ele será atualizado automaticamente em todas as páginas em que são incluídos.

## Na fase anterior

Agora estarei apenas organizando melhor as pastas:

- Criarei uma pasta chamada 'assets' e moverei para ela as pastas css, fonts e js

Na próxima fase criarei um CRUD

## Na fase anterior

Melhorei a paginação, seguindo um exemplo do site oficial do bootpag (Full example com todos os recursos dispíveis. Troquei as setas pelas palavras: Primeira e Última)

https://botmonster.com/jquery-bootpag/

Aproveitei e criei um fork do mesmo, para apoiá-lo e para manter uma cópia do mesmo por perto.

Bons recursos

Parameters $(element).bootpag({...})

    - total number of pages
    - maxVisible maximum number of visible pages
    - page page to show on start
    - leaps next/prev buttons move over one page or maximum visible pages
    - next text (default »)
    - prev text (default «)
    - href template for pagination links (default javascript:void(0);)
    - hrefVariable variable name in href template for page number (default {{number}})
    - firstLastUse do we ant first and last (default true<)/li>
    - first name of first (default 'FIRST')
    - last name of last (default 'LAST')
    - wrapClass css class for wrap (default 'pagination')
    - activeClass css class for active (default 'active')
    - disabledClass css class for disabled (default 'disabled')
    - nextClass css class for next (default 'next')
    - prevClass css class for prev (default 'prev')
    - lastClass css class for last (default 'last')
    - firstClass css class for first (default 'first')

Events available on bootpag object

    - page on page click
    - callback params:
         - event object
         - num page number clicked


## Na fase anterior

Apenas criei a paginação partindo do tutorial original do kodingmadesimple

Crédito pela paginação
https://www.kodingmadesimple.com/2017/01/simple-ajax-pagination-in-jquery-php-pdo-mysql.html

