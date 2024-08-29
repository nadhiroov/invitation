<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Altersetting extends Migration
{
    protected $tabelNama = 'settings';
    public function up()
    {
        $fields = [
            'jenis_acara' => [
                'type' => 'JSON',
                'null' => true,
                'default' => '[["Aqad"],["Resepsi"], ["Walimah"]]',
            ],
        ];
        $this->forge->modifyColumn($this->tabelNama, $fields);
    }

    public function down()
    {
        $fields = [
            'jenis_acara' => [
                'type' => 'JSON',
                'null' => true,
                'default' => '[["Aqad"], ["Unduh Mantu"],["Resepsi"]]',
            ],
        ];
        $this->forge->modifyColumn($this->tabelNama, $fields);
    }
}
