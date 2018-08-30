<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\educators;
use App\students;
use App\parents;
use App\users;
use App\courses;
use App\system_files;
use App\chapters;
use App\topics;
use App\assignments;
use App\quizes;
use App\questions;
use App\quiz_attempts;

use Redirect;
use Hash;
use Mail;
use Session;

class ParentController extends Controller
{
    //
    public function parenthome()
    {
      $ID = Session::get('UserID');
      $student = students::where('parent_id',$ID)->first();
      $query = quiz_attempts::where('student_id',$student->id)->get();
     // dd($query);	
      return view('parent/index')->with('data',$query);
    }
}
