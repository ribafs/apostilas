<?php
namespace App\Models;

use Core\Model;

class Product extends Model
{
    public function index(){
        $stmte = $this->pdo->query("SELECT * FROM products order by id");
        $executa = $stmte->execute();
        $products = $stmte->fetchall(\PDO::FETCH_ASSOC); // Para recuperar um Objeto utilize PDO::FETCH_OBJ

        return $products;
    }
}
