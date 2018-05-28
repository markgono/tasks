<?php

Route::get('/', 'TasksController@index')->name('home');

Route::get('/tasks', 'TasksController@index');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/api', 'TasksController@api');

Route::get('/tasks/create', 'TasksController@create');

Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/tasks/{task}/comments', 'CommentsController@store');

Route::get('/tasks/tags/{tag}', 'TagsController@index');

Route::get('/register', 'RegistrationsController@create');

Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');