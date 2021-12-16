<?php
require_once 'connection.php';

$id = $_GET['id'];
//print $id;exit;
$stmt = $pdo->prepare("SELECT id,name,email FROM clients WHERE id=?");
$stmt->execute([$id]); 
$client = $stmt->fetch(PDO::FETCH_OBJ);
//print_r($client);exit;
$id = $client->id;
$name = $client->name;
$email = $client->email;
?>

<h2 align="center">Atualização de Cliente</h2>
 <hr style="width:23%"> 
<form method="POST" action="" autocomplete="on">
<center>
Nome&nbsp;&nbsp;<input type="text" name="name" autocomplete="off" value="<?=$name?>"><br>
E-mail&nbsp;&nbsp;<input type="text" name="email" value="<?=$email?>"><br>
<input type="hidden" name="id" value="<?=$id?>">
&nbsp;&nbsp;<input type="submit" value="Atualizar"><br>
<br>

<?php

if(isset($_POST['name'])){
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE clients SET name=?, email=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $email, $id]);

print "
<script>
location = \"index.php\";
</script>
";
}

?>

