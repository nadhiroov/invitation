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
			/* foreach ($datas as $row) {
				$records[] = array(
					$row['to'],
					$row['name'],
					explode('#', $row['event']),
					$row['gift'] == 0 ? 'Tidak' : 'Ya',
					'<div class="button-group">
						<button type="button" class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="tooltip" data-bs-placement="top" title="copy link"><i class="fs-5 ti ti-copy"></i></button>

						<button type="button" class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center btnEdit" data-id="' . $row['id'] . '" data-bs-toggle="modal" data-bs-target="#modal"><i class="fs-5 ti ti-edit"></i></button>

						<button type="button" class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center" onclick="confirmDeleteV2(this)" data-id="' . $row['id'] . '" data-target="guest/delete"><i class="fs-5 ti ti-trash"></i></button>
					</div>'
				);
			} */
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
