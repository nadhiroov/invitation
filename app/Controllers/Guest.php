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
			return view('guest/modal', $this->data);
		}
		echo '<div class="alert alert-danger text-danger" role="alert">
                    <strong>Max guest reached </strong> upgrade your package
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
		return view('guest/modal', $this->data);
	}

	public function getData()
	{
		$data = $this->model->getListData();
		$output = array(
			"data" => $data
		);
		return json_encode($output);
	}

	public function process()
	{
		$data = $this->model->getList();
		$param = $this->request->getPost('param');
		foreach ($param['acara'] as $key => $val) {
			$event[] = $key;
		}
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

	public function link($id) {
		$data = $this->model->attend(session()->id, $id);
		$link = base_url('attend/' . session()->id . '/'). $id;
		$text = "
		Assalamu'alaikum Wr. Wb
        Bismillahirahmanirrahim.

        Yth. $data[to] $data[name]
 
        Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami :
 
        Nazlah & Faraby
 
        Berikut link undangan kami untuk info lengkap dari acara bisa kunjungi :
  
        $link
        
        Merupakan suatu kebahagiaan bagi kami apabila $data[to] berkenan untuk hadir dan memberikan doa restu.
        
        Mohon maaf perihal undangan hanya di bagikan melalui pesan ini. Terima kasih banyak atas perhatiannya.
        
        Wassalamu'alaikum Wr. Wb.
        Terima Kasih.
		";
		return json_encode([
			'status'	=> 1,
			'data'		=> $text
			// 'message'	=> base_url("attent/$id/$code")
		]);
	}
}
