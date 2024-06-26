<?php

namespace App\Controllers;

use App\Models\MGuest;
use App\Models\MPengaturan;

class Guest extends Core
{
	protected $setting;

	public function __construct()
	{
		parent::__construct();
		$this->model = new MGuest();
		$this->setting = new MPengaturan();
		helper('text');
		helper('array');
	}

	public function index()
	{
		$this->view->setData(['menu_guest' => 'active', 'sub_guest' => 'active']);
		return view('guest/index');
	}

	public function open_inv($id, $code)
	{
		$data = $this->model->attend($id, $code);
		return view('themes/tealflower', $data);
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
		// get selected data
		$data = $this->model->getList();
		$res = array_search($id, array_column($data['data'], 'id'));
		$this->data['content'] = (array) $data['data'][$res];
		$this->data['dt_to'] = explode('#', $this->data['content']['event']);

		// get setting
		$to = $this->setting->getList();
		$setting = $this->setting->getSetting();
		$this->data['acara'] = json_decode($setting['jenis_acara']);
		$this->data['to'] = $to;
		$this->data['id_guest'] = $id;
		return view('guest/edit', $this->data);
	}

	public function getData()
	{
		$data = $this->model->getListData();
		$output = array(
			"data" => $data
		);
		echo json_encode($output);
	}

	/* public function process()
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
	} */

	public function process()
	{
		$data = $this->model->getList();
		$param = $this->request->getPost('param');
		// acara
		foreach ($param['acara'] as $key => $val) {
			$event[] = $key;
		}
		// var_dump(implode('#', $event));
		// die;
		if (isset($param['id_guest'])) {
			$new_data = [
				'id'	=> $param['id_guest'],
				'to' => $param['optionTo'],
				'name' => $param['name'],
				'event' => implode('#', $event),
				'gift'	=> $param['hadiah']
			];
			$i = 0;
			foreach ($data['data'] as $key => $value) {
				if ($param['id_guest'] == $value->id) {
					unset($data['data'][$i]);
					// $data['data'][$i] = $new_data;
					break;
				}
				$i++;
			}
			// var_dump($data['data']);die;
		} else {
			$new_data = [
				'id'	=> random_string('alnum', 3),
				'to' => $param['optionTo'],
				'name' => $param['name'],
				'event' => implode('#', $event),
				'gift'	=> $param['hadiah']
			];
		}
		// var_dump($new_data);
		// die;

		$save = [];
		if ($data != null) {
			array_push($data['data'], $new_data);
			$save = [
				'id'	=> $data['id'],
				'data'	=> $data['data']
			];
		} else {
			$save['data'] = [$new_data];
		}
		$res = $this->model->saving($save);
		echo json_encode($res);
	}

	public function delete($id)
	{
		$data = $this->model->getList();
		$res = array_search($id, array_column($data['data'], 'id')); // mencari index tamu
		unset($data['data'][$res]); // menghapus array by index
		$res = $this->model->saving($data);
		return json_encode($res);
	}
}
