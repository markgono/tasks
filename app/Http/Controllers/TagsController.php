<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
      $tasks = $tag->tasks;

      return view('tasks.index', compact('tasks', 'tag'));
    }
}
