<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Attributes extends Migration
{
	public function up()
	{
		
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'parent_id'       => [
                                'type'           => 'INT',
                                'constraint'     => 10,
                        ],
                        'attributes' => [
                                'type'           => 'VARCHAR',
                                'null'           => true,
                        ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('attributes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('attributes');
	}
}
