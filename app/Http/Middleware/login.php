<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Closure;

use Auth;
use DB;
use Session;

class login
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
        //dd('here');
        $query = DB::table('users')->where('id',Auth::id())->first();
        $course = DB::table('courses')->where('id',Session::get('NewCourseID'))->first();
        if($query)
        {
          $allowed = explode(',', $query->allowed_exams);
        }
        else
        {
         $allowed = array();
        }
        if(Auth::check())
            {
                //dd(Session::get('NewCourseID'));
              if (in_array(Session::get('NewCourseID'), $allowed) || $course->price == 0)
                 {
                     return $next($request);
                 }
                else
                 {
                    return redirect('/make-payment/'.Session::get('NewCourseID').'');
                 }  
            }
            else
            {
             return redirect('login');
            }
    }
}
