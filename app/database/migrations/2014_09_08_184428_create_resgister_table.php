<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResgisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registers', function($table)
		{
		    $table->increments('id');
		    $table->string('firstname', 100);
		    $table->string('lastname', 100);
		    $table->string('tel', 30);
		    $table->string('email', 100);
		    $table->text('message')->nullable();
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
		Schema::dropIfExists('registers');
	}

}
