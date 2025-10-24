<?php

namespace App\Controllers;

use App\Models\MFirstname;
use App\Models\MPengaturan;

class Firstname extends BaseController
{
	protected $data;

	public function __construct()
	{
		$this->model = new MPengaturan();
	}

	public function index()
	{
		$this->view->setData(['menu_guest' => 'active', 'sub_nick' => 'active']);
		$data = $this->model->select('to')->where('id_user', $_SESSION['id'])->first();
		$this->data['content'] = json_decode($data['to']);
		return view('setting/nickname/index', $this->data);
	}

	public function add()
	{
		return view('setting/nickname/modal');
	}

	public function edit($id)
	{
		$data = $this->model->getList();
		$index = array_search($id, $data['data']);
		if ($index !== false) {
			$this->data['content']['data'] = $id;
			$this->data['content']['index'] = $index;
		}
		return view('setting/nickname/modal', $this->data);
	}

	public function getData()
	{
		$data = $this->model->getListData();
		$output = array(
			"data" => $data
		);
		echo json_encode($output);
	}

	public function process()
	{
		$data = $this->model->getList();
		$index = $this->request->getvar('index');
		if ($index != null) {
			$data = $this->model->getList();
			$data['data'][$index] = $this->request->getPost('name');
			$saveData = [
				'to'	=> json_encode(array_values($data['data'])),
				'id'	=> intval($data['id'])
			];
		} else {
			$name = $this->request->getPost('name');
			if ($data != null) {
				array_push($data['data'], $name);
			} else {
				$data['data'][] = $name;
			}
			$saveData = [
				'to'	=> json_encode(array_values($data['data'])),
				'id'	=> intval($data['id'])
			];
		}
		try {
			$this->model->save($saveData);
			return json_encode([
				'code' 		=> 1,
				'message'	=> 'Data saved!!',
				'title'		=> 'Success'
			]);
		} catch (\Exception $er) {
			return json_encode([
				'code' 		=> $er->getCode(),
				'message'	=> $er->getMessage(),
				'title'		=> 'Error'
			]);
		}
	}

	public function delete($name = '')
	{
		$data = $this->model->getList();
		$filteredData = array_filter($data['data'], function ($value) use ($name) {
			return $value !== $name;
		});
		$saveData = [
			'to'	=> json_encode(array_values($filteredData)),
			'id'	=> intval($data['id'])
		];
		try {
			$this->model->save($saveData);
			return json_encode([
				'code' 		=> 1,
				'message'	=> 'Data saved!!',
				'title'		=> 'Success'
			]);
		} catch (\Exception $er) {
			return json_encode([
				'code' 		=> $er->getCode(),
				'message'	=> $er->getMessage(),
				'title'		=> 'Error'
			]);
		}
	}
}
