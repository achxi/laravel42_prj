<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHoadonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hoadon', function(Blueprint $table)
		{
			$table->integer('id_hoadon', true);
			$table->string('hoten');
			$table->text('diachi');
			$table->string('email');
			$table->integer('dienthoai');
			$table->integer('fax');
			$table->string('cty');
			$table->integer('id');
			$table->integer('soluong');
			$table->float('tongtien', 10, 0);
			$table->dateTime('ngaydat');
			$table->text('tinhtrang');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hoadon');
	}

}
