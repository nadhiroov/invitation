<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Core extends BaseController
{

	public function __construct()
	{
		\Config\Services::session();
		$this->view = \Config\Services::renderer();
	}
}
