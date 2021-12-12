<?php
namespace App\Models;

use Core\Model;

class Client extends Model
{
    public function index(){
        $stmte = $this->pdo->query("SELECT * FROM clients order by id desc");
        $executa = $stmte->execute();
        $clients = $stmte->fetchall();

        return $clients;
    }

    public function add($nome, $idade)
    {
        $sql = "INSERT INTO clients (nome, idade) VALUES (:nome, :idade)";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':nome' => $nome, ':idade' => $idade);
        $query->execute($parameters);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM clients WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);
    }

    public function edit($id)
    {
        $sql = "SELECT id, nome, idade FROM clients WHERE id = :id LIMIT 1";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);
        return ($query->rowCount() ? $query->fetch() : false);
    }

    public function update($nome, $idade, $id)
    {
        $sql = "UPDATE clients SET nome = :nome, idade = :idade WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':nome' => $nome, ':idade' => $idade, ':id' => $id);

        $query->execute($parameters);
    }

    public function search($keyword)
    {
        $sql = "select * from clients WHERE nome LIKE :keyword order by id";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(":keyword", "%".$keyword."%");
        $sth->execute();
        $rows =$sth->fetchAll();

        return $rows;
    }
}
