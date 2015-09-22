<?php

Route::get('/', 'WelcomeController@index');
Route::get('tires', 'TiresController@index');
Route::get('catalog/{id}','TiresController@cart');
Route::get('catalog','TiresController@agri');
Route::get('/query', 'SearchController@query');


