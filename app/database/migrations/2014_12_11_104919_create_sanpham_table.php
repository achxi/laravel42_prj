<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSanphamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sanpham', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_loai');
			$table->text('tensp');
			$table->text('cauhinh')->nullable();
			$table->text('mota');
			$table->text('hinh');
			$table->integer('gia');
			$table->text('ghichu');
			$table->integer('soluongban');
			$table->integer('id_menu');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sanpham');
	}

}
