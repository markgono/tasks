<?php 

Route::get('/', 'PostsController@index');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/api', 'TasksController@api');

Route::get('tasks/{task}', 'TasksController@show');

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

