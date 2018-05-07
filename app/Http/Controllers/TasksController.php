<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use DB;

class TasksController extends Controller
{
    /**
     * All routes except index and show require you to be signed in.
     */
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    /**
    * Returns all tasks
    */
    public function index() 
    {
      $tasks = Task::latest()
        ->filter(request(['month', 'year']))
        ->get();

      $archive = Task::select(DB::raw('YEAR(created_at) as year, MONTHNAME(created_at) as month, COUNT(*) as count'))
        ->groupBy('year', 'month')
        ->orderByRaw('MIN(created_at) desc')
        ->get()
        ->toArray();
    
      return view('tasks.index', compact('tasks', 'archive'));
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
      $this->validate(request(), [
        'title' => 'required|min:3|max:255',
        'body' => 'required',
      ]);

      auth()->user()->publish(
        new Task(request([
          'title',
          'body',
        ]))
      );

      return redirect('/');
    }
}
