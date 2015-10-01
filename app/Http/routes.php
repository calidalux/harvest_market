<?php

Route::get('/', 'WelcomeController@index');
Route::get('catalog/{slug}','TiresController@cart');
Route::get('/query', 'SearchController@query');
//Route::get('/addtype', 'AddTypeController@index'); //Добавление типоразмеров в подсказки
Route::get('/addtires', 'TiresAddController@index');
Route::get('/allo','TestsController@index');
Route::get('/update','TestsController@update');
Route::post('/mail','MailController@callback');


