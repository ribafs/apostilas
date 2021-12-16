<?php
require_once 'connection.php';

if(!empty($_GET['id'])){
      $id = $_GET['id'];

      $stmt = $pdo->prepare( "DELETE FROM clients WHERE id =:id" );
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      if( ! $stmt->rowCount() ) {
        echo "A exclusão falhou";
      }else{
        header("Location:index.php");
      }
}

