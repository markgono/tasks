<?php

namespace App\Repositories;

use App\Task;
use App\Redis;

class Tasks
{
  public function __construct(Redis $redis)
  {
    $this->redis = $redis;
  }

  public function all()
  {
    return Task::all();
  } 
}
