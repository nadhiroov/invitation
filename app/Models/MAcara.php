<?php

namespace App\Models;

use CodeIgniter\Model;

class MAcara extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'acara';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'tanggal_akad', 'jam_akad', 'tempat_akad', 'alamat_akad', 'tanggal_resepsi', 'jam_resepsi', 'tempat_resepsi', 'alamat_resepsi'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';
}
