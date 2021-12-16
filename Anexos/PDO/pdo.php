<?php

$pdo = new PDO('mysql:host=localhost;dbname=novo_banco', 'root', 'root');

function pdo($pdo, $sql, $args = NULL)
{
    if (!$args)
    {
         return $pdo->query($sql);
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute($args);
    return $stmt;
}

// https://phpdelusions.net/pdo/pdo_wrapper

// getting the number of rows in the table
$count = pdo($pdo, "SELECT count(*) FROM produtos")->fetchColumn();
//print $count;

// the user data based on email
$descricao = 'Manga rosa';
$produto = pdo($pdo, "SELECT * FROM produtos WHERE descricao=?", [$descricao])->fetch();
print_r($produto);
print '<hr>';
print $produto['descricao'].'<br>';
print $produto['preco'].'<br>';

// getting many rows from the table
$id = 5;
$produtos = pdo($pdo, "SELECT * FROM produtos WHERE id > ?", [$id])->fetchAll();
print $produtos[0]['descricao'].'<BR>';
print $produtos[1]['descricao'].'<BR>';
print $produtos[2]['descricao'].'<BR>';
print $produtos[3]['descricao'].'<BR>';

foreach($produtos as $produto){
    foreach($produto as $prod){
        print $prod.'<br>';
    }
}

// getting the number of affected rows from DELETE/UPDATE/INSERT
$id = 4;
$deleted = pdo($pdo, "DELETE FROM produtos WHERE id=?", [$id])->rowCount();
print $deleted;

// insert
$descricao = 'Produto n';
$preco = 50.00;
$ins = pdo($pdo, "INSERT INTO produtos (descricao, preco) VALUES (?,?)", [$descricao, $preco]);
if($ins) print 'Inserido';


// named placeholders are also welcome though I find them a bit too verbose
$id = 13;
$descricao = 'Granpeador';
$preco = 15.00;
$prod = pdo($pdo, "UPDATE produtos SET descricao=:descricao, preco =:preco WHERE id=:id", ['id'=>$id, 'preco'=>$preco, 'descricao'=>$descricao]);
if($prod) print 'Atualizado';


// using a sophisticated fetch mode, indexing the returned array by id
$indexed = pdo($pdo, "SELECT id, descricao FROM produtos")->fetchAll(PDO::FETCH_KEY_PAIR);
print_r($indexed);
