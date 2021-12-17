<?php

namespace Mvc\Controller;

use Mvc\View\ClientesView;

class ClientesController
{
	public function index(){
		$view = new ClientesView();
		return $view->index();
	}
}
