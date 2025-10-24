<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Core extends BaseController
{
	// protected $view;
	protected $model;
	protected $data;
	
	public function __construct()
	{
		\Config\Services::session();
		$this->view = \Config\Services::renderer();
	}
}
