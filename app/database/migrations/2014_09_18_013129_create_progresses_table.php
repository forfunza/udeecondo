<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('progresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('percent')->nullable();
			$table->tinyInteger('is_topic')->default(0);
			$table->string('image',255);
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
		Schema::drop('progresses');
	}

}
