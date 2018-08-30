<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\educatorform;
use App\Http\Requests\studentform;
use Illuminate\Support\Facades\Input;

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
use DB;
use Session;

class StudentController extends Controller
{
    //
    //  public function home()
   public function home()
  {
    $query = courses::all();
    return view('student/index')->with('data',$query);
  }

  public function subjectdetail($ID)
  {
    $query = courses::where('id',$ID)->first();
    $query1 = chapters::where('course_id',$ID)->get();
    $files = DB::table('system_files')->where('course_id',$ID)->get();
    return view('student/subjectdetail')->with('data',$query)->with('data1',$query1)->with('files',$files);
  }

  public function ChapterDetails($ID)
  {
    $query = chapters::where('id',$ID)->first();
    $query1 = topics::where('chapter_id',$ID)->get();
    $files = DB::table('system_files')->where('chapter_id',$ID)->get();
    return view('student/chapterdetail')->with('data',$query)->with('data1',$query1)->with('files',$files);
  }
  
  public function TopicDetails($ID)
  {
    $query = topics::where('id',$ID)->first();
    $query1 = assignments::where('topic_id',$ID)->get();
    $query2 = quizes::where('topic_id',$ID)->get();
    $files = DB::table('system_files')->where('topic_id',$ID)->get();
    return view('student/topicdetail')->with('data',$query)->with('data1',$query1)->with('data2',$query2)->with('files',$files);
  }

  public function AssignmentDetails($ID)
  {
    $query = assignments::where('id',$ID)->first();
    $files = DB::table('system_files')->where('assignment_id',$ID)->get();
    return view('student/assignmentdetail')->with('data',$query)->with('files',$files);
  }
  
  public function AttemptQuiz($ID)
  {
    Session::put('Security',$ID);
    date_default_timezone_set("Asia/Karachi");
    $yesterday = date('Y-m-d',strtotime("-2 days"));
    $today = date('Y-m-d');
    $query = quiz_attempts::where('student_id',Session::get('UserID'))->where('quiz_id',$ID)->whereBetween('created_at', [$yesterday." 00:00:00", $today." 23:59:59"])->count();
    if($query > 3)
    {
      return Redirect('/StudentPortal')->withErrors('You already have attempted this Quiz 3 Times. Please attempt again after 2 Days')->withInput(Input::all());
    }
    else
    {
      Session::put('teststarttime',date('H:i:s'));
      $query = quizes::where('id',$ID)->first();
      $questions = questions::where('quiz_id',$ID)->limit(20)->inRandomOrder()->get();
      return view('student/attemptquiz')->with('data',$query)->with('questions',$questions);
    } 
  }
  public function QuizSubmit()
  {
    date_default_timezone_set("Asia/Karachi");
     $today = date('Y-m-d');
     $yesterday = date('Y-m-d',strtotime("-2 days"));
    $query = quiz_attempts::where('student_id',Session::get('UserID'))->where('quiz_id',Session::get('Security'))->whereBetween('created_at', [$yesterday." 00:00:00", $today." 23:59:59"])->count();
    if($query > 3)
    {
      return Redirect('/StudentPortal')->withErrors('You already have attempted this Quiz 3 Times. Please attempt again after 2 Days')->withInput(Input::all());
    }
    if(Session::get('Security') == $_POST['quiz_id'])
      {
        $query = new quiz_attempts();
        $query->quiz_id = $_POST['quiz_id'];
        $query->student_id = $_POST['student_id'];
        $query->total_questions = $_POST['questions'];
        $query->correct_answers = $_POST['score'];
        $query->status = 1;
        $query->save();
        
        $percentage = ($_POST['score']/$_POST['questions']) * 100;

        return view('student/QuizResult')->with('score',$_POST['score'])->with('questions',$_POST['questions'])->with('percentage',$percentage);
      }
    
  }
  
  public function ShowQuizes()
    {
      $ID = Session::get('UserID');
      $student = students::where('id',$ID)->first();
      $query = quiz_attempts::where('student_id',$student->id)->get();
     // dd($query); 
      return view('student/showquizes')->with('data',$query);
    }

  public function changepass()
  {
    return view('student/changepass');
  }
  public function topic()
  {
    return view('student/topic');
  }
  public function question()
  {
    return view('student/question');
  }
}
