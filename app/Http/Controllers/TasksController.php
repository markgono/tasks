<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
    * Returns all tasks
    */
    public function index() 
    {
      $tasks = Task::all();
    
      return view('tasks.index', compact('tasks'));
    }

    /**
    * Returns our tasks as a nice JSON output. Perfect for APIs
    */
    public function api()
    {
      $tasks = Task::all();

      return $tasks;
    }

    /**
    * Returns a task
    */
    public function show($id)
    {
      $task = Task::find($id);
  
      return view('tasks.show', compact('task'));
    }
}
