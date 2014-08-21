<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('street')->nullable();
			$table->string('num')->nullable();
			$table->integer('zip')->nullable();
			$table->string('city')->nullable();
			$table->string('country')->nullable();
			$table->string('lat')->nullable();
			$table->string('lon')->nullable();
			$table->string('img_url')->nullable();
			$table->timestamps();
		});
	}

//
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
