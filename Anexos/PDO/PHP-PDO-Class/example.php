<?php
require 'db.class.php';
/*
    Calling class on variable $db (this can be any variable name). Find construction calls below in order:
    1. Database host address
    2. Username for authentication
    3. Password for authentication
    4. Database name

    Please note: the data array is NOT required. All question marks (?) found in the query will be replaced with the data (in order) found in the array of the second parameter.
    You do NOT need to use quotes as PDO sorts this out for you during query preperation.
*/
$db = new db("localhost", "root", "root", "novo_banco");

$id = 6;

/*
    Calling a query which will return only ONE row. Usage: (query, array with data)
    Returns an array.
*/
$prod = $db->fetch("SELECT * FROM produtos WHERE `id` = ?", array($id));
print_r($prod);

/*
    Calling a query which will return multiple rows. Usage: (query, array with data)
    Returns an array.
*/
$prods = $db->fetchAll("SELECT * FROM produtos ORDER BY `id` ASC");
print_r($prods);

/*
    Calling a query which will return the total count of rows. Usage: (query, array with data)
    Returns an integer.
*/
$c = $db->count("SELECT `id` FROM produtos");
print $c;

/*
    Calling a query which will insert a row in to a table. This can also create a table. Usage: (query, array with data)
*/
$descricao = 'Novo';
$preco = 1.00;
$db->insert("INSERT INTO produtos (descricao,preco) VALUES (?,?)", array($descricao, $preco));
print 'Inserido';

/*
    Calling a query which will update a row in the table. Usage: (query, array with data)
*/
$descricao = 'Laranja lima';
$id = 7;
$db->update("UPDATE produtos SET descricao = ? WHERE `id` = ?", array($descricao, $id));

/*
    Calling a query which will delete a row in the table. Usage: (query, array with data)
*/
$id = 7;
$db->delete("DELETE FROM produtos WHERE `id` = ?", array($id));

/*
    Calling a query which will determine if a table exists in the database. Usage: (table name)
    Returns true or false.
*/
echo ($db->tableExists("produtos") === true) ? "Table exists." : "Table does NOT exist.";
