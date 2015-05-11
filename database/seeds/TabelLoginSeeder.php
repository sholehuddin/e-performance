<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TabelLoginSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tbl_login')->delete();

		$sesi = array(
			'id' => 1,
			'id' => 1,
			'id' => 1,
			'id' => 1,
			'id' => 1,
			'id' => 1,
		);

		DB::table('tbl_login')->insert($sesi);
	}

}
