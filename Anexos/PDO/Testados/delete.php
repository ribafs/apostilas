<?php
require_once('connect.php');

$id=$_GET['id'];

$sql = "DELETE FROM customers WHERE id = :id";
$sth = $pdo->prepare($sql);
$sth->bindParam(':id', $id, PDO::PARAM_INT);   
if( $sth->execute()){
    print "<script>alert('Registro excluído com sucesso!');location='index.php';</script>";
}else{
    print "Erro ao exclur o registro!<br><br>";
}
?>
