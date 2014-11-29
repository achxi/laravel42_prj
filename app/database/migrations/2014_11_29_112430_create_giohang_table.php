<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiohangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('giohang', function(Blueprint $table)
		{
			$table->integer('id_giohang', true);
			$table->integer('id');
			$table->string('user');
			$table->integer('soluong');
			$table->text('tinhtrang');
			$table->dateTime('ngaydat');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('giohang');
	}

}
