<?php

Route::get('/', 'WelcomeController@index');
Route::get('catalog/{slug}','TiresController@cart');
Route::get('/query', 'SearchController@query'); //Запрос для поиска
//Route::get('/addtype', 'AddTypeController@index'); //Добавление типоразмеров в подсказки
//Route::get('/addtires', 'TiresAddController@index');
//Route::get('/allo','TestsController@index'); //Обновление ЧПУ ссылок
//Route::get('/update','TestsController@update');
Route::post('/mail','MailController@callback'); //Отправка заявки
Route::get('/done','TiresController@done');	//Страница благодарности
//Route::get('/delivery','WelcomeController@delivery');
//Route::get('/mail','WelcomeController@mail');
//Route::get('/guzzle','GuzzleController@index');	//Тест guzzle
//Route::get('/town','GuzzleController@findTown');	//Поиск города по ids
Route::get('/admin','AdminController@index');	//Админская панель





