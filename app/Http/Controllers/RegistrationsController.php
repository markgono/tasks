<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationsRequest;
use Illuminate\Http\Request;
use App\Mail\Welcome;
use App\User;
use Mail;

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
  public function store(RegistrationsRequest $request)
  {
    $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => bcrypt(request('password')),
    ]);

    auth()->login($user);

    Mail::to($user)->send(new Welcome($user));

    return redirect()->home();
  }
}
