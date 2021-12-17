<?php 
require_once('./header.php');
include './classes/connection.php';
include './classes/crud.php';
$crud = new Crud($db);

// Busca
if(isset($_GET['keyword'])){
    $keyword=$_GET['keyword'];
    $field = $crud->fieldName(1);

    $sql = "select * from ".$crud->table." WHERE $field LIKE :keyword order by id";
    $sth = $crud->pdo->prepare($sql);
    $sth->bindValue(":keyword", $keyword."%");
    $sth->execute();
    $rows =$sth->fetchAll(PDO::FETCH_ASSOC);
}

print '<div class="container" align="center">';
print '<h4>Registro(s) encontrado(s)</h4>';

if(count($rows) > 0){
	print '<div class="container" align="center">';
    echo '<table class="table table-hover">';
    echo "<tr>";

    $crud->numFields = $crud->numFields();
        
    for($x=0;$x<$numFields;$x++){
        $field = $crud->fieldName($x);
      	?>
        <th><?=ucfirst($field)?></th>
       	<?php
    }

	print '<th colspan="2">Ação</th>';
    echo "</tr>";
 
    // Loop através dos registros recebidos
    foreach ($rows as $row){
        echo "<tr>";
            for($x=0;$x<$numFields;$x++){
                $field = $crud->fieldName($x);
		        ?>
		        <td><?=$row[$field]?></td>
		        <?php
            }
			?>
            <td><a href="update.php?id=<?=$row['id']?>"><i class="glyphicon glyphicon-edit" title="Editar"></a></td>
            <td><a href="delete.php?id=<?=$row['id']?>"><i class="glyphicon glyphicon-remove-circle" title="Excluir"></a></td></tr>

			<?php
        echo "</tr>";
    } 
    echo "</table>";

}else{
    print '<h3>Nenhum Registro encontrado!</h3>';
}

?>

<input name="send" class="btn btn-warning" type="button" onclick="location='index.php'" value="Voltar">
</div>

<?php require_once('./header.php'); ?>
