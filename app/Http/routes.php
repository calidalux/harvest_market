<?php

Route::get('/', 'WelcomeController@index');
Route::get('tires', 'TiresController@index');
Route::get('catalog/{id}','TiresController@cart');
Route::get('catalog','TiresController@agri');
Route::get('/query', 'SearchController@query');
//Route::get('/addtype', 'AddTypeController@index'); //Добавление типоразмеров в подсказки
Route::get('/addtires', 'TiresAddController@index');

