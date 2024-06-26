<?php

namespace App\Models;

use CodeIgniter\Model;

class MMempelai extends Model
{
	protected $table                = 'mempelai';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'nama_pria', 'nama_panggilan_pria', 'nama_ayah_pria', 'nama_ibu_pria', 'foto_pria', 'nama_wanita', 'nama_panggilan_wanita', 'nama_ayah_wanita', 'nama_ibu_wanita', 'foto_wanita', 'foto_sampul'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	public function getMempelai($param = '')
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
