<?php

// Generated with: artisan make:request RegistrationsRequest

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Mail\Welcome;
use App\User;
use Mail;

class RegistrationsForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|confirmed',
        ];
    }

    public function persist()
    {
      $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => bcrypt($this->password),
      ]);
  
      auth()->login($user);
  
      Mail::to($user)->send(new Welcome($user));
    }
}
