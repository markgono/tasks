<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function tasks()
    {
      return $this->belongsToMany(Task::class);
    }

    // Overrides the default route matching by primary key
    public function getRouteKeyName()
    {
      return 'name';
    }
}
