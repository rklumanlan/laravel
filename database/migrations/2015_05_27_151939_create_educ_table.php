<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('education', function(Blueprint $table)
		{
			$table->increments('educ_id');
			$table->integer('user_id');
			$table->string('school');
			$table->string('major')->nullable();
			$table->string('degree');
			$table->string('desc')->nullable();
			$table->integer('year1');
			$table->integer('year2');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('education');
	}

}
