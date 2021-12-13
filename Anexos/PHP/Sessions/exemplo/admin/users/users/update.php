<?php
session_start();

if(!isset($_SESSION["super_login"]) == 'ribafs@gmail.com')
{
	header("location: ../../../index.php");	
} 

require_once('../classes/crud.php');
$table = 'users';
$crud = new Crud($pdo,$table);

$id=$_GET['id'];

if( basename($_SERVER['REQUEST_URI'], ".php")=='clientes'){
    $link = "<a href=\"../index.php?table=$table\" title=\"Voltar ao menu\">Aplicativo Automático</a>";
}else{
    $link = "<a href=\"./index.php?table=$table\" title=\"Voltar ao menu\">Aplicativo Automático</a>";
}

require_once('../header.php');
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=$link?> <br>Atualizar</h3></b></div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="">
                <table class="table table-bordered table-responsive table-hover">
                <?php
                    $fields = $crud->fieldsUpdate($id);
                    foreach($fields as $field){
                        print $field;
                    }
                ?>
                <input name="id" type="hidden" value="<?=$id?>">
                <tr><td></td><td><input name="send" class="btn btn-primary" type="submit" value="Editar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="send" class="btn btn-warning" type="button" onclick="location='index.php?table=<?=$table?>'" value="Voltar"></td></tr>
                </table>
            </form>
            <?php require_once('../footer.php'); ?>
        </div>
    <div>
</div>

<?php

if(isset($_POST['send'])){

   $crud->update();
}
?>

