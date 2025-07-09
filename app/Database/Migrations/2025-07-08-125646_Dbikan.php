<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dbikan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikan' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_ikan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_latin' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'habitat' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'diet' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'asal' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gambar_ikan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_ikan', true);
        $this->forge->createTable('ikan');
        $this->forge->addField([
            'id_acara' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_acara' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'audiens' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_mulai' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_berakhir' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_gmaps' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'gambar_acara' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_acara', true);
        $this->forge->createTable('acara');
    }

    public function down()
    {
        $this->forge->dropTable('ikan');
        $this->forge->dropTable('acara');
    }
}
