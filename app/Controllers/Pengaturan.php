<?php

namespace App\Controllers;

class Pengaturan extends Core
{
	public function index()
	{
		$this->view->setData(['menu_website' => 'active', 'sub_pengaturan' => 'active']);
		return view('setting/fitur/index');
	}
}
