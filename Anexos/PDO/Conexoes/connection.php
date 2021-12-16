<?php

class Connection
{
	private $host = 'localhost';
	private $db   = 'estoque';
	private $user = 'root';
	private $pass = 'root';
	public  $pdo;
	private $port = 3306;

	public $regsPerPage = 10; // Registros por página
    public $linksPerPage = 15; // Links do rodapé da paginação   
    public $appName = '<a href="../" title="Voltar ao menu">Controle de Estoque Simplificado</a>';

    // Conexão com o banco de dados
    public function __construct(){
		try {
			$dsn = 'mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port;
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
	}

    // Função que popula uma combo com os registros de uma tabela, para campos insert e para campos update
    public function combo($sql, $selected=null){ // $sql='select id,descricao from produtos'
        $smt = $this->pdo->prepare($sql);       // $sql do update = 'select id,descricao from produtos',$produto_id
        $smt->execute();
        $data = $smt->fetchAll();

        print '<select name="produto_id" id="produto_id" class="form-control">';
        foreach ($data as $row){
            if($selected == $row['id']){
                print '<option value='.$row["id"].' selected>'.$row['descricao'].'</option>';
            }else{
                print '<option value='.$row["id"].'>'.$row['descricao'].'</option>';
            }
        }
        print '</select>';
    }

    // Função que retorna o diretório atual com inicial maiúscula
    public function currentDir(){
        return ucFirst(basename(getcwd()));
    }

    // Função que retorna o diretório atual com inicial maiúscula mas no singular (sem o s final)
    public function currentDirSing(){
        $dir = basename(getcwd());
        $dir = substr($dir, 0, -1);
        return ucFirst($dir);
    }
}

