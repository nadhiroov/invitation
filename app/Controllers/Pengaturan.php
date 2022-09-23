<?php

namespace App\Controllers;

use App\Models\MPengaturan;

class Pengaturan extends Core
{
	public function __construct()
	{
		parent::__construct();
		$this->model = new MPengaturan();
	}
	
	public function index()
	{
		$data['content'] = $this->model->getSetting();
		$this->view->setData(['menu_website' => 'active', 'sub_pengaturan' => 'active']);
		return view('setting/fitur/index', $data);
	}

	public function process()
	{
		$form = $this->request->getPost('form');
		var_dump($form);
	}
}
