<?php require_once 'header.php'; ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <table class="table table-bordered table-responsive">    
            <form method="post" action="add.php"> 
<?php
require_once('db_connect.php');

    $sql = "SELECT * FROM customers";
    $sth = $pdo->query($sql);
    $numfields = $sth->columnCount();
        
    for($x=1;$x<$numfields;$x++){
        $meta = $sth->getColumnMeta($x);
        $field = $meta['name'];
?>
        <tr><td><b><?=ucfirst($field)?></td><td><input type="text" name="<?=$field?>"></td></tr>

<?php
    }
?>
            <tr><td></td><td><input class="btn btn-primary" name="enviar" type="submit" value="Cadastrar">&nbsp;&nbsp;&nbsp;
            <input class="btn btn-warning" name="enviar" type="button" onclick="location='index.php'" value="Voltar"></td></tr>
            </form>
        </table>
        </div>
    </div>
</div>

<?php

if(isset($_POST['enviar'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

   try{
       $sql = "INSERT INTO customers(name,email,city) VALUES (?, ?, ?)";
       $stm = $pdo->prepare($sql)->execute([$name, $email, $city]);;
 
       if($stm){
           echo 'Dados inseridos com sucesso';
		   header('location: index.php');
       }
       else{
           echo 'Erro ao inserir os dados';
       }
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
}
require_once('footer.php');
?>

