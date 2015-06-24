<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('fname');
			$table->string('mname')->nullable();
			$table->string('lname');
			$table->string('address');
			$table->string('city');
			$table->string('sex');
			$table->string('age');
			$table->string('imgname');
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
		Schema::drop('personal_info');
	}

}
