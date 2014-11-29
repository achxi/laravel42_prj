<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThanhvienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thanhvien', function(Blueprint $table)
		{
			$table->string('hoten');
			$table->string('diachi');
			$table->string('email');
			$table->text('dienthoai');
			$table->string('user')->primary();
			$table->string('pass', 32);
			$table->integer('hieuluc');
			$table->integer('capquyen');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thanhvien');
	}

}
