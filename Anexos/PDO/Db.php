<?php

class DB
{
    public $pdo;

    public function __construct($db, $username = NULL, $password = NULL, $host = '127.0.0.1', $port = 3306, $options = [])
    {
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $options = array_replace($default_options, $options);
        $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=utf8mb4";

        try {
            $this->pdo = new \PDO($dsn, $username, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
    public function run($sql, $args = NULL)
    {
        if (!$args)
        {
            return $this->pdo->query($sql);
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
// https://phpdelusions.net/pdo/pdo_wrapper
// Usando

$db = new DB('novo_banco', 'root', 'root');

$count = $db->run("SELECT count(*) FROM produtos")->fetchColumn();
//print $count;

$descricao = 'Manga rosa';
$produto = $db->run("SELECT * FROM produtos WHERE descricao=?", [$descricao])->fetch();
print_r($produto);
print '<hr>';
print $produto['descricao'].'<br>';
print $produto['preco'].'<br>';

$id = 5;
$produtos = $db->run("SELECT * FROM produtos WHERE id > ?", [$id])->fetchAll();
print $produtos[0]['descricao'].'<BR>';
print $produtos[1]['descricao'].'<BR>';
print $produtos[2]['descricao'].'<BR>';
print $produtos[3]['descricao'].'<BR>';

foreach($produtos as $produto){
    foreach($produto as $prod){
        print $prod.'<br>';
    }
}

$id = 4;
$deleted = $db->run("DELETE FROM produtos WHERE id=?", [$id])->rowCount();
print $deleted;

$descricao = 'Produto n';
$preco = 50.00;
$ins = $db->run( "INSERT INTO produtos (descricao, preco) VALUES (?,?)", [$descricao, $preco]);
if($ins) print 'Inserido';

$id = 13;
$descricao = 'Granpeador';
$preco = 15.00;
$prod = $db->run("UPDATE produtos SET descricao=:descricao, preco =:preco WHERE id=:id", ['id'=>$id, 'preco'=>$preco, 'descricao'=>$descricao]);
if($prod) print 'Atualizado';

$indexed = $db->run("SELECT id, descricao FROM produtos")->fetchAll(PDO::FETCH_KEY_PAIR);
print_r($indexed);

