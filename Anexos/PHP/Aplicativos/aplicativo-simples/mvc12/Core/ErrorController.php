<?php

namespace Core;

class ErrorController
{
    public function index()
    {
        // load views
        require APP . 'views/templates/header.php';
        require APP . 'views/error/index.php';
        require APP . 'views/templates/footer.php';
    }
}
