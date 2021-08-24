<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends Core
{
	public function index()
	{
		$this->view->setData(['menu_dashboard' => 'active']);
		return view('layout/template');
	}
}
