<?php

require_once 'vendor/autoload.php';

use Mvc\Controller\ClientesController;

$con = new ClientesController();
print $con->index();
