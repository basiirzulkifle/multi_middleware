<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AutheticatesUsers;
use Auth;

class LoginController extends Controller
{

  use AuthenticatesUsers;
  //testing lazygit

  protected $redirectTo;

  public function redirectTo()
  {
    switch (Auth::user()->role) {
      case 'admin':
        $this->redirectTo = route('admin.dashboard');
        break;
      case 'user':
        $this->redirectTo = route('users.index');
        break;
      default:
        $this->redirectTo = route('login');
        return $this->redirectTo;
    }
  }
}
