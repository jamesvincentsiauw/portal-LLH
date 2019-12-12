<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class adminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::get('admin') == true){
            return $next($request);
        }
        return redirect('/admin/login');
    }
}
