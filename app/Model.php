<?php

namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;

/*
* Overrides the default model for easier assignment across our application
*/
class Model extends EloquentModel
{
  /*
  * The inverse of $protected, this states the fields we do not want to mass assign in our models
  * By providing an empty array, we're basically whitelisting any field to be assigned in a Model::create
  */
  protected $guarded = [];
}