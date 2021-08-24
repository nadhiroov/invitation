<?php

namespace App\Controllers;

use App\Models\MGuest;

class Guest extends Core
{
	public function __construct()
	{
		parent::__construct();
		$this->model = new MGuest();
	}

	public function index()
	{
		$this->view->setData(['menu_guest' => 'active', 'sub_guest' => 'active']);
		return view('guest/index');
	}

	public function add()
	{
		$data = $this->model->getList();
		if ($data['data'] == null) {
			return view('guest/add');
		}

		if (count((array)$data['data']) < $_SESSION['max_user']) {
			return view('guest/add');
		}
		echo '</div>
		<div class="modal-body">
			<p class="text-danger">Max Guest Reached</p>
		</div>';
	}

	public function edit($id)
	{
		$data = $this->model->getList();
		$res = array_search($id, array_column($data['data'], '0'));
		$edt['content'] = $data['data'][$res];
		return view('guest/edit', $edt);
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
		$id = intval($this->request->getPost('id'));
		if ($id != null) {
			$data = $this->model->getList();
			$find = array_search($id, array_column($data['data'], '0')); //mencari index yg di edit
			$edited = [$find => [$id, $this->request->getPost('name')]];
			$res = array_replace($data['data'], $edited);
			$data['data'] = $res;
		} else {
			$data_guest = [
				intval(date('ymdHis')),
				$this->request->getPost('name')
			];
			if ($data != null) {
				array_push($data['data'], $data_guest);
			} else {
				$data['data'][] = $data_guest;
			}
		}

		$res = $this->model->saving($data);
		echo json_encode($res);
	}

	public function delete($id)
	{
		$data = $this->model->getList();
		$res = array_search($id, array_column($data['data'], '0')); // mencari index tamu
		unset($data['data'][$res]); // menghapus array by index
		$res = $this->model->saving($data);
		return json_encode($res);
	}
}
