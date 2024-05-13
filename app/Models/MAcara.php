<?php

namespace App\Models;

use CodeIgniter\Model;

class MAcara extends Model
{
	protected $table                = 'acara';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields		= ['id_user', 'acara'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	public function getAcara($param = '')
	{
		if (!empty($param)) {
			$id = $param['id'];
		} else {
			$id = $_SESSION['id'];
		}
		$res = $this->where('id_user', $id)->findAll();
		return $res[0];
	}
}
