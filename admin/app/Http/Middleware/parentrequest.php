<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class parentrequest
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
        $bit = Session::get('adminController');
        if($bit == 3)
        {
         return $next($request); 
        }
        else
        {
         return Redirect('/AdminLogin');
        }
    }
}
