<?php

namespace App;

use Carbon\Carbon;
use DB;

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

  public function scopeFilter($query, $filter)
  {
    if (isset($filter['month']) && $month = $filter['month']) {
      return $query->whereMonth('created_at', Carbon::parse($month)->month);
    }

    if (isset($filter['year']) && $year = $filter['year']) {
      return $query->whereYear('created_at', Carbon::parse($year)->year);
    }

    return $query;
  }

  // Many to One
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  // One to Many
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  // Many to Many
  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }

  public function addComment($body)
  {
    $this->comments()->create(compact('body'));
  }

  public static function archive()
  {
    return static::select(DB::raw('YEAR(created_at) as year, MONTHNAME(created_at) as month, COUNT(*) as count'))
      ->groupBy('year', 'month')
      ->orderByRaw('MIN(created_at) desc')
      ->get()
      ->toArray();
  }
}
