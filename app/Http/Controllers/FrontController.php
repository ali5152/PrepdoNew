<?php

namespace App\Http\Controllers;

use App\chapterModel;
use App\examModel;
use App\questionsModel;
use App\quizezAttemptsModel;
use App\result;
use App\VideoCoursesModel;
use App\payu_payments as pay;
use Composer\Autoload\ClassLoader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Compound;


use Session;

class FrontController extends Controller
{
    public function home()
    {
        $courseName=VideoCoursesModel::all();
        $query = DB::table('users')->where('id',Auth::id())->first();
        if($query)
        {
          $allowed = explode(',', $query->allowed_exams);
        }
        else
        {
         $allowed = array();
        }


      return view('front.index',compact('courseName','allowed'));
    }

    public function payment()
    {
      $query = pay::where('payable_id',Auth::id())->get();
      return view('front.payment')->with('data',$query);
    }

    public function attempted()
    {
      $query = quizezAttemptsModel::where('student_id',Auth::id())->get();
      return view('front.attempted')->with('data',$query);
    }



    public function exam($id)
    {
        Session::put('NewCourseID',$id);
        $query = DB::table('users')->where('id',Auth::id())->first();
        $course = DB::table('courses')->where('id',$id)->first();
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
                      $courseName =VideoCoursesModel::all()->find($id);

        $c_name=$courseName->course_name;

        $sections=chapterModel::all()->where('course_id',$id);





          return view('front/coursedetail',compact('sections','c_name','courseName'));
                 }
                else
                 {
                    return redirect('/make-payment/'.$id.'');
                 }  
            }
            else
            {
             return redirect('login');
            }
       
    }

    public function fetchQuestions($id){

        $questions=questionsModel::all()->where('quiz_id',$id);

        $countRecord = questionsModel::all()->count();

       // $category= \App\examModel::all()->where('chapter_id',$id);




        return view('front.question')->with(compact('questions','countRecord'));

    }
    public function show(Request $request){

        $data = new result();

        $data->correct_answer=$request->get('correct');
        $data->not_attempted=$request->get('not_attempt');
        $data->total_score=$request->get('total_score');
        $data->user_id=1;

        $data->save();

        return redirect()->back()->with('message','Result has been Saved');

    }
    public function UpdateTimer($hours,$minutes,$seconds)
    {
    Session::put('hours',$hours);
    Session::put('minutes',$minutes);
    Session::put('seconds',$seconds);
    }
    public function test()
    {
      return view('front/test');
    }
    public function dashboard($ID)
    {
      return view('front/dashboard')->with('ID',$ID);
    }

    public function quiz($id)
    {
        $categories=examModel::all()->where('chapter_id',$id);
        //dd($questions);
        $chapter = chapterModel::where('id',$id)->first();
        $countRecord = questionsModel::all()->count();




        return view('front.quiz',compact('categories','countRecord','chapter'));
    }

    public function submitQuiz()
    {
        //dd($_POST);
        $values = $_POST['answers'];
        $totalCount = 0;
        $correct = 0;
        $chapterID = $_POST['chapterID'];
        $Chapter = DB::table('chapters')->where('id',$chapterID)->first();
        $sections = DB::table('quizes')->where('chapter_id',$chapterID)->get();
           foreach ($sections as $key => $valueanother) 
           {
               $questions = DB::table('questions')->where('quiz_id',$valueanother->id)->count();
               $totalCount = $totalCount + $questions;
           }
        foreach ($values as $key => $value) 
        {
          $algo = explode('-',$value);
          $questionID = $algo[1];
          $answer = $algo[2];
          $questions = DB::table('questions')->where('id',$questionID)->first();
          if($answer == $questions->correct_option)
          {
            $correct++;
          }
        }
        
        $insert = new quizezAttemptsModel();
        $insert->quiz_id = $chapterID;
        $insert->student_id = Auth::id();
        $insert->total_questions = $totalCount;
        $insert->correct_answers = $correct;
        $insert->status = 1;
        $insert->save();

        return redirect('AttemptedExams');
          
    }

    public function selecttest()
    {

        $testCategories=DB::table('quizes')
            ->whereExists(function($query)
            {
                $query->select(DB::raw(1))
                    ->from('quizes')
                    ->distinct('test_type');
            })
            ->get();
//        examModel::all()->where('test_type',array_unique());
//        $testCategories = DB::table('quizes')
//            ->select('test_type')
//            ->distinct()
//            ->get();



      return view('front/select',compact('testCategories'));
    }



}
