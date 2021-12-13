<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index(){
        $products = new Product();
        $list = $products->index();

        require_once APP . 'views/templates/header.php';
        require_once APP . 'views/products/index.php';
        require_once APP . 'views/templates/footer.php';

    }
}
