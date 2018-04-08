<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/api', 'TasksController@api');

Route::get('tasks/{task}', 'TasksController@show');