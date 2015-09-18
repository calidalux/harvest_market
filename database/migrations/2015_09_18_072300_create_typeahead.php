<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeahead extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('typeaheads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('size');
			$table->string('width'); 	//Ширина профиля
			$table->string('height'); //Высота профиля
			$table->string('rim');		//Диск
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
		Schema::drop('typeaheads');
	}

}
