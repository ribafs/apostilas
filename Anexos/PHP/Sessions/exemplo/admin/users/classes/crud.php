<?php
require_once 'connection.php';

$conn = new Connection();
$pdo = $conn->pdo;

/* Classe que trabalha com um crud, lidando com uma tabela por vez, que é fornecida a cada instância, desde a conexão com o banco */

class crud extends Connection
{

	public $pdo;
	public $table;

	public function __construct($pdo, $table){
		$this->pdo = $pdo;
		$this->table = $table;
	}

    // Número de campos da tabela atual
    public function numFields(){
        $sql = 'SELECT * FROM '.$this->table.' LIMIT 1';
        $sth = $this->pdo->query($sql);
        $num_campos = $sth->columnCount();
        return $num_campos;
    }

    // Nome de campo pelo número $x
    public function fieldName($x){
        $sql = 'SELECT * FROM '.$this->table.' LIMIT 1';
        $sth = $this->pdo->query($sql);
        $meta = $sth->getColumnMeta($x);
        $field = $meta['name'];
        return $field;
    }

    // Retornar todos os nomes do form dentro de uma tabela para o insert.php. Assim:
    // <tr><td>Nome</td><td><input type="text" name="nome"></td></tr>
    public function formFields(){
	    $fields = '';

        for($x=1;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);

		    if($x < $this->numFields()){
                $fields .= '<tr><td><b>'.ucFirst($field).'</b></td><td><input type="text" name="'.$field.'"></td><tr>'."\n";
		    }
	    }
        $fields = explode('\n', $fields);
        return $fields;
    }
    
    // Retornar relação de todos os campos com row, assim:
    /*     "<td>" . $row['id'] . "</td>" . */
    public function rowFields($row){
	    $fields = '';
        $fld = '';

        for($x=0;$x < $this->numFields();$x++){
            $fld = $this->fieldName($x);

            if($x < $this->numFields() -1){
                $fields .= '<td>' . $row["$fld"] . '</td>'."\n";
	        }else{
                $fields .= '<td>' . $row["$fld"] . '</td>'."\n";
            }
        }
        $fields = explode('\n', $fields);
        return $fields;
    }

    public function indexCount(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM {$this->table}");
        $stmt->execute();
        $rows = $stmt->fetch();
        return $rows;
    }

    // Retornar os nomes de todos os campos envolvidos com th, assim:
    // <th>ID</th>
    public function thFields(){
	    $fields = '';

        for($x=0;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);

		    if($x < $this->numFields()){
                $fields .= '<th>'.ucFirst($field).'</th>'."\n";
		    }
	    }
        $fields = explode('\n',$fields);
        return $fields;
    }

    // Retornar os nomes de todos os campos para uso interno, por isso private
    // Exemplo: id, nome,email,nascimento,cpf
    private function fields(){
	    $fields = '';

        for($x=0;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);

            if($x < $this->numFields() -1){
                $fields .= "$field,"."\n";
	        }else{
                $fields .= "$field";
            }
	    }
        return $fields;
    }

    // Retornar campos do update dentro de tabela
    /* Exemplo:<tr><td><b>Nome</td><td><input type="text" name="nome" value="$nome"></td></tr> */
    public function fieldsUpdate($id){
	    $fields = '';

        $sth = $this->pdo->prepare("SELECT {$this->fields()} from $this->table WHERE id = :id");
        $sth->bindValue(':id', $id, PDO::PARAM_STR); // No select e no delete basta um bindValue
        $sth->execute();
        $reg = $sth->fetch(PDO::FETCH_OBJ);// Talvez mudar para ASSOC para facilitar

        for($x=1;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);
            $fields .='<tr><td><b>'.ucfirst($field).'</b></td><td><input type="text" name="'.$field.'" value="'.$reg->$field.'"></td></tr>';
        }
        $fields = explode('\n',$fields);
        return $fields;
    }

    // Retornar a string com set para cada campo do Update(), para uso interno
    private function updateSet(){
	    $set='';
            
        for($x=0;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);
		    // A linha abaixo gerará a linha: $nome = 'Nome do cliente';
	        $$field = $_POST[$field];

		    // Este if gerará a variável $set contendo "$nome = :$nome, $email = :$email, ...";
		    if($x<$this->numFields()-1){
			    if($x==0) continue;// Não contar o campo id
			    $set .= "$field = :$field,";
		    }else{
			    if($x==0) continue;
			    $set .= "$field = :$field";
		    }
	    }
        return $set;
    }

    // Retornar a string para o método insert(): (nome, email, data_nasc, cpf) values (:nome, :email, :data_nasc, cpf)
    private function inserirStr(){
	    $fields = '';
	    $values = '';

        for($x=1;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);

		    // Este if gera o seguinte código para a variável $fields = "nome, email, data_nasc, cpf" (exemplo para clientes)
		    // E também para a variável $values = ":nome, :email, :data_nasc, cpf"
		    if($x < $this->numFields()-1){
                $fields .= "$field,";
                $values .= ":$field, ";
		    }else{
                $fields .= "$field";
                $values .= ":$field";
		    }
	    }
        $inserirStr = "($fields) VALUES ($values)";
        return $inserirStr;
    }

    // Efetuar o insert no banco
    public function insert(){
        if(isset($_POST['enviar'])){

            $sql = "INSERT INTO $this->table {$this->inserirStr()}";
            $sth = $this->pdo->prepare($sql);    

            for($x=1;$x < $this->numFields();$x++){
                $field = $this->fieldName($x);
		        $sth->bindParam(":$field", $_POST["$field"], PDO::PARAM_INT);
	        }
            $execute = $sth->execute();

            if($execute){
                 print "<script>location='index.php?table=$this->table';</script>";
            }else{
                echo 'Error insert dates';
            }
        }
    }

    // Efetuar delete
    public function delete($id){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "DELETE FROM  {$this->table} WHERE id = :id";
            $sth = $this->pdo->prepare($sql);
            $sth->bindParam(':id', $id, PDO::PARAM_INT);   

            if( $sth->execute()){
                print "<script>alert('Register '+$id+' sucessuful deleted!');location='index.php?table=$this->table';</script>";
            }else{
                print "Error on delete register!<br><br>";
            }
        }
    }

    // Efetuar update
    public function update(){

        $sql = "UPDATE {$this->table} SET {$this->updateSet()} WHERE id = :id";
        $sth = $this->pdo->prepare($sql);

        for($x=0;$x < $this->numFields();$x++){
            $field = $this->fieldName($x);
            $sth->bindParam(":$field", $_POST["$field"], PDO::PARAM_INT);
	    }

       if($sth->execute()){
            print "<script>location='index.php?table=$this->table';</script>";
       }else{
            print "Error on update register!<br><br>";
       }
    }

    public function resultsMy($start){
        global $conn;
        $result = $this->pdo->prepare("SELECT * FROM $this->table ORDER BY id LIMIT $start, ".REGS_PER_PAGE);
        return $result;
    }

    public function resultsPg($start){
        global $conn;
        $result = $this->pdo->prepare("SELECT * FROM $this->table ORDER BY id LIMIT ".REGS_PER_PAGE." OFFSET $start");
        return $result;
    }

    public function fetchData($start){
        global $conn;

        if($conn->sgbd == 'mysql'){
            $results = $this->resultsMy($start);
        }else if($conn->sgbd == 'pgsql'){
            $results = $this->resultsPg($start);    
        }

        $results->execute();
        $numberRegs = $results->rowCount();

        if($numberRegs > 0){
            while($row = $results->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                $fields = $this->rowFields($row);
                foreach($fields as $field){
                    print $field;
                }
                $id = $row['id'];

                // Código precisando ser melhorado. Conteúdo que deve estar na view
                print "<td><a href=\"update.php?id=".$row['id']."&table=".$this->table."\">
                <i class=\"glyphicon glyphicon-edit\" title=\"Editar\"></a></td>
                <td><a onclick=\"return confirm('Tem certeza de que deseja excluir $id ?')\" href=\"delete.php?id=$id&table=".$this->table."\">
                <i class=\"glyphicon glyphicon-remove-circle\" title=\"Excluir\"></a></td></tr>";
            }
        }else{
            echo '<h3 class="bg-danger">Nenhum registro encontrado</h3>';
        }
    }

    public function searchKey($keyword){
        $sql = "select * from {$this->table} WHERE {$this->fieldName(1)} LIKE :keyword order by id";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(":keyword", $keyword."%");
        $sth->execute();
        $rows =$sth->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function totalPages(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM {$this->table}");
        $stmt->execute();
        $rows = $stmt->fetch();

        $totalPages = ceil($rows[0]/REGS_PER_PAGE);
        return $totalPages;
    }
}
