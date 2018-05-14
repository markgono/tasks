<?php

namespace App\Repositories;

use App\Task;

class Tasks
{
  public function all()
  {
    return Task::all();
  } 
}
