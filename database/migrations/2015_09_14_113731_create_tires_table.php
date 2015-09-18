<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tires', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('price'); //Цена
			$table->integer('old_price'); //Старая цена
			$table->string('model');	//Модель шины
			$table->text('descript');	//Описание
			$table->string('width'); 	//Ширина профиля
			$table->string('height'); 	//Высота профиля
			$table->string('rim');		//Диск
			$table->string('r_type'); 	//Рисунок шины
			$table->string('brand');	//Производитель
			$table->string('country');	//Производитель (страна)
			$table->integer('inStock');	//В наличии
			$table->string('tech');		//Слойность, ИН/CC
			$table->string('type');		//Назначение
			$table->string('size');		//Размер строка
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
		Schema::drop('tires');
	}

}
