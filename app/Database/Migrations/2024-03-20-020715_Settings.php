<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Settings extends Migration
{
    protected $tableName  = 'settings';
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'to' => [
                'type' => 'JSON',
                'null' => true,
                'default' => '[["Bapak dan Ibu"],["Bapak Sekeluarga"],["Bapak"],["Ibu"]]',
            ],
            'jenis_acara' => [
                'type' => 'JSON',
                'null' => true,
                'default' => '[["Aqad"], ["Walimah"],["Unduh mantu"]]',
            ],
            'template' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'sampul' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'acara' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'ucapan' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'galeri' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'cerita' => [
                'type' => 'LONGTEXT',
                'null' => true,
                'default' => 1,
            ],
            'salam_pembuka' => [
                'type' => 'LONGTEXT',
                'null' => true,
                'charset' => 'utf8mb4',
                'collate' => 'utf8mb4_bin',
            ],
            'voice' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => 'voice.mp3',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createtable($this->tableName);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName);
    }
}
