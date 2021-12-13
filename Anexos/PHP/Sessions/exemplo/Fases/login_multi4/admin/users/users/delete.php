<?php
require_once('../classes/crud.php');
$crud = new Crud($pdo,$_GET['table']);

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $crud->delete($id);
}
?>
