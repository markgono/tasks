<?php

namespace App;

/*
* Use our unguarded Model
*/
class Task extends Model
{
  /**
   * Prefixing with scope allows us to chain incomplete. 
   * Rather than a static method to just run a query for us like:
   *  public static function incomplete() { return static::where('completed', 0)->get() }
   * We can chain this as part of a query, eg. Task::incomplete()->get()
   */
  public function scopeIncomplete($query)
  {
    return $query->where('completed', 0);
  }
}
