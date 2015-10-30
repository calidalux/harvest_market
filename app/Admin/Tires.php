<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\Tire')->title('Шины')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('id')->label('id'),
		Column::string('size')->label('Размер'),
		Column::string('model')->label('Модель'),
		Column::string('brand')->label('Производитель'),
		Column::string('price')->label('Цена'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('email', 'Email')->required()->unique(),
		FormItem::text('password', 'Password')->required(),
	]);
	return $form;
});