<?php

class Conn
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $db = "testes";
    public $sgbd = 'mysql';// sqlite, mysql, pgsql
    private $port = 3306; // 3306, 5432, sqlite não usa
    protected $pdo;

    public $rowsLimit = 7;
    public $linksPerPage = 23;
    public $appTitle = '<a href="../index.php" title="Voltar ao menu">Paginação com Bootpag</a>';
    public $footer = 'Adaptação de <a href="https://ribafs.me" target="_blank">Ribamar FS</a>';

    public function __construct()
    {

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
		    case 'sqlite':
			    try {
	                $this->pdo = new PDO('sqlite:db/sqlite3.db');
	                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	                $query = "CREATE TABLE IF NOT EXISTS customers (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name TEXT, email TEXT, city TEXT)";
	                $this->pdo->exec($query);

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
		    case 'default':
			    break;
        }
	}
}

$conn = new Conn();
