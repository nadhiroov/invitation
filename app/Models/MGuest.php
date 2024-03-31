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
			$datas = json_decode($data[0]['visitors_names'], true);
			foreach ($datas as $row) {
				$records[] = array(
					$row['to'],
					$row['name'],
					explode('#', $row['event']),
					$row['gift'] == 0 ? 'Tidak' : 'Ya',
					'<div class="form-button-action">
					<button class="btn btn-link btn-primary btn-lg btn-clipboard" data-clipboard-text="' . base_url('attend/' . $data[0]['id_user'] . '/' . $row['id']) . '"><i class="icon-link"></i></button><span class="copy-message"></span>
					<a href="#edit" data-toggle="modal" data-id="' . $row['id'] . '" class="btn btn-link btn-primary btn-lg" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
					<a onclick="confirmDelete(this)" data-target="guest/delete/" data-id="' . $row['id'] . '" class="btn btn-link btn-danger confirmDelete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
					</div>'
				);
			}
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
