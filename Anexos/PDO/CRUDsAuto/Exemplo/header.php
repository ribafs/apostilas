<?php
include_once("classes/Crud.php");
$crud = new Crud('clientes');
$conn = new Connection();

$stmt = $crud->pdo->prepare("SELECT COUNT(*) FROM clientes");
$stmt->execute();
$rows = $stmt->fetch();

// get total no. of pages
$totalPages = ceil($rows[0]/$conn->regsPerPage);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title><?=$conn->appName?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    .panel-footer {
        padding: 0;
        background: none;
    }
    </style>
</head>
