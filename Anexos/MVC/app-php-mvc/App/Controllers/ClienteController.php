<?php
namespace App\Controllers;

use App\Models\Cliente;

class ClienteController
{
    public function index(){
        $cliente = new Cliente();
        $clientes = $cliente->index();

        require_once APP . 'views/templates/header.php';
        require_once APP . 'views/clientes/index.php';
        require_once APP . 'views/templates/footer.php';
    }

    public function add(){
        // if we have POST data to create a new cliente entry
        if (isset($_POST["submit_add_cliente"])) {
            $cliente = new Cliente();
            $cliente->add($_POST["nome"], $_POST["idade"]);
        }

        header('location: '.URL.'clientes/index');
    }

    public function delete($id)
    {
        if (isset($id)) {
            $cliente = new Cliente();
            $cliente->delete($id);
        }
        header('location: ' . URL . 'clientes/index');
    }

    public function edit($id)
    {
        // Verifica se $id tá setado
        if (isset($id)) {
            $cliente = new Cliente();
            $cliente = $cliente->edit($id);

            if ($cliente === false) {
                $page = new \Core\ErrorController();
                $page->index();
            } else {
                require APP . 'views/templates/header.php';
                require APP . 'views/clientes/index.php';
                require APP . 'views/templates/footer.php';
            }
        // Caso $id não esteja setado, redireciona para a index
        }else{
            header('location: ' . URL . 'clientes/index');
        }
    }

    public function update()
    {
        if (isset($_POST["submit_update_cliente"])) {
            $cliente = new Cliente();
            $cliente->update($_POST["nome"], $_POST["idade"], $_POST['id']);
        }

        header('location: ' . URL . 'clientes/index');
    }

    public function search()
    {
        if (isset($_GET["submit_search_cliente"])) {
            $clientes = new Cliente();
            $clientes = $clientes->search($_GET['keyword']);

            require_once APP . 'views/templates/header.php';
            require_once APP . 'views/clientes/search.php';
            require_once APP . 'views/templates/footer.php';
        }

        header('location: ' . URL . 'clientes/index');
    }
}
