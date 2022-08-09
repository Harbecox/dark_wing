<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function authenticated()
    {
        if (Auth::user() and Auth::user()->admin_status and Auth::user() == '0') {
            return redirect()->route('homeAdmin');
        }
        return redirect('/home');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
