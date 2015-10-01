<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTubeAndTypeFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tires', function(Blueprint $table)
		{
			$table->string('tube'); //Камерная, бескамерная
			$table->string('type_arch');	//Радиальная, диагональная
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tires', function(Blueprint $table)
		{
			drop_colum('tube');
			drop_colum('type_arch');
		});
	}

}
