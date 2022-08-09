<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() and Auth::user()->admin_status) {
            return abort(404);
        } else {
            return $next($request);
        }
    }
}
