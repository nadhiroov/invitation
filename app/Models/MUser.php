<?php

namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = [];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	public function getListData($param = '')
	{
		$data = $this->where('permission', $param)->findAll();
		$records = [];
		foreach ($data as $row) {
			$records[] = array(
				$row['fullname'],
				$row['username'],
				$row['email'],
				'<div class="form-button-action">
					<a href="#detail" data-toggle="modal" class="btn btn-link btn-primary btn-lg" data-toggle="tooltip" title="Detail"><i class="fa fa-edit"></i></a>
					<a onclick="confirmDelete(this)" data-target="user/delete/" data-id="' . $row['id'] . '" class="btn btn-link btn-danger confirmDelete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
				</div>'
			);
		}
		return $records;
	}
}
