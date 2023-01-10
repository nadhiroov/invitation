<?php

namespace App\Controllers;

use App\Models\MMempelai;

class Mempelai extends Core
{
	public function __construct()
	{
		parent::__construct();
		$this->model = new MMempelai();
	}

	public function index()
	{
		$res = $this->model->where('id_user', $_SESSION['id'])->find();
		$data['content'] = @$res[0];
		$this->view->setData(['menu_website' => 'active', 'sub_mempelai' => 'active']);
		return view('mempelai/index', $data);
	}

	public function process()
	{
		$form = $this->request->getPost('form');
		if ($form['jenis'] == 'pria') {
			$data = [
				'nama_pria'				=> $form['nama_lengkap'],
				'nama_panggilan_pria'	=> $form['nama_panggilan'],
				'nama_ayah_pria'		=> $form['nama_ayah'],
				'nama_ibu_pria'		=> $form['nama_ibu']
			];
		} else {
			$data = [
				'nama_wanita'			=> $form['nama_lengkap'],
				'nama_panggilan_wanita'	=> $form['nama_panggilan'],
				'nama_ayah_wanita'		=> $form['nama_ayah'],
				'nama_ibu_wanita'		=> $form['nama_ibu']
			];
		}
		if ($form['id'] != null) {
			$data['id'] = intval($form['id']);
		}
		try {
			$this->model->save($data);
			$result = [
				'code' 		=> 1,
				'message'	=> 'succes',
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

	public function upload()
	{
		// dd($this->request->getPost('aidi'));
		$img = $this->request->getPost('image');
		$id = $this->request->getPost('aidi');
		$jns = $this->request->getPost('jenis');
		// dd($jns);
		// var_dump($jns);die;

		$data['id'] = intval($id);
		if ($jns == 'pria') {
			$data['foto_pria'] = $img;
		} elseif ($jns == 'wanita') {
			$data['foto_wanita'] = $img;
		} else {
			$data['foto_sampul'] = $img;
		}

		try {
			$this->model->save($data);
			$result = [
				'code'		=> 1,
				'message'	=> 'gambar tersimpan',
				'title'		=> 'success'
			];
		} catch (\ErrorException $e) {
			$result = [
				'code'		=> $e->getCode(),
				'message'	=> $e->getMessage(),
				'title'		=> 'error'
			];
		}
		echo json_encode($result);
	}
}
