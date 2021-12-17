<?php

class Connection
{
	private $host = 'localhost';
	private $db   = 'testes'; // Dica: auto-crud não foi aceito
	private $user = 'root';
	private $pass = 'root';
	public $sgbd = 'mysql';      // Opções: pgsql ou mysql
	public $pdo;

    public function getConnection(){

		try {
			$dsn = $this->sgbd.':host='.$this->host.';dbname='.$this->db.';';
			$this->pdo = new PDO($dsn, $this->user, $this->pass);
			return $this->pdo;

		}catch(PDOException $e){
			echo '<br><br><b>Mensagem</b>: '. $e->getMessage().'<br>';// Usar estas linhas no catch apenas em ambiente de testes/desenvolvimento
			echo '<b>Arquivo</b>: '.$e->getFile().'<br>';
			echo '<b>Linha</b>: '.$e->getLine().'<br>';
		}
	}
}

$conn = new Connection();
$db = $conn->getConnection();

