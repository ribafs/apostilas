<?php
require_once('classes/crud.php');
$crud = new Crud($pdo);

$id=$_GET['id'];

$sth = $crud->pdo->prepare("SELECT id, nome,email,nascimento,cpf from clientes WHERE id = :id");
$sth->bindValue(':id', $id, PDO::PARAM_STR);
$sth->execute();

$reg = $sth->fetch(PDO::FETCH_OBJ);
$nome = $reg->nome;
$email = $reg->email;
$nascimento = $reg->nascimento;
$cpf = $reg->cpf;

require_once('header.php');
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=$conn->appName?> <br> Excluir</h3></b></div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Realmente excluir o registro abaixo?</h3>
            <br>
            <b>ID:</b> <?=$id?><br>
            <b>Nome:</b> <?=$nome?><br>
            <b>E-mail:</b> <?=$email?><br>
            <b>Nascimento:</b> <?=$nascimento?><br>
            <b>CPF:</b> <?=$cpf?><br>
            <br>
            <form method="post" action="">
            <input name="id" type="hidden" value="<?=$id?>">
            <input name="enviar" class="btn btn-danger" type="submit" value="Excluir!">&nbsp;&nbsp;&nbsp;
            <input name="enviar" class="btn btn-warning" type="button" onclick="location='index.php'" value="Voltar">
            </form>
            <br><br><br>
        <?php require_once('footer.php'); ?>
        </div>
    <div>
</div>

<?php

if(isset($_POST['enviar'])){
    $id = $_POST['id'];

    if( $crud->delete($id)){
        print "<script>alert('Registro excluído com sucesso!');location='index.php';</script>";
    }else{
        print "Erro ao exclur o registro!<br><br>";
        exit();
    }
}
?>
