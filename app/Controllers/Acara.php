<?php

namespace App\Controllers;

use App\Models\MAcara;

class Acara extends Core
{
	public function __construct()
	{
		$this->model = new MAcara();
	}

	public function index()
	{
		$res = $this->model->where('id_user', $_SESSION['id'])->find();
		// dd($res);
		$data = [];
		if (!empty($res)) {
			$data['content'] = $res[0];
		}
		$this->view->setData(['menu_website' => 'active', 'sub_acara' => 'active']);
		return view('acara/index', $data);
	}

	public function process()
	{
		$form = $this->request->getPost('form');
		$data = [
			'id_user'					=> $_SESSION['id'],
			'tanggal_' . $form['jenis']	=> $form['tanggal'],
			'jam_' . $form['jenis']		=> $form['jam'],
			'tempat_' . $form['jenis']	=> $form['tempat'],
			'alamat_' . $form['jenis']	=> $form['alamat']
		];
		dd($form);
		if ($form['id'] != null) {
			$data['id'] = intval($form['id']);
		}

		try {
			$this->model->save($data);
			$result = [
				'code' 		=> 1,
				'message'	=> 'success',
				'title'		=> 'Data saved !!'
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
