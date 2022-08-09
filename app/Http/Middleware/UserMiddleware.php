<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isBlocked)
        {
            $banned = Auth::user()->isBlocked == "1";
            Auth::logout();

            if ($banned == 1) {
                $message = 'Your account has been Blocked.';
            }
            return redirect()->route('login')
                ->with('status',$message)
                ->withErrors(['email' => 'Your account has been Blocked.']);
        }
        return $next($request);
    }
}
