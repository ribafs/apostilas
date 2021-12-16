<?php require_once('header.php'); ?>
<style>

</style>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="">
                <table class="table table-bordered table-responsive table-hover">

<?php
require_once('connect.php');

$id=$_GET['id'];

$sth = $pdo->prepare("SELECT id, name,email,city from customers WHERE id = :id");
$sth->bindValue(':id', $id, PDO::PARAM_STR); // No select e no delete basta um bindValue
$sth->execute();

$reg = $sth->fetch(PDO::FETCH_OBJ);

$id = $reg->id;
$name = $reg->name;
$email = $reg->email;
$city = $reg->city;
?>
        <tr><td>Name</td><td><input name="name" type="text" value="<?=$name?>"></td></tr>
        <tr><td>E-mail</td><td><input name="email" type="text" value="<?=$email?>"></td></tr>
        <tr><td>Cidade</td><td><input name="city" type="text" value="<?=$city?>"></td></tr>
        <tr><td></td><td><input name="enviar" class="btn btn-primary" type="submit" value="Editar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="id" type="hidden" value="<?=$id?>">
        <input name="enviar" class="btn btn-warning" type="button" onclick="location='index.php'" value="Voltar"></td></tr>
            </table>
        </form>
        </div>
    <div>
</div>
<?php

if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $data = [
        'name' => $name,
        'email' => $email,
        'city' => $city,
        'id' => $id,
    ];

    $sql = "UPDATE customers SET name=:name, email=:email, city=:city WHERE id=:id";
    $stmt= $pdo->prepare($sql);

   if($stmt->execute($data)){
        print "<script>alert('Registro alterado com sucesso!');location='index.php';</script>";
    }else{
        print "Erro ao editar o registro!<br><br>";
    }
}
require_once('footer.php');
?>

