<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgressImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('progress_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('progress_id')->unsigned()->index();
			$table->foreign('progress_id')->references('id')->on('progresses')->onDelete('cascade');
			$table->string('images',255);
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
		Schema::drop('progress_images');
	}

}
