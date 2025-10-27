<?php

namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $returnType           = 'array';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['fullname', 'username', 'password'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	public function getListData($param = '')
	{
		$data = $this->where('permission', $param)->findAll();
		$records = [];
		foreach ($data as $row) {
			$records[] = array(
				$row['fullname'],
				$row['username'],
				$row['max_user'],
				$row['email'] ?? '-',
				'<div class="form-button-action">
					<a href="#edit" data-toggle="modal" data-id="'.$row['id'].'" class="btn bg-warning-subtle text-warning" data-toggle="tooltip" title="Edit"><i class="ti ti-edit fs-4 me-2"></i></a>
					<a onclick="confirmDelete(this)" data-target="user/delete/" data-id="' . $row['id'] . '" class="btn bg-danger-subtle text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti ti-trash fs-4 me-2"></i></a>
				</div>'
			);
		}
		return $records;
	}
}
