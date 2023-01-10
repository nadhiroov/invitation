<?php

namespace App\Controllers;

use App\Models\MGuest;
use App\Models\MPengaturan;

class Guest extends Core
{
	public function __construct()
	{
		parent::__construct();
		$this->model = new MGuest();
		$this->setting = new MPengaturan();
		helper('text');
	}

	public function index()
	{
		$this->view->setData(['menu_guest' => 'active', 'sub_guest' => 'active']);
		return view('guest/index');
	}

	public function add()
	{
		$data = $this->model->getList();
		if ($data == null || count((array)$data['data']) < $_SESSION['max_user']) {
			$to = $this->setting->getList();
			$setting = $this->setting->getSetting();
			$this->data['acara'] = json_decode($setting['jenis_acara']);
			$this->data['to'] = $to;
			$this->data['id'] = @$data['id'];
			return view('guest/add', $this->data);
		}
		echo '</div>
		<div class="modal-body">
			<p class="text-danger">Max Guest Reached</p>
		</div>';
	}

	public function edit($id = '')
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

	public function processNew()
	{
		$data = $this->model->getList();
		$id = intval($this->request->getPost('id'));
		$param = $this->request->getPost('param');
		// acara
		foreach ($param['acara'] as $key => $val) {
			$event[] = $key;
		}
		$new_data = [
			'id'	=> random_string('alnum', 7) . $_SESSION['id'],
			'to' => $param['optionTo'],
			'name' => $param['name'],
			'event' => implode('#', $event),
			'gift'	=> $param['hadiah']
		];
		if ($data != null) {
			array_push($data['data'], $new_data);
		}
		// $arr = (array) $data['data'];
		var_dump($data);
		die;
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
