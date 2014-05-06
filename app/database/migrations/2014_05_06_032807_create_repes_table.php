<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('repes', function(Blueprint $table)
		{
			$table->string('user');
			$table->integer('figu');
			$table->integer('count');
		});
		
		Schema::table('repes', function(Blueprint $table)
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
		Schema::table('repes', function(Blueprint $table)
		{
			//
		});
	}

}
