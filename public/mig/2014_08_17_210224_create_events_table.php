<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table -> increments("id");
			$table -> string("name");
			$table -> datetime("start");
			$table -> datetime("end");
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table -> timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events', function(Blueprint $table)
		{
			Schema::dropTable($table);
		});
	}

}
