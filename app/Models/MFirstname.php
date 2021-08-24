<?php

namespace App\Models;

use CodeIgniter\Model;

class MFirstname extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'settings';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'to', 'template'];

	public function getListData($param = '')
	{
		$data = $this->where('id_user', $_SESSION['id'])->findAll();
		$records = [];
		if ($data != null) {
			$datas = json_decode($data[0]['to']);
			foreach ($datas as $row) {
				$records[] = array(
					$row[0],
					'<div class="form-button-action">
						<a href="#edit" data-toggle="modal" data-id="' . $row[0] . '" class="btn btn-link btn-primary btn-lg" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
						<a onclick="confirmDelete(this)" data-target="firstname/delete/" data-id="' . $row[0] . '" class="btn btn-link btn-danger confirmDelete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
					</div>'
				);
			}
		}		
		return $records;
	}

	public function getList() // fungsi untuk mendapatkan list guest, data sudah matang
	{
		$data = $this->where('id_user', $_SESSION['id'])->findAll();
		if ($data != null) {
			$data = [
				'data' 	=> json_decode($data[0]['to']),
				'id'	=> $data[0]['id']
			];
			return $data;
		}
		return null;
	}

	public function saving($param)
	{
		$data = [
			'id_user'	=> $_SESSION['id'],
			'to'		=> json_encode(array_values($param['data']))
		];
		if (isset($param['id'])) {
			$data['id'] = intval($param['id']);
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
	
}
