<?php require_once('./header.php'); ?>

<div class="container">
    <div class="row">
        <!-- Botão para adicionar novo registro-->
        <div class="col-md-3">
            <a href="insert.php" class="btn btn-default">Novo Registro</a>
        </div>

        <!-- Form de busca-->
        <div class="col-md-9">
            <form action="search.php" method="get" >
            <div class="pull-right" style="padding-left: 0;"  >
              <span class="pull-right">  
                <label class="control-label" for="palavra" style="padding-right: 0;">
                  <input type="text" value="" placeholder="Nome ou parte" class="form-control" name="palavra">
                </label>
                </span>
              <button class="btn btn-info">Busca</button>
            </div>
            </form>
        </div>
    </div>
</div>
<br>

<?php
require_once './classes/connection.php';
require_once './classes/crud.php';
$crud = new Crud($db);
require_once './classes/pagination.php';
 
$sql = "select * from $crud->table order by id";
 
/*
    Parâmetros da Paginacao:
 
    > $pdo é a variável da nossa conexao.php
    > $sql é a string SQL da consulta acima
    > 15 é o número de registros recebidos por página
    > 23 é o número de páginas mostradas por vez
    > null - Usamos null porque não temos nenhum outro parâmetro para passar
 
    (i.e. param1=valu1&param2=value2)
    You can use this if you are going to use this class for search results.
    O último parâmetro é útil para quando estamos fazendo busca via paginação (keyword), mas no caso não estou usando.
*/

// Sintaxe da Paginacao($pdoection, $sql, $rows_per_page = 15, $links_per_page = 23, $append = "")
$pager = new Paginacao($db, $sql, 10, 23, null);
 
// Classe de paginação renderiza os registros retornados
$rs = $pager->paginate();

// Conta quantos registros retronaram
$num = $rs->rowCount();
if($num >= 0 ){

    // Cria o cabeçalho da tabela
	print '<div class="container" align="center">';
    echo '<table class="table table-hover">';
    echo "<tr>";
        
        for($x=0;$x<$crud->numFields();$x++){
            $field = $crud->fieldName($x);
	?>
	        <th><?=ucfirst($field)?></th>
	<?php
        }
          // Mostrar os rótulos dos campos
		  print '<th colspan="2">Ação</th>';
    echo "</tr>";
 
    // Loop através dos registros recebidos
    while ($row = $rs->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
            for($x=0;$x<$crud->numFields();$x++){
                $field = $crud->fieldName($x);
                ?>
                <!-- Mostrar os valores dos campos-->
                <td><?=$row[$field]?></td>
                <?php
            }
			?>
            <td><a href="update.php?id=<?=$row['id']?>"><i class="glyphicon glyphicon-edit" title="Editar"></a></td>
            <td><a onclick="return confirm('Tem certeza de que deseja excluir <?=$row['nome']?> ?')" href="delete.php?id=<?=$row['id']?>"><i class="glyphicon glyphicon-remove-circle" title="Excluir"></a></td></tr>
		<?php
    	echo "</tr>";
    }
    echo "</table>";
}else{
    // Caso não encontre registros
    echo "Nenhum registro encontrado!";
}
 
	// 'page-nav' CSS class é usada para controlar a aparência dos números de páginas da navegação
	echo "<div class='page-nav' align='center'>";
    // Mostra nossa navegação de números
    echo $pager->renderFullNav();
echo "</div>
</div>";

require_once('./footer.php');
?>
