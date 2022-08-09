<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() and Auth::user()->admin_status) {
            return $next($request);
        }
        else {
            return redirect('login');
        }
    }
}
