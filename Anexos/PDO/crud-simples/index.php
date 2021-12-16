<h2 align="center">Cadastro de Clientes</h2>

<h3 align="center"><a href="insert.php">Novo Cliente</a></h3>
<hr style="width:60%"> 
<center>
<br><b>Nome</b>&nbsp;&nbsp;<b>E-mail</b>&nbsp;&nbsp;<b>Ação</b><br>

<?php
require_once 'connection.php';

$stmt = $pdo->query("SELECT * FROM clients order by id desc");

while ($row = $stmt->fetch()) {

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    ?>

    <?=$name?>&nbsp;&nbsp;<?=$email?>&nbsp;<a href="update.php?id=<?=$id?>">Atualizar</a>
    <a href="delete.php?id=<?=$id?>" onclick="return confirm('Tem certeza de que deseja excluir este cliente ?')">Excluir</a></br>

<?php
}
?>

