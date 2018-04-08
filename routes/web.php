<?php

use App\Task;

/**
 * Returns all tasks
 */
Route::get('/tasks', function () {
    $tasks = Task::all();
    
    return view('tasks.index', compact('tasks'));
});

/**
 * Returns our tasks as a nice JSON output. Perfect for APIs
 */
Route::get('/tasks/api', function () {
  $tasks = Task::all();

  return $tasks;
});

/**
 * Returns a task
 */
Route::get('tasks/{task}', function ($id) {
  $task = Task::find($id);
  
  return view('tasks.show', compact('task'));
});
