<?php

class Crud
{
    // table name definition and database connection
    public $pdo;
    public $table = "clientes";

	// O construtor já pega o objeto Database, então não há necessidade de instanciar o Database, apenas o Crud
    public function __construct($db)
    {
        $this->pdo = $db;
    }

	// Número de campos da tabela atual
	public function numFields(){
		$sql = "SELECT * FROM $this->table";
		$sth = $this->pdo->query($sql);
		return $sth->columnCount();
	}

	// Nome de campo pelo número $x
	public function fieldName($x){
		$sql = "SELECT * FROM $this->table";
		$sth = $this->pdo->query($sql);
		$meta = $sth->getColumnMeta($x);
		return $meta['name'];
	}

	// Gerar string set para update
	public function updateSet(){
		$set='';

		for($x=1;$x<$this->numFields();$x++){
		    $field = $this->fieldName($x);

			if($field == 'created') continue;
			// A linha abaixo gerará a linha: $nome = 'Nome do cliente';
			$$field = $_POST[$field];

			// Este if gerará a variável $set contendo "$nome = :$nome, $email = :$email, ...";
			if($x<$this->numFields()-2){
				$set .= "$field = :$field, ";
			}else{
				$set .= "$field = :$field";
			}
		}
		$set .= ' WHERE id = :id';
		return $set;
	}

	public function insertString(){
		$fields = '';
		$values = '';

		for($x=1;$x<$this->numFields();$x++){
		    $field = $this->fieldName($x);

			// Gerará a string $fields = SET firstname = ?, lastname = ?, email = ?, mobile = ?, category_id = ?
			if($field == 'created') continue;		
			if($x<$this->numFields()-1){
		        $fields .= "$field, ";
				$values .= "?, ";
			}else{
		        $fields .= "$field";
				$values .= "?";
			}
		}
		return "($fields) VALUES ($values)";
	}

	public function fields($bypass1=null, $bypass2=null){
		$flds='';
		for($x=0;$x<$this->numFields();$x++){
		    $field = $this->fieldName($x);
			if($field == $bypass1) continue;
			if($field == $bypass2) continue;				
			if($x<$this->numFields()-2){
		        $flds .= "$field, ";
			}else{
		        $flds .= "$field";
			}
		}
		return $flds;
	}

	public function delete(){
		$id = $_GET['id'];

		$sql = "DELETE FROM ".$this->table." WHERE id = :id";
		$sth = $this->pdo->prepare($sql);
		$sth->bindParam(':id', $id, PDO::PARAM_INT);   

		if( $sth->execute()){
		    return true;
		}else{
		    return false;
		}
	}

	public function insert(){
		$sql = 'INSERT INTO '.$this->table.' '.$this->insertString();
		$sth = $this->pdo->prepare($sql);    

	    for($x=1;$x<$this->numFields();$x++){
		    $field = $this->fieldName($x);
			$sth->bindParam($x, $_POST["$field"]);
		}
		$execute = $sth->execute();

		if($execute){
		     return true;
		}else{
		    return false;
		}

	}
}
