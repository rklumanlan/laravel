<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->increments('comp_id');
			$table->integer('user_id')->nullable();
			$table->string('compname')->nullable();
			$table->string('title')->nullable();
			$table->string('location')->nullable();
			$table->string('compdesc')->nullable();
			$table->integer('mon1')->nullable();
			$table->integer('cyear1')->nullable();
			$table->integer('mon2')->nullable();
			$table->integer('cyear2')->nullable();
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
		Schema::drop('company');
	}

}
