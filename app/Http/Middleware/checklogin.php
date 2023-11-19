<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Authenticate;
use illuminate\Support\Facades\Auth;
use illuminate\Contracts\Auth\Authenticatable;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = auth::user();
        // $check= auth::login($user);
        if ( auth::check()){
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
