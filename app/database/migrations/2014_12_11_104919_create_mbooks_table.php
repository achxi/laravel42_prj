<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMbooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mbooks', function(Blueprint $table)
		{
			$table->integer('books_id', true);
			$table->string('books_title', 100);
			$table->string('books_author', 100);
			$table->string('books_img', 100);
			$table->string('books_thumb', 100);
			$table->integer('books_price');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mbooks');
	}

}
