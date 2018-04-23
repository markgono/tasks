<?php

namespace App;

class Comment extends Model
{
    public function task()
    {
      return $this->belongsTo(Task::class);
    }
}
