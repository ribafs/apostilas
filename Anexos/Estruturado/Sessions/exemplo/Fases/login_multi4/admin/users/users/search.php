<?php 
session_start();

if(!isset($_SESSION["super_login"]) == 'ribafs@gmail.com')
{
	header("location: ../../../index.php");	
} 

require_once('../header.php');
require_once('../classes/crud.php');
$table = 'users';
$crud = new Crud($pdo,$table);

// Busca
if(isset($_GET['keyword'])){
    $keyword=$_GET['keyword'];

    $rows = $crud->searchKey($keyword);
}

if( basename($_SERVER['REQUEST_URI'], ".php")=='clientes'){
    $link = "<a href=\"../index.php?table=$table\" title=\"Voltar ao menu\">Aplicativo Automático</a>";
}else{
    $link = "<a href=\"./index.php?table=$table\" title=\"Voltar ao menu\">Aplicativo Automático</a>";
}

?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h3><b><?=$link?></b></h3></div>
<?php
print '<div class="text-center"><h4><b>Registro(s) encontrado(s)</b>: '.count($rows).' com '.$keyword.'</h4></div>';

if(count($rows) > 0){
?>

    <table class="table table-hover">
        <thead>  
            <tr>
                <?php
                    $ths = $crud->thFields();
                    foreach($ths as $th){
                        print $th;
                    }
                ?>
            </tr>
        </thead>

<?php
    // Loop através dos registros recebidos
    foreach ($rows as $row){
        echo '<tr>';
        $fields = $crud->rowFields($row);
        foreach($fields as $field){
            print $field;
        }
    } 
    echo "</tr></table>";

}else{
    print '<h3>Nenhum Registro encontrado!</h3>
</div>';
}
?>

<div class="text-center"><input name="send" class="btn btn-warning" type="button" onclick="location='index.php?table=<?=$table?>'" value="Voltar"></div>
</div>
<br>
<?php require_once '../footer.php'; ?>
