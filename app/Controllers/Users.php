<?php

namespace App\Controllers;

use App\Models\Muser;

class Users extends Core
{

	public function __construct()
	{
		parent::__construct();
		$this->model = new Muser();
	}

	public function index()
	{
		$data = [
			'result'	=> $this->model->where('permission', 2)->findAll(),
			'permission' => 'User'
		];
		$this->view->setData(['sub_user' => 'active', 'menu_user' => 'active']);
		return view('user/index', $data);
	}

	public function admin()
	{
		$data = [
			'result'	=> $this->model->where('permission', 1)->findAll(),
			'permission' => 'Admin'
		];
		$this->view->setData(['sub_admin' => 'active', 'menu_user' => 'active']);
		return view('user/index', $data);
	}

	public function edit($id = '')
	{
		$data = $this->model->find($id);
		// $data = $this->model->where('id', $id)->findAll();
		dd($data);
		$res = array_search($id, array_column($data['data'], '0'));
		$edt['content'] = $data['data'][$res];
		return view('guest/edit', $edt);
	}

	public function delete($id)
	{
		try {
			$this->model->delete($id);
			$data = [
				'code' 		=> 1,
				'message'	=> 'success'
			];
		} catch (\Exception $e) {
			$data = [
				'code' 		=> $e->getCode(),
				'message'	=> $e->getMessage()
			];
		}
		return json_encode($data);
	}

	public function getData()
	{
		$param = $_POST['rowid'];
		$data = $this->model->getListData($param);
		$output = array(
            "data" => $data
        );
        echo json_encode($output);
	}
}
