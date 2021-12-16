<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testes;port=3306', 'root', 'root');
//    print 'Conectou';
} catch (PDOException $e) {
    print "Erro: " . $e->getMessage() . "<br/>";
    die();
}

