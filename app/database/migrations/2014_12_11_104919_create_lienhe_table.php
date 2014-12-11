<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLienheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lienhe', function(Blueprint $table)
		{
			$table->integer('id_lienhe', true);
			$table->text('hoten');
			$table->text('cty');
			$table->text('email');
			$table->integer('dienthoai');
			$table->integer('fax');
			$table->text('diachi');
			$table->text('noidung');
			$table->dateTime('ngaylienhe');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lienhe');
	}

}
