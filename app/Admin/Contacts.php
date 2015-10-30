<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\Contact')->title('Контакты')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('id')->label('id'),
		Column::string('name')->label('Имя'),
		Column::string('region')->label('Регион'),
		Column::string('contact_name')->label('Контакт'),
		Column::string('phone')->label('Телефон'),

	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([

		FormItem::text('name')->label('Имя')->required(),
		FormItem::text('region')->label('Регион')->required(),
		FormItem::text('contact_name')->label('Контакт')->required(),
		FormItem::text('phone')->label('Телефон')->required(),
		FormItem::select('chanel', 'Источник')->enum(['Входящий звонок', 'Исходящий звонок', 'Сайт', 'Почта']),
		FormItem::text('email')->label('E-mail'),
		FormItem::textarea('comments')->label('Комментарии'),

	]);
	return $form;
});