<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
  public function __construct()
  {
    // Only allow access to create, store methods if you're unauthenticated
    $this->middleware('guest')->except('destroy');
  }

  public function create()
  {
    return view('sessions.create');
  }

  public function store()
  {
    // Attempt to log the user in with the provided details
    if (auth()->attempt(request(['email', 'password']))) {
      // Authentication passed
      return redirect()->home();
    }

    // Authentication failed
    return back()->withErrors([
      'message' => 'Please check your credentials and try again',
    ]);
  }

  public function destroy()
  {
    auth()->logout();

    return redirect()->home();
  }
}
