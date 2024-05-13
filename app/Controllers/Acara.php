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
		$res = $this->model->where('id_user', session()->id)->first();
		// $this->model->delete(2);
		// dd($res);
		$data = [];
		if ($res != null) {
			$res['acara'] = json_decode($res['acara'], true);
			$data['akad'] = $res['acara']['akad'] ?? '';
			$data['resepsi'] = $res['acara']['resepsi'] ?? '';
			$data['unduh'] = $res['acara']['unduh'] ?? '';
			// dd(date('Y-m-d', strtotime('04 May 2025')));
			// dd($res['acara']['akad']['tanggal']);
		}
		$this->view->setData(['menu_website' => 'active', 'sub_acara' => 'active']);
		return view('acara/index', $data);
	}

	public function process()
	{
		$form = $this->request->getPost('form');
		$data = [
			'tanggal'	=> $form['tanggal'],
			'jam'		=> $form['jam'],
			'tempat'	=> $form['tempat'],
			'alamat'	=> $form['alamat']
		];
		// var_dump($form);die;
		$cekData = $this->model->where('id_user', session()->id)->first();
		if ($cekData == null) {
			$acara[$form['jenis']] = $data;
			$saveData['acara'] = json_encode($acara);
			$saveData['id_user'] = session()->id;
		}else{
			$cekData['acara'] = json_decode($cekData['acara'], true);
			$acara[$form['jenis']] = $data;
			$cekData['acara'] = json_encode(array_merge($cekData['acara'], $acara));
			$saveData = $cekData;
		}
		// var_dump($cekData);die;

		try {
			$this->model->save($saveData);
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
