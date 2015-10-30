<?php

//Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');

Admin::menu()->url('/')->label('Start Page')->icon('fa-dashboard');
Admin::menu('App\User')->icon('fa-user')->label('Пользователи');
Admin::menu('App\Tires')->icon('fa-cubes')->label('Шины');
Admin::menu('App\Contacts')->icon('fa-user')->label('Контакты');
Admin::menu('App\Tasks')->icon('fa-user')->label('Задачи');

