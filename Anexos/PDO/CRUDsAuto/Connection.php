<?php

class Connection
{
	private $host = 'localhost', $db   = 'testes';
    private $user = 'root', $pass = 'root';
	public  $pdo;
    // protected $pdo;

    public function __construct(){
		try {
            $options = [
              PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
            ];
		    $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
		    $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);

		    $this->pdo->query('SET NAMES utf8');
		    return $this->pdo;
		}catch(PDOException $e){
            // Usar estas linhas no catch apenas em ambiente de testes/desenvolvimento. Em produção apenas o exit()
			echo '<br><br><b>Código</b>: '.$e->getCode().'<hr><br>';
			echo '<b>Mensagem</b>: '. $e->getMessage().'<br>';
			echo '<b>Arquivo</b>: '.$e->getFile().'<br>';
			echo '<b>Linha</b>: '.$e->getLine().'<br>';
			exit();
		}
    }
}

