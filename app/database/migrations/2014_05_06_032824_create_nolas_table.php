<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNolasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nolas', function(Blueprint $table)
		{
			$table->string('user');
			$table->integer('figu');
		});

		Schema::table('nolas', function(Blueprint $table)
		{
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nolas', function(Blueprint $table)
		{
			//
		});
	}

}
