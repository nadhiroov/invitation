<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visitors extends Migration
{
    protected $tableName  = 'visitors';
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
            'visitors_names' => [
                'type' => 'JSON',
                'null' => true,
                'default' => '[]',
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
