<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingFloorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('building_floors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('building_id')->unsigned()->index();
			$table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
			$table->tinyInteger('no');
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
		Schema::drop('building_floors');
	}

}
