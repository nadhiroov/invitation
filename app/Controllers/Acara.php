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
		// $dt   = new \DateTime('now');
		// $time = Time::createFromInstance($dt, 'id_ID');
		// dd($time->toLocalizedString('MMM d, yyyy'));
		// dd(date('Y-M-d', strtotime($time)));
		$res = $this->model->where('id_user', session()->id)->first();
		// $this->model->delete(6);
		// dd($res);
		$data = [];
		if ($res != null) {
			$res['acara'] = json_decode($res['acara'], true);
			$data['akad'] = $res['acara']['akad'] ?? '';
			$data['akad']['tanggal'] = date('d m Y', strtotime($data['akad']['tanggal']));
			$data['resepsi'] = $res['acara']['resepsi'] ?? null;
			$data['unduh'] = $res['acara']['unduh'] ?? null;
		}
		$this->view->setData(['menu_website' => 'active', 'sub_acara' => 'active']);
		return view('acara/index', $data);
	}

	public function process()
	{
		$form = $this->request->getPost('form');
		// $form['tanggal']   = new \DateTime($form['tanggal']);
		$time = Time::parse($form['tanggal'], 'id_ID');
		dd($time->toLocalizedString('d MMM yyyy'));
		$data = [
			'tanggal'	=> date('d m Y', strtotime($form['tanggal'])),
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
		echo json_encode($result);
	}
}
