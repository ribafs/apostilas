<?php

// Veja que como Crud.php ja inclue Connection.php, basta aqui incluir Crud.php
require_once 'Crud.php';

$crud = new Crud($pdo,'clientes');
$nf = $crud->numFields();

print 'Nome da Tabela: '.$crud->table.'<hr>';
print 'Número de campos da tabela: '.$nf.'<hr>';
print 'Campos da tabela: ';
for($x=0;$x<$nf;$x++){
    $fn = $crud->fieldName($x);
    if($x < $nf-1){ 
        print $fn.', ';
    }else{
        print $fn;
    }
}
print '<hr>Número de registros total:'.$crud->numRegs('select * from clientes where id > 50').'<hr>';

