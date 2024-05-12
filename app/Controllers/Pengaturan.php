<?php

namespace App\Controllers;

use App\Models\MPengaturan;

class Pengaturan extends Core
{
	public function __construct()
	{
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
		$data = [
			'ucapan' => $form['ucapan'] ?? 0,
			'galeri' => $form['galeri'] ?? 0,
			'cerita' => $form['cerita'] ?? 0,
			'id'	 => $form['id']
		];
		// var_dump($data);
		// die;
		try {
			$this->model->save($data);
			$result = [
				'code' 		=> 1,
				'message'	=> 'Data saved!!',
				'title'		=> 'Success'
			];
		} catch (\Exception $e) {
			$result = [
				'code' 		=> $e->getCode(),
				'message'	=> $e->getMessage(),
				'title'		=> 'Error'
			];
		}
		echo json_encode($result);
	}
}
