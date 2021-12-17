<?php
require_once('./header.php');
require_once('./classes/connection.php');
require_once('./classes/crud.php');
$crud = new Crud($db);

// Mostrar o nome da tabela
print '<h3 align="center">'.ucfirst($crud->table).'</h3>';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <table class="table table-bordered table-responsive">    
            <form method="post" action="insert.php"> 

			<?php
				for($x=1;$x<$crud->numFields();$x++){
					$field = $crud->fieldName($x);
					?>
					<tr><td><b><?=ucfirst($field)?></td><td><input type="text" name="<?=$field?>"></td></tr>
					<?php
				}
			?>
            <tr><td></td><td><input class="btn btn-primary" name="send" type="submit" value="Cadastrar">&nbsp;&nbsp;&nbsp;
            <input class="btn btn-warning" name="send" type="button" onclick="location='index.php'" value="Voltar"></td></tr>
            </form>
        </table>
        </div>
    </div>
</div>

<?php
require_once('./footer.php');

if(isset($_POST['send'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$cpf = $_POST['cpf'];

	$exec = $crud->insert();

	if($exec){
		header('location: index.php');
	}else{
		echo 'Erro ao inserir os dados';
	}

}
?>
