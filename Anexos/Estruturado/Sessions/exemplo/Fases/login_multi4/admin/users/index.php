<?php
session_start();

if(!isset($_SESSION["super_login"]) == 'ribafs@gmail.com')
{
	header("location: ../../index.php");	
} 

require_once('./header_root.php');
require_once('./classes/connection.php');
$conn = new Connection();

$nrtables = count($conn->tableNames());
$sel = 'Selecione uma Tabela';
?>

<br><br><br>
<style>
hr{
    display:none;
}
</style>
<div class="container cabecalho">
    <h1 align="center">Aplicativo com CRUDs Automáticos</h1>
</div>
	<div align="center">
<?php

if($nrtables > 0){
	print '<h3>'.$sel.'</h3>';
	print '<h4><br>';

    for($x=0;$x < $nrtables;$x++){
        // Nome da tabela
        $table = $conn->tableNames()[$x];

        //if($table == 'pedidos') continue; //Descomentando esta linha podemos bypassar uma tabela

        // Copiar pasta core para cada tabela
        if(!file_exists($table)){
            $conn->copyDir('core',$table);
        }
    ?>

    <!-- Link para cada tabela -->    
	<a href="<?=$conn->tableNames()[$x]?>?table=<?=$table?>"><?=ucfirst($table)?></a>&nbsp;&nbsp;&nbsp;&nbsp;

    <?php 
    }// Final for
}else{
    print "<h3>Nenhuma tabela foi encontrada no banco de dados!</h3>";
}
?>
		</h4>
	</div>
</div>
<br><br><br>
<?php require_once('./footer.php'); ?>

