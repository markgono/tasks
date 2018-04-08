<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Returns all tasks
 */
Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->latest()->get();
    
    return view('tasks.index', compact('tasks'));
});

/**
 * Returns our tasks as a nice JSON output. Perfect for APIs
 */
Route::get('/tasks/api', function () {
  $tasks = DB::table('tasks')->get();

  return $tasks;
});

/**
 * Returns a task
 */
Route::get('tasks/{task}', function ($id) {
  $task = DB::table('tasks')->find($id);
  
  return view('tasks.show', compact('task'));
});
