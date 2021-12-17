<?php

class Connection
{
	private $host = 'localhost';
	private $db   = 'testes';
	private $user = 'root';
	private $pass = 'root';
	public  $sgbd = 'mysql';// Testados: mysql e pgsql
	public  $pdo;
	private $port = 3306; // pgsql - 5432

	public $regsPerPage = 10; // Registros por página
    public $linksPerPage = 15;
    public $appName = 'Cadastro de Clientes';

    public function __construct(){

		switch ($this->sgbd){
			case 'mysql':
				try {
					$dsn = $this->sgbd.':host='.$this->host.';dbname='.$this->db.';port='.$this->port;
					$this->pdo = new PDO($dsn, $this->user, $this->pass);
					// Boa exibição de erros
					$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
					$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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
				break;

			case 'pgsql':
				try {
					$dsn = $this->sgbd.':host='.$this->host.';dbname='.$this->db.';port='.$this->port;
					$this->pdo = new PDO($dsn, $this->user, $this->pass);

					// Boa exibição de erros
					$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
					$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

					return $this->pdo;

				}catch(PDOException $e){
					echo '<br><br><b>Código</b>: '.$e->getCode().'<hr><br>';
					echo '<b>Mensagem</b>: '. $e->getMessage().'<br>';
					echo '<b>Arquivo</b>: '.$e->getFile().'<br>';
					echo '<b>Linha</b>: '.$e->getLine().'<br>';
					exit();
				}
				break;

			case 'sqlite':
				try {
					$this->pdo = new PDO('sqlite:/home/ribafs/estoque.db'); // Caminho do banco em sqlite

					// Boa exibição de erros
					$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
					$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

					return $this->pdo;

				}catch(PDOException $e){
					echo '<br><br><b>Código</b>: '.$e->getCode().'<hr><br>';
					echo '<b>Mensagem</b>: '. $e->getMessage().'<br>';
					echo '<b>Arquivo</b>: '.$e->getFile().'<br>';
					echo '<b>Linha</b>: '.$e->getLine().'<br>';
					exit();
				}
				break;
			case 'default':
				break;
		}
	}
}

