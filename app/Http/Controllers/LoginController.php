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
      case 'dashboarduser':
        $this->redirectTo = route('dashboarduser');
        break;
      case 'micrositeuser':
        $this->redirectTo = route('micrositeuser');
        break;
      default:
        $this->redirectTo = route('login');
        return $this->redirectTo;
    }
  }
}
