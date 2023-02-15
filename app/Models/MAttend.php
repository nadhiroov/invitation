<?php

namespace App\Models;

use CodeIgniter\Model;

class Mattend extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
    public function __construct()
    {
        parent::__construct();
        $db      = \Config\Database::connect();

        $this->mempelai = $db->table('mempelai');
        $this->acara = $db->table('acara');
        $this->visitors = $db->table('visitors');
    }
    
}
