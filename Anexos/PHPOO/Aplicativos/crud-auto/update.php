<?php
require_once('./header.php');
require_once('./classes/connection.php');
require_once('./classes/crud.php');
$crud = new Crud($db);

// Receebr o id via GET do busca_resultados.php ou via POST deste arquivo
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=$_POST['id'];
}

// Mostrar nome da Tabela
print '<h3 align="center">'.ucfirst($crud->table).'</h3>';
?>

<!-- Mostrar form de atualização -->
<div class="container" align="center">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="update.php">
                <table class="table table-bordered table-responsive table-hover">

<?php
    $sth = $crud->pdo->prepare("SELECT * from ".$crud->table." WHERE id = :id");
    $sth->bindValue(':id', $id, PDO::PARAM_STR); // No select e no delete basta um único bindValue
    $sth->execute();

    $reg = $sth->fetch(PDO::FETCH_OBJ);
          
    for($x=0;$x<$crud->numFields();$x++){
        $field = $crud->fieldName($x);
?>
        <tr><td><b><?=ucfirst($field)?></td><td><input type="text" name="<?=$field?>" value="<?=$reg->$field?>"></td></tr>
<?php
}
?>
            <input name="id" type="hidden" value="<?=$id?>">
            <tr><td></td><td><input name="send" class="btn btn-primary" type="submit" value="Editar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="send" class="btn btn-warning" type="button" onclick="location='index.php'" value="Voltar"></td></tr>
            </table>
        </form>
        </div>
    <div>
</div>

<?php
require_once('./footer.php');

if(isset($_POST['send'])){

    $set = $crud->updateSet();

    $sql = "UPDATE ".$crud->table." SET $set WHERE id = :id";
    $sth = $crud->pdo->prepare($sql);

    for($x=0;$x<$crud->numFields();$x++){
        $field = $crud->fieldName($x);
		$sth->bindParam(":$field", $_POST["$field"], PDO::PARAM_INT);
	}

   if($sth->execute()){
        print "<script>location='index.php';</script>";
    }else{
        print "Erro ao editar o registro!<br><br>";
    }
}
?>

