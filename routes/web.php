<?php

/* Tasks */

Route::get('/', 'TasksController@index')->name('home');

Route::get('/tasks', 'TasksController@index');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/api', 'TasksController@api');

Route::get('/tasks/create', 'TasksController@create');

Route::get('/tasks/{task}', 'TasksController@show');

/* Comments */

Route::post('/tasks/{task}/comments', 'CommentsController@store');

/* Tags */

Route::get('/tasks/tags/{tag}', 'TagsController@index');

/* Registrations */

Route::get('/register', 'RegistrationsController@create');

Route::post('/register', 'RegistrationsController@store');

/* Sessions */

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');