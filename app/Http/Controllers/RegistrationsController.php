<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationsForm;

class RegistrationsController extends Controller
{
  public function create()
  {
    return view('registrations.create');
  }

  /* 
  * Type-hinting the request means we will run that
  * Request classes validation and authorize methods
  * A failure will redirect back automatically.
  */
  public function store(RegistrationsForm $form)
  {
    $form->persist();

    session()->flash('message', 'Thanks for signing up!');

    return redirect()->home();
  }
}
