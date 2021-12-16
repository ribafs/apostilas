<?php 

require_once '../header.php'; 
require_once('../connect.php');

$sql ='SELECT id,descricao FROM produtos;';
$stmt = $pdo->prepare($sql);
$stmt ->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h3>Pedidos</h3>
        <table class="table table-bordered table-responsive">    
            <form method="post" action="add.php"> 
            <tr><td><b>Produto</td><td>

<select name="produto_id" id="produto_id">
    <option value="" selected>Selecione</option>
    <?php 
        foreach($data as $row){
    ?>
        <option value="<?=$row['id']?>"><?=$row['descricao']?></option>
    <?php 
    }
 ?>
</select>

</td></tr>

            <tr><td><b>Quantidade</td><td><input type="text" name="quantidade"></td></tr>
            <tr><td><b>Data</td><td><input type="text" name="data"></td></tr>
            <tr><td><b>Valor unitário</td><td><input type="text" name="valor_unitario"></td></tr>
            <tr><td></td><td><input class="btn btn-primary" name="enviar" type="submit" value="Cadastrar">&nbsp;&nbsp;&nbsp;
            <input class="btn btn-warning" name="enviar" type="button" onclick="location='index.php'" value="Voltar"></td></tr>
            </form>
        </table>
        </div>
    </div>
</div>

<?php

if(isset($_POST['enviar'])){
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];
    $data = $_POST['data'];
    $valor_unitario = $_POST['valor_unitario'];

    require_once('../connect.php');
    try{
       $sql = "INSERT INTO vendas(produto_id, quantidade, data, valor_unitario) VALUES (?, ?, ?, ?)";
       $stm = $pdo->prepare($sql)->execute([$produto_id, $quantidade, $data, $valor_unitario]);;
 
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
require_once('../footer.php');
?>

