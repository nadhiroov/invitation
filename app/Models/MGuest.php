<?php

namespace App\Models;

use CodeIgniter\Model;

class MGuest extends Model
{
	protected $table                = 'visitors';
	protected $primaryKey           = 'id';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'visitors_names'];

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	public function getListData()
	{
		$data = $this->where('id_user', $_SESSION['id'])->findAll();
		$records = [];
		if ($data != null) {
			return json_decode($data[0]['visitors_names'], true);
		}
		return $records;
	}
	// data-toggle="tooltip" title="Copy link"
	public function getList() // fungsi untuk mendapatkan list guest, data sudah matang
	{
		$data = $this->where('id_user', $_SESSION['id'])->findAll();
		if ($data != null) {
			$data = [
				'data' 	=> json_decode($data[0]['visitors_names']),
				'id'	=> $data[0]['id']
			];
			return $data;
		}
		return null;
	}

	public function saving($param)
	{
		$data = [
			'id_user' 			=> $_SESSION['id'],
			'visitors_names'	=> json_encode(array_values($param['data']))
		];
		if (isset($param['id'])) {
			$data['id'] = json_encode(intval($param['id']));
		}
		try {
			$this->save($data);
			$result = [
				'code' 		=> 1,
				'message'	=> 'Data saved!!',
				'title'		=> 'Success'
			];
		} catch (\Exception $e) {
			$result = [
				'code' 		=> $e->getCode(),
				'message'	=> $e->getMessage(),
				'title'		=> 'Error'
			];
		}
		return $result;
	}

	public function attend($id, $code)
	{
		$data = $this->where('id_user', $id)->findAll();
		$datas = [];
		if ($data != null) {
			foreach (json_decode($data[0]['visitors_names'], true) as $key) {
				if ($key['id'] == $code) {
					$datas = $key;
					break;
				}
			}
			return $datas;
		}
		return null;
	}
}
