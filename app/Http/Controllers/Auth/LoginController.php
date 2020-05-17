<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

  use AuthenticatesUsers;

  protected $redirectTo = '/home';

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  /**
   * Redirect users if they are administrators
   * @return string
   */
  protected function redirectTo()
  {
    if (auth()->user()->is_admin) {
      return '/dashboard';
    }
    return '/home';
  }


}
