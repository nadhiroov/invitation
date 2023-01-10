<?php

namespace App\Controllers;

use App\Models\MFirstname;
use App\Models\MPengaturan;

class Firstname extends Core
{
	public function __construct()
	{
		parent::__construct();
		$this->model = new MPengaturan();
	}

	public function index()
	{
		$this->view->setData(['menu_guest' => 'active', 'sub_nick' => 'active']);
		return view('setting/nickname/index');
	}

	public function add()
	{
		return view('setting/nickname/add');
	}

	public function edit($id)
	{
		$data = $this->model->getList();
		$res = array_search($id, array_column($data['data'], '0'));
		$edt['content'] = $data['data'][$res];
		return view('setting/nickname/edit', $edt);
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
		$id = $this->request->getvar('id');
		if ($id != null) {
			$data = $this->model->getList();
			$find = array_search($id, array_column($data['data'], '0')); //mencari index yg di edit
			$edited = [$find => [$this->request->getPost('name')]];
			$res = array_replace($data['data'], $edited);
			$data['data'] = $res;
		} else {
			$name = [$this->request->getPost('name')];
			if ($data != null) {
				array_push($data['data'], $name);
			} else {
				$data['data'][] = $name;
			}
		}

		$res = $this->model->saving($data);
		echo json_encode($res);
	}

	public function delete($name)
	{
		$data = $this->model->getList();
		$res = array_search($name, array_column($data['data'], '0')); // mencari index tamu
		unset($data['data'][$res]); // menghapus array by index
		$res = $this->model->saving($data);
		return json_encode($res);
	}
}
