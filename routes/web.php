<?php 

Route::get('/', 'TasksController@index')->name('home');

Route::get('/tasks', 'TasksController@index');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/api', 'TasksController@api');

Route::get('/tasks/create', 'TasksController@create');

Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/tasks/{task}/comments', 'CommentsController@store');

/*
  The following route is equivalent to:

  Route::get('photos', 'PhotoController@index')
  Route::get('photos/create', 'PhotoController@create')
  Route::post('photos', 'PhotoController@store')
  Route::get('photos/{photo}', 'PhotoController@show')
  Route::get('photos/{photo}/edit', 'PhotoController@edit')
  Route::put('photos/{photo}', 'PhotoController@update') *
  Route::delete('photos/{photo}', 'PhotoController@destroy')

  * can also be Route::patch
*/
Route::resource('photos', 'PhotoController');

Route::get('/register', 'RegistrationsController@create');

Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::get('/logout', 'SessionsController@destroy');