<?php
namespace Core;

class Model
{
    public $pdo;
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->host = HOST;
        $this->user = USER;
        $this->pass = PASS;
        $this->db = DB;
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;

        try {
            // Para que usemos as variáveis como objeto ($client->id) e mostre mais detalhes nas mensagens de erro
            // A barra antes do PDO (\PDO) é para indicar que estamos usando ele em seu próprio namespace e não é uma classe do nosso namespace
            $options = array(\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ, \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING);
            $this->pdo = new \PDO($dsn, $this->user, $this->pass, $options );

            return $this->pdo;

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
