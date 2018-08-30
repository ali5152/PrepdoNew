<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class student
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
        //dd($bit);
        if($bit == 2 || $bit == 1)
        {
         return $next($request); 
        }
        else
        {
         return Redirect('/');
        }
    }
}
