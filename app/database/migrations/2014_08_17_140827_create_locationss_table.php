<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationssTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	 public function up() {
			
		Schema::create('locations', function(Blueprint $table) {
			$table -> increments("id");
			$table -> string("name");
			$table -> string("lat");
			$table -> string("long");
			$table -> text("description");
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
		Schema::table('locations', function(Blueprint $table)
		{
			Schema::drop('locations');
		});
	}
}