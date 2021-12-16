<h2 align="center">Cadastro de Clientes</h2>

 <hr style="width:21%"> 

<form method="POST" action="" autocomplete="on">
<center>
Nome&nbsp;&nbsp;<input type="text" name="name" autocomplete="off"><br>
E-mail&nbsp;&nbsp;<input type="text" name="email"><br>
&nbsp;&nbsp;<input type="submit" value="Inserir"><br>
<br>

<?php
require_once 'connection.php';

if(isset($_POST['name'])){
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO clients (name, email) VALUES (?,?)";
$pdo->prepare($sql)->execute([$name, $email]);

print "
<script>
location = \"index.php\";
</script>
";
}

?>

