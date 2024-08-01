<?php

namespace App\Controllers;

use App\Models\MAcara;
use CodeIgniter\I18n\Time;

class Acara extends Core
{
	public function __construct()
	{
		$this->model = new MAcara();
	}

	public function index()
	{
		$res = $this->model->where('id_user', session()->id)->first();
		$data = [];
		if ($res != null) {
			$res['acara'] = json_decode($res['acara'], true);
			$data['aqad'] = $res['acara']['aqad'] ?? '';
			$data['resepsi'] = $res['acara']['resepsi'] ?? null;
			$data['walimah'] = $res['acara']['walimah'] ?? null;
			}
		$this->view->setData(['menu_website' => 'active', 'sub_acara' => 'active']);
		return view('acara/index', $data);
	}

	public function process()
	{
		$form = $this->request->getPost('form');
		$data = [
			'tanggal'	=> date('Y-m-d', strtotime($form['tanggal'])),
			'jam'		=> $form['jam'],
			'tempat'	=> $form['tempat'],
			'alamat'	=> $form['alamat']
		];

		$cekData = $this->model->where('id_user', session()->id)->first();
		if ($cekData == null) {
			$acara[$form['jenis']] = $data;
			$saveData['acara'] = json_encode($acara);
			$saveData['id_user'] = session()->id;
		} else {
			$cekData['acara'] = json_decode($cekData['acara'], true);
			$acara[$form['jenis']] = $data;
			$cekData['acara'] = json_encode(array_merge($cekData['acara'], $acara));
			$saveData = $cekData;
		}
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
		return json_encode($result);
	}
}
