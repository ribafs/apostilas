<?php

define('REGS_PER_PAGE', 8); // Registros por página
define('LINKS_PER_PAGE', 15); // Links da barra de paginação
define('APP_NAME', 'Login múltiplo');

class Connection
{
	private $host = 'localhost';
	private $db = 'login_multi';
	private $user = 'root';
	private $pass = 'root';
	public  $sgbd = 'mysql';
	private $port = '3306';

	public  $pdo;

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

    // Copiar uma pasta com todos os arquivos e subpastas recursivamente
    // Crédito - https://stackoverflow.com/questions/2050859/copy-entire-contents-of-a-directory-to-another-using-php#2050909
    public function copyDir($src,$dst) { 
        $dir = opendir($src); 
        mkdir($dst); 
        while(false !== ( $file = readdir($dir)) ) { 
            if (( $file != '.' ) && ( $file != '..' )) { 
                if ( is_dir($src . '/' . $file) ) { 
                    recurse_copy($src . '/' . $file,$dst . '/' . $file); 
                } 
                else { 
                    copy($src . '/' . $file,$dst . '/' . $file); 
                } 
            } 
        } 
        closedir($dir); 
    } 
    // Caso a pasta de destino não exista será criada
    // copyDir('j381/installation', 'joomla3/installation');

    // Nomes das tabelas do banco atual
	public function tableNames(){
		try {
		  if($this->sgbd=='mysql'){
 		    $sql="SHOW TABLES";
		  }elseif($this->sgbd=='pgsql'){
			$sql="SELECT relname FROM pg_class WHERE relname !~ '^(pg_|sql_)' AND relkind = 'r';";
		  }elseif($this->sgbd=='sqlite'){
            $sql='SELECT name FROM sqlite_master WHERE type = "table"';
          }
		  $tableList = array();		  
		  $res = $this->pdo->prepare($sql);
		  $res->execute();
		  while($cRow = $res->fetch())
		  {
			$tableList[] = $cRow[0];
		  }
		  return $tableList;// array
		}catch (PDOException $p){
			print $p->getMessage();
			exit;
		}
	}

}

