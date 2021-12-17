<?php
require_once('./classes/connection.php');
require_once('./classes/crud.php');
$crud = new Crud($db);

if(isset($_GET)){

	// Executa o método delete()
	$delete = $crud->delete();

	if( $delete ){
	    print "<script>location='index.php';</script>";
	}else{
	    print "Erro ao exclur o registro!<br><br>";
	}
}
