<?php
require_once('header.php');
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=$conn->appName?></b> <br>(Adicionar)</h3></div>
        <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">

        <table class="table table-bordered table-responsive table-hover">    
            <form method="post" action="add.php">           
            <tr><td>Nome</td><td><input type="text" name="nome" autofocus></td></tr>
            <tr><td>E-mail</td><td><input type="text" name="email"></td></tr>
            <tr><td>Nascimento</td><td><input type="text" name="nascimento"></td></tr>
            <tr><td>CPF</td><td><input type="text" name="cpf"></td></tr>
            <tr><td></td><td><input class="btn btn-primary" name="enviar" type="submit" value="Cadastrar">&nbsp;&nbsp;&nbsp;
            <input class="btn btn-warning" name="enviar" type="button" onclick="location='index.php'" value="Voltar"></td></tr>
            </form>
        </table>
        </div>
    </div>
</div>

<?php
require_once('classes/crud.php');
$crud = new Crud($pdo);

    if(isset($_POST['enviar'])){
        if($crud->insert()){
           // 'Dados inseridos com sucesso';
		   header('location: index.php');            
        }else{
           echo 'Erro ao inserir os dados';
           exit();
        }
    }

require_once('footer.php');
?>

