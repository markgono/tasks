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
    * Returns a task.
    * Uses route model binding to automatically map our wildcard to a Model
    */
    public function show(Task $task)
    {  
      return view('tasks.show', compact('task'));
    }

    /**
    * Creates a task.
    */
    public function create()
    {
      return view('tasks.create');
    }

    /**
     * Stores a task.
     */
    public function store()
    {
      Task::create(request([
        'title',
        'body',
      ]));

      return redirect('/');
    }
}
