<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemembertokenColumnThanhvienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('thanhvien', function(Blueprint $table)
		{
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('thanhvien', function(Blueprint $table)
		{
			$table->dropColumn('remember_token');
		});
	}

}
