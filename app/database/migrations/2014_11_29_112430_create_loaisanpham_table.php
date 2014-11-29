<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoaisanphamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loaisanpham', function(Blueprint $table)
		{
			$table->integer('id_loai')->primary();
			$table->integer('id_nhom');
			$table->text('tenloaisp');
			$table->string('ghichu');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loaisanpham');
	}

}
