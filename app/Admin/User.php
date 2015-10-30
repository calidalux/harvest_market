<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\User')->title('Users')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('id')->label('id'),
		Column::string('email')->label('Email'),
		Column::string('password')->label('Password'),
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