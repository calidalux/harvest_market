<?php

Route::get('/', 'WelcomeController@index');
Route::get('tires', 'TiresController@index');
Route::get('agri/{id}','TiresController@cart');
Route::get('agri','TiresController@agri');


