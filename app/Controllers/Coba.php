<?php

namespace App\Controllers;

use App\Models\M_coba;

use App\Controllers\BaseController;

class Coba extends BaseController
{
	protected $table;
	public function __construct()
	{
		$this->model = new M_coba();
		$this->table = new \CodeIgniter\View\Table();
	}

	public function index()
	{
		$data = $this->model->getData();
		$tb = $data[0]['visitors_names'];
		$arr['tbl'] = json_decode($tb);
		// dd($arr);
		// $this->table->setHeading('Id', 'Name');
		// echo $this->table->generate($arr);
		return view('coba', $arr);
	}

	public function get()
	{
		
	}

	public function add()
	{
		$id = 2; // id master user
		$id_user = 151; // id tamu yg ditambah
		$nama = 'Abu Ubaidah'; // nama tamu
		$data_visit = [$id_user, $nama];
		$data = $this->model->getData($id);
		$data = json_decode($data[0]['visitors_names']);
		if ($data != null) {
			array_push($data, $data_visit);
		}else{
			$data[] = $data_visit;
		}
		$ecn = json_encode($data);
		dd($ecn);
	}

	public function delete()
	{
		$id_user = 141; // id tamu yg dihapus
		$data = $this->model->getData();
		$data = json_decode($data[0]['visitors_names']);
		$res = array_search($id_user, array_column($data, '0')); // mencari index tamu
		unset($data[$res]);
		dd($data);
	}

	public function edit()
	{
		$id_user = 3;
		$id_guest = 211;
		$nalsa = 'Umar';
		$gt = [$id_guest, $nalsa];
		$data = $this->model->getData($id_user);
		$data = json_decode($data[0]['visitors_names']);
		$find = array_search(211, array_column($data, '0'));
		$edited = [$find => $gt];
		$res = array_replace($data, $edited);
		dd($res);
		$this->table->setHeading('Id', 'Name');
		$this->table->function = 'htmlspecialchars';
		echo $this->table->generate($res);
	}

	public function table()
	{
		$table = new \CodeIgniter\View\Table();
		$table->setHeading(array('Name', 'Color', 'action'));

		$table->addRow(['Fred', 'Blue', '<a data-t="0" class="btn btn-primary" onclick="myFunction()">detail</a>']);
		$table->addRow(['Mary', 'Red', '<a data-t="1" class="btn btn-primary" onclick="myFunction()">detail</a>']);
		$table->addRow(['John', 'Green', '<a data-t="2" class="btn btn-primary" onclick="myFunction()">detail</a>']);

		$data_tb = $table->generate();
		return view('coba', ['tbl' => $data_tb]);
	}
}
