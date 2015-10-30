<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\Task')->title('Задачи')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('id')->label('id'),
		Column::string('type')->label('Тип'),
		Column::string('contact_id')->label('Контакт'),
		Column::string('date')->label('Дата'),
		Column::string('text')->label('Суть'),

	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([

		FormItem::select('type')->label('Тип')->required()->enum(['Звонок', 'Письмо', 'Встреча']),
		FormItem::text('contact_id')->label('Контакт')->required(),
		FormItem::date('date')->label('Дата')->required(),
		FormItem::textarea('text')->label('Суть'),

	]);
	return $form;
});