<?php
session_start();

if(!isset($_SESSION["super_login"]) == 'ribafs@gmail.com')
{
	header("location: ../../../index.php");	
} 

require_once('../header.php');
require_once('../classes/crud.php');

$table = 'users';

$crud = new Crud($pdo,$table);

if( basename($_SERVER['REQUEST_URI'], ".php")=='clientes'){
    $link = "<a href=\"../index.php?table=$table\" title=\"Voltar ao menu\">Aplicativo Automático</a>";
}else{
    $link = "<a href=\"./index.php?table=$table\" title=\"Voltar ao menu\">Aplicativo Automático</a>";
}

?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=$link?></b> <br>(Adicionar)</h3></div>
        <div class="row">

        <div class="col-md-1"></div>
        <div class="col-md-8">

        <table class="table table-bordered table-responsive table-hover">    
            <form method="POST" action="insert.php">
            <?php 
                $fields = $crud->formFields();
                foreach($fields as $field){
                    print $field;
                }       
            ?>
            <input type="hidden" name="table" value="<?=$table?>">
            <tr><td></td><td><input class="btn btn-primary" name="enviar" type="submit" value="Cadastrar">&nbsp;&nbsp;&nbsp;
            <input class="btn btn-warning" type="button" onclick="location='index.php?table=<?=$table?>'" value="Voltar"></td></tr>
            </form>
        </table>
        </div>
    </div>
</div>

<?php
if(isset($_POST['enviar'])){
    $crud->insert();
}

require_once('../footer.php'); ?>

