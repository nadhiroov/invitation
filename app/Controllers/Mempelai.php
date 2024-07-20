<?php

namespace App\Controllers;

use App\Models\MMempelai;
use CodeIgniter\Files\File;

class Mempelai extends Core
{
	public function __construct()
	{
		$this->model = new MMempelai();
	}

	public function index()
	{
		$res = $this->model->where('id_user', session()->id)->first();
		$data['content'] = $res;
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
		$data['id_user'] = session()->id;
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

	public function upload()
	{
		$img = $this->request->getFile('image');
		$id = $this->request->getPost('aidi');
		$jns = $this->request->getPost('jenis');
		// dd($img);
		// var_dump($img);die;
		$validationRule = [
			'image' => [
				'rules' => [
					'uploaded[image]',
					'is_image[image]',
					'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[image,2048]',
				],
			],
		];
		if (!$this->validate($validationRule)) {
			$result = [
				'code'		=> $this->validator->getValidated(),
				'message'	=> $this->validator->getErrors(),
				'title'		=> 'error'
			];
			echo json_encode($result);
			return false;
		}

		if (!$img->hasMoved()) {
			$newName = $img->getRandomName();
			$img->move(WRITEPATH . 'uploads/mempelai', $newName);
		}


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

	public function serveImage($filename)
	{
		$path = WRITEPATH . 'uploads/mempelai/' . $filename;

		if (file_exists($path)) {
			return $this->response
				->setHeader('Content-Type', mime_content_type($path))
				->setBody(file_get_contents($path));
		}
	}
}
