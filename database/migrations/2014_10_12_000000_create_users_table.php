<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			/*$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->timestamps();
			*/
			$table->increments('id');

			$table->string('username')->unique();
			$table->string('password', 60);
			$table->string('nama');
			$table->string('role');
			$table->string('kode_surat');
			$table->string('id_group');
			$table->string('id_anggaran');

			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
