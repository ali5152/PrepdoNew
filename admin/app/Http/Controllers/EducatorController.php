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
use App\exam_types;
use App\excercise_types;

use Redirect;
use Hash;
use Mail;
use Session;

//use

class EducatorController extends Controller
{

   public function login()
   {
    return view('educator/login');
   }
   public function addprofessorsubmit(request $request)
   {
    if (users::where('username', '=', $request->email)->exists())
       {
         return Redirect()->back()->withErrors('Email already Exits')->withInput(Input::all());
       }

     $query = new educators();
     $image = $request->file('profile_image');
     if(isset($image))
      {
       $input['imagename'] = $image->getClientOriginalName();
       $destinationPath = public_path('/images');
       $image->move($destinationPath, $input['imagename']);
       $query->profile_image = $input['imagename'];
      }
      else
      {
        $query->profile_image = 'avatar.png';
      }


     $query->first_name = $request->first_name;
     $query->last_name = '';
     $query->email = $request->email;
     $query->joining_date = $request->joining_date;
     $query->exp_date = $request->exp_date;
     $query->designation = $request->designation;
     $query->gender = 'Male';
     $query->mobile_phone = $request->mobile_number;
     $query->joining_date = $request->joining_date;
     $query->allowed_exams = implode(",",$request->allowed_exams);
     //$query->birth_date = '0000-00-00';
     $query->status = '1';
     $query->save();
     
     $request->password = uniqid(); 
     $HashPass = Hash::make($request->password);
     $register = new users();
     $register->educator_id = $query->id;
     $register->username = $query->email;
     $register->password = $HashPass;
     $register->status = '1';
     $register->save();

     $send_email = $request->email;
    Mail::send('emails.welcome',['name' => $request->first_name,'username' => $request->email, 'password' => $request->password], function ($message) use ($send_email)
    {

     $message->from('info@prepscale.com', 'PrepScale');
     $message->subject('Welcome to PrepScale');
     $message->to($send_email);

    });


     return redirect('AllPartners');
     //$query->first_name = ;
   }


  public function EditProfessorSubmit(request $request)
   {

     $query = educators::where('id',$request->id)->first();
     $image = $request->file('profile_image');
     if($image)
     {
      $input['imagename'] = $image->getClientOriginalName();
      $destinationPath = public_path('/images');
      $image->move($destinationPath, $input['imagename']);
      $query->profile_image = $input['imagename'];
     }

     $query->first_name = $request->first_name;
     $query->last_name = '';
     $query->email = $request->email;
     $query->joining_date = $request->joining_date;
     $query->exp_date = $request->exp_date;
     $query->designation = $request->designation;
     $query->gender = 'Male';
     $query->mobile_phone = $request->mobile_number;
     $query->joining_date = $request->joining_date;
     $query->allowed_exams = implode(",",$request->allowed_exams);
     //$query->birth_date = '0000-00-00';
     $query->status = '1';

     $query->save();

     return redirect()->back()->with('sucess','Data Updated');
     //$query->first_name = ;
   }


   public function AddCourseSubmit(request $request)
   {

      $files_names = '';
      $count = 0;
      // if (courses::where('course_code', '=', $request->course_code)->exists())
      //   {
      //    return Redirect()->back()->withErrors('Course Code Already Exists')->withInput(Input::all());
      //   }
       $query = new courses();
       $image = $request->file('images');
       if(isset($image))
        {
         $input['imagename'] = $image->getClientOriginalName();
         $destinationPath = public_path('/images');
         $image->move($destinationPath, $input['imagename']);
         $query->profile_image = $input['imagename'];
        }
        // $input['imagename'] = $image->getClientOriginalName();
        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $input['imagename']);


        $query->course_name = $request->course_name;
        $query->course_code = $request->course_code;
        $query->course_des = $request->course_des;
        $query->module = $request->module;
        $query->exam_type = $request->exam_type;
        $query->weekly = $request->weekly;
        $query->monthly = $request->monthly;
        $query->yearly = $request->yearly;
        $query->course_picture = $input['imagename'];
        $query->price = 0;
        $query->status = 1;
        $query->save();

        //$files = $request->file('files');
        //dd($files);
        // if(isset($files[0]))
        // {
        //     foreach($files as $file)
        //     {
        //      $input['imagename1'] = $file->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $file->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->course_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->save();
        //      $count++;
        //     }
        // }

       return redirect('AllExams');
   }

   public function EditCourseSubmit(request $request)
   {
        $files_names = '';
        $count = 0;

        $query = courses::where('id',$request->course_id)->first();
        $image = $request->file('images');
        if($image)
        {
         $input['imagename'] = $image->getClientOriginalName();
         $destinationPath = public_path('/images');
         $image->move($destinationPath, $input['imagename']);
         $query->course_picture = $input['imagename'];
        }

        $query->course_name = $request->course_name;
        $query->course_code = $request->course_code;
        $query->course_des = $request->course_des;
        $query->module = $request->module;
        $query->exam_type = $request->exam_type;
        //$query->timer = $request->timer;
        $query->weekly = $request->weekly;
        $query->monthly = $request->monthly;
        $query->yearly = $request->yearly;
        $query->price = 0;
        //$query->status = 1;
        $query->save();

        // $files = $request->file('files');
        // if(isset($files[0]))
        // {
        //     foreach($files as $file)
        //     {
        //      $input['imagename1'] = $file->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $file->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->course_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        return redirect()->back()->with('sucess','Data Updated');
   }

public function AddChapterSubmit(request $request)
   {
      $files_names = '';
      $count = 0;
      // if (chapters::where('chapter_code', '=', $request->chapter_code)->exists())
      //   {
      //    return Redirect()->back()->withErrors('Chapter Code Already Exists')->withInput(Input::all());
      //   }

        $query = new chapters();
        $query->chapter_name = $request->chapter_name;
        $query->chapter_code = $request->chapter_code;
        $query->chapter_detail = $request->chapter_des;
        $query->course_id = $request->course_id;
        $query->status = 1;
        $query->save();

        $files = $request->file('files');
        //dd($files);
        if(isset($files[0]))
        {
            foreach($files as $file)
            {
             $input['imagename1'] = $file->getClientOriginalName();
             $destinationPath = public_path('/uploads');
             $file->move($destinationPath, $input['imagename1']);
             $filing = new system_files();
             $filing->chapter_id = $query->id;
             $filing->filename = $input['imagename1'];
             $filing->status = '1';
             $filing->save();
             $count++;
            }
        }

       return redirect('AllChapters');

   }

   public function EditChapterSubmit(request $request)
   {
      $files_names = '';
      $count = 0;

        $query = chapters::where('id',$request->chapter_id)->first();
        $query->chapter_name = $request->chapter_name;
        $query->chapter_code = $request->chapter_code;
        $query->chapter_detail = $request->chapter_des;
        $query->save();

        $files = $request->file('files');
        //dd($files);
        if(isset($files[0]))
        {
            foreach($files as $file)
            {
             $input['imagename1'] = $file->getClientOriginalName();
             $destinationPath = public_path('/uploads');
             $file->move($destinationPath, $input['imagename1']);
             $filing = new system_files();
             $filing->chapter_id = $query->id;
             $filing->filename = $input['imagename1'];
             $filing->status = '1';
             $filing->save();
             $count++;
            }
        }

       return redirect()->back()->with('sucess','Data Updated');

   }

public function AddQuizSubmit(request $request)
   {
      //dd($_FILE);
      $files_names = '';
      $count = 0;
      // if (quizes::where('code', '=', $request->quiz_code)->exists())
      //   {
      //    return Redirect()->back()->withErrors('Quiz Code Already Exists')->withInput(Input::all());
      //   }

        $query = new quizes();
        $query->name = $request->quiz_name;
        $query->code = 'NA';
        $query->detail = 'NA';
        $query->course_id = 0;
        $query->chapter_id = 0;
        $query->topic_id = $request->topic_id;
        $query->status = 1;
        $query->save();
 //for
        $files = $request->file('files');
        //dd($files);
        if(isset($files[0]))
        {
            foreach($files as $keys => $file)
            {
             $input['imagename1'] = $file->getClientOriginalName();
             $destinationPath = public_path('/uploads');
             $file->move($destinationPath, $input['imagename1']);
             $filing = new system_files();
             $filing->quiz_id = $query->id;
             $filing->filename = $input['imagename1'];
             $filing->instructions = $request->instruction[$keys];
             $filing->description = $request->description[$keys];
             $filing->filetype = $request->filetype[$keys];
             $filing->status = '1';
             $filing->save();
             $count++;
            }
        }
        return redirect('AllSections');
   }

   public function EditQuizSubmit(request $request)
   {
      $files_names = '';
      $count = 0;

        $query = quizes::where('id',$request->quiz_id)->first();
        $query->name = $request->quiz_name;
        $query->code = 'NA';
        $query->detail = 'NA';
        $query->course_id = 0;
        $query->chapter_id = 0;
        $query->status = 1;
        $query->save();

       $files = $request->file('files');
        //dd($files);
        if(isset($files[0]))
        {
            foreach($files as $file)
            {
             $input['imagename1'] = $file->getClientOriginalName();
             $destinationPath = public_path('/uploads');
             $file->move($destinationPath, $input['imagename1']);
             $filing = new system_files();
             $filing->quiz_id = $query->id;
             $filing->instructions = $request->instruction[$keys];
             $filing->description = $request->description[$keys];
             $filing->filetype = $request->filetype[$keys];
             $filing->filename = $input['imagename1'];
             $filing->status = '1';
             $filing->save();
             $count++;
            }
        }
        return redirect()->back()->with('sucess','Data Updated');
   }

public function AddAssignmentSubmit(request $request)
   {
      $files_names = '';
      $count = 0;
      // if (assignments::where('code', '=', $request->assignment_code)->exists())
      //   {
      //    return Redirect()->back()->withErrors('Assignment Code Already Exists')->withInput(Input::all());
      //   }

        $query = new assignments();
        $query->name = $request->assignment_name;
        $query->code = $request->assignment_code;
        $query->detail = $request->assignment_des;
        $query->course_id = $request->course_id;
        $query->chapter_id = $request->chapter_id;
        $query->topic_id = $request->topic_id;
        $query->status = 1;
        $query->save();

        $files = $request->file('files');
        //dd($files);
        if(isset($files[0]))
        {
            foreach($files as $file)
            {
             $input['imagename1'] = $file->getClientOriginalName();
             $destinationPath = public_path('/uploads');
             $file->move($destinationPath, $input['imagename1']);
             $filing = new system_files();
             $filing->assignment_id = $query->id;
             $filing->filename = $input['imagename1'];
             $filing->status = '1';
             $filing->save();
             $count++;
            }
        }

         return redirect('AddAssignment');
   }

   public function EditAssignmentSubmit(request $request)
   {
      $files_names = '';
      $count = 0;

        $query = assignments::where('id',$request->assignment_id)->first();
        $query->name = $request->assignment_name;
        $query->code = $request->assignment_code;
        $query->detail = $request->assignment_des;
        $query->save();

        $files = $request->file('files');
        //dd($files);
        if(isset($files[0]))
        {
            foreach($files as $file)
            {
             $input['imagename1'] = $file->getClientOriginalName();
             $destinationPath = public_path('/uploads');
             $file->move($destinationPath, $input['imagename1']);
             $filing = new system_files();
             $filing->assignment_id = $query->id;
             $filing->filename = $input['imagename1'];
             $filing->status = '1';
             $filing->save();
             $count++;
            }
        }

        return redirect()->back()->with('sucess','Data Updated');
   }


   public function AddQuestionSubmit(request $request)
   {

        $query = new questions();
        if($request->question_type == 'MCQ')
        {
          $image = $request->file('questionfile');
          if($image)
          {
           $input['imagename'] = $image->getClientOriginalName();
           $destinationPath = public_path('/images');
           $image->move($destinationPath, $input['imagename']);
          }
          $query->question = $request->question;
          $query->question_type = $request->question_type;
          $query->option1 = $request->option1;
          $query->option2 = $request->option2;
          $query->option3 = $request->option3;
          $query->option4 = $request->option4;
          $query->correct_option = $request->correct_option;
          $query->filecheck = $request->upload_file;
          $query->explanations = $request->explanations;
          $query->file = $input['imagename'];
          $query->quiz_id = $request->quiz_id;
          $query->status = 1;
          $query->save();
        }
        elseif($request->question_type == 'Blanks')
        {
          if($image)
          {
           $input['imagename'] = $image->getClientOriginalName();
           $destinationPath = public_path('/images');
           $image->move($destinationPath, $input['imagename']);
          }
          $query->question = $request->question;
          $query->question_type = $request->question_type;
          $query->explanations = $request->explanations;
          $query->filecheck = $request->upload_file;
          $query->file = $input['imagename'];
          $query->correct_option = $request->correct_option;
          $query->quiz_id = $request->quiz_id;
          $query->status = 1;
          $query->save();
        }
        elseif($request->question_type == 'Checkboxes')
        {
          if($image)
          {
           $input['imagename'] = $image->getClientOriginalName();
           $destinationPath = public_path('/images');
           $image->move($destinationPath, $input['imagename']);
          }
          $query->question = $request->question;
          $query->question_type = $request->question_type;
          $query->option1 = $request->option1;
          $query->option2 = $request->option2;
          $query->option3 = $request->option3;
          $query->option4 = $request->option4;
          $query->explanations = $request->explanations;
          $query->filecheck = $request->upload_file;
          $query->file = $input['imagename'];
          $query->correct_option = $request->correct_option;
          $query->quiz_id = $request->quiz_id;
          $query->status = 1;
          $query->save();
        }
        elseif($request->question_type == 'Audio')
        {
          if($image)
          {
           $input['imagename'] = $image->getClientOriginalName();
           $destinationPath = public_path('/images');
           $image->move($destinationPath, $input['imagename']);
          }
          $query->question = $request->question;
          $query->question_type = $request->question_type;
          $query->correct_option = $request->correct_option;
          $query->explanations = $request->explanations;
          $query->filecheck = $request->upload_file;
          $query->file = $input['imagename'];
          $query->quiz_id = $request->quiz_id;
          $query->status = 1;
          $query->save();
        }
        elseif($request->question_type == 'Description')
        {
          if($image)
          {
           $input['imagename'] = $image->getClientOriginalName();
           $destinationPath = public_path('/images');
           $image->move($destinationPath, $input['imagename']);
          }
          $query->question = $request->question;
          $query->question_type = $request->question_type;
          $query->correct_option = $request->correct_option;
          $query->explanations = $request->explanations;
          $query->filecheck = $request->upload_file;
          $query->file = $input['imagename'];
          $query->quiz_id = $request->quiz_id;
          $query->status = 1;
          $query->save();
        }
       

        return redirect('AllQuestion');

   }

 public function EditQuestionSubmit(request $request)
   {

        $query = questions::where('id',$request->question_id)->first();
        $query->question = $request->question;
        $query->option1 = $request->option1;
        $query->option2 = $request->option2;
        $query->option3 = $request->option3;
        $query->option4 = $request->option4;
        $query->correct_option = $request->correct_option;
        $query->save();

        return redirect()->back()->with('sucess','Data Updated');

   }

   public function EditTopicSubmit(request $request)
   {
      $files_names = '';
      $count = 0;

        $query = topics::where('id',$request->topic_id)->first();
        $query->name = $request->topic_name;
        $query->code = $request->topic_code;
        $query->detail = $request->topic_des;
        $query->course_id = $request->course_id;
        $query->timer = $request->timer;
        $query->paid = $request->paid;
        $query->module = $request->module;
        $query->chapter_id = 0;
        $query->excercise_type = $request->excercise_type;
        $query->save();

        //  $warms = $request->file('warm');
        // //dd($files);
        // if(isset($warms[0]))
        // {
        //     foreach($warms as $warm)
        //     {
        //      $input['imagename1'] = $warm->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $warm->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->define = 'warmup';
        //      $filing->save();
        //      $count++;
        //     }
        // }


        // $sums = $request->file('sum');
        // //dd($files);
        // if(isset($sums[0]))
        // {
        //     foreach($sums as $sum)
        //     {
        //      $input['imagename1'] = $sum->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $sum->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->define = 'summary';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        // $insts = $request->file('inst');
        // //dd($files);
        // if(isset($insts[0]))
        // {
        //     foreach($insts as $inst)
        //     {
        //      $input['imagename1'] = $inst->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $inst->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->define = 'instruction';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        // $files = $request->file('files');
        // //dd($files);
        // if(isset($files[0]))
        // {
        //     foreach($files as $file)
        //     {
        //      $input['imagename1'] = $file->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $file->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        return redirect()->back()->with('sucess','Data Updated');
   }


public function AddExamTypes(Request $request)
{
  $query = new exam_types();
  $query->name = $request->name;
  $query->status = 1;
  $query->save();

  return redirect()->back();
}

public function EditExamType(Request $request)
{
  $query = exam_types::where('id',$request->id)->first();
  $query->name = $request->name;
  $query->save();

  return redirect()->back();
}

public function EditExcerciseType(Request $request)
{
  $query = excercise_types::where('id',$request->id)->first();
  $query->name = $request->name;
  $query->save();

  return redirect()->back();
}

public function AddExcerciseTypes(Request $request)
{
  $query = new excercise_types();
  $query->name = $request->name;
  $query->status = 1;
  $query->save();

  return redirect()->back();
}

public function AddTopicSubmit(request $request)
   {
      $files_names = '';
      $count = 0;
      // if (topics::where('code', '=', $request->topic_code)->exists())
      //   {
      //    return Redirect()->back()->withErrors('Topic Code Already Exists')->withInput(Input::all());
      //   }

        $query = new topics();
        $query->name = $request->topic_name;
        $query->code = $request->topic_code;
        $query->detail = $request->topic_des;
        $query->course_id = $request->course_id;
        $query->module = $request->module;
        $query->timer = $request->timer;
        $query->paid = $request->paid;
        $query->chapter_id = 0;
        $query->excercise_type = $request->excercise_type;
        // $query->warm_up = 'NA';
        // $query->instruction = 'NA';
        // $query->summary = 'NA';
        $query->status = 1;
        $query->save();

        //$warms = $request->file('warm');
        //dd($files);
        // if(isset($warms[0]))
        // {
        //     foreach($warms as $warm)
        //     {
        //      $input['imagename1'] = $warm->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $warm->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->define = 'warmup';
        //      $filing->save();
        //      $count++;
        //     }
        // }


        //$sums = $request->file('sum');
        //dd($files);
        // if(isset($sums[0]))
        // {
        //     foreach($sums as $sum)
        //     {
        //      $input['imagename1'] = $sum->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $sum->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->define = 'summary';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        // $insts = $request->file('inst');
        // //dd($files);
        // if(isset($insts[0]))
        // {
        //     foreach($insts as $inst)
        //     {
        //      $input['imagename1'] = $inst->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $inst->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->define = 'instruction';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        // $files = $request->file('files');
        // //dd($files);
        // if(isset($files[0]))
        // {
        //     foreach($files as $file)
        //     {
        //      $input['imagename1'] = $file->getClientOriginalName();
        //      $destinationPath = public_path('/uploads');
        //      $file->move($destinationPath, $input['imagename1']);
        //      $filing = new system_files();
        //      $filing->topic_id = $query->id;
        //      $filing->filename = $input['imagename1'];
        //      $filing->status = '1';
        //      $filing->save();
        //      $count++;
        //     }
        // }

        return redirect('AllExercise');
   }

   public function addstudentsubmit(request $request)
   {
    if (users::where('username', '=', $request->email)->exists())
    {
     return Redirect()->back()->withErrors('Email already Exits')->withInput(Input::all());
    }

    // if ($request->email == $request->parent_email)
    // {
    //  return Redirect()->back()->withErrors('Student and Parent Email cannot be the same.')->withInput(Input::all());
    // }
     $image = $request->file('profile_image');
     if(isset($image))
      {
       $input['imagename'] = $image->getClientOriginalName();
       $destinationPath = public_path('/images');
       $image->move($destinationPath, $input['imagename']);
       $query->profile_image = $input['imagename'];
      }
      else
      {
        $query->profile_image = 'avatar.png';
      }

     // $parents = new parents();
     // $parents->parent_name = $request->parent_name;
     // $parents->parent_phone = $request->parent_mobile;
     // $parents->parent_email = $request->parent_email;
     // $parents->status = '1';
     // $parents->save();

     // $pass = uniqid();
     // $HashPass = Hash::make($pass);
     // $register = new users();
     // $register->parent_id = $parents->id;
     // $register->username = $request->parent_email;
     // $register->password = $HashPass;
     // $register->status = '1';
     // $register->save();

    //  $send_email = $request->parent_email;
    // Mail::send('emails.welcomep',['name' => $request->first_name,'username' => $request->parent_email, 'password' => $pass], function ($message) use ($send_email)
    // {

    //  $message->from('info@multanamericanschool.edu.pk', 'Multan American School');
    //  $message->subject('Welcome to MAS');
    //  $message->to($send_email);

    // });

     $query = new students();
     $query->first_name = $request->first_name;
     $query->parent_id = Session::get('UserID');
     $query->roll_no = $request->roll_no;
     $query->last_name = $request->last_name;
     $query->email = $request->email;
     $query->joining_date = $request->joining_date;
     $query->designation = 'NA';
     $query->gender = $request->gender;
     $query->mobile_phone = $request->number;
     $query->joining_date = $request->joining_date;
     $query->birth_date = $request->birth_date;
     $query->status = '1';
     //$query->profile_image = $input['imagename'];
     $query->save();

     $pass2 = uniqid();
     $HashPass = Hash::make($pass2);
     $register = new users();
     $register->student_id = $query->id;
     $register->username = $request->email;
     $register->password = $HashPass;
     $register->status = '1';
     $register->save();

          $send_email = $request->email;
    Mail::send('emails.welsomes',['name' => $request->first_name,'username' => $request->email, 'password' => $pass2], function ($message) use ($send_email)
    {

     $message->from('info@multanamericanschool.edu.pk', 'Multan American School');
     $message->subject('Welcome to MAS');
     $message->to($send_email);

    });


     return redirect('Users');
     //$query->first_name = ;
   }


   public function EditStudentSubmit(request $request)
   {
     // $parents = parents::where('id',$request->parent_id)->first();
     // $parents->parent_name = $request->parent_name;
     // $parents->parent_phone = $request->parent_mobile;
     // $parents->save();


     $query = students::where('id',$request->student_id)->first();
     if(Session::get('UserID') == $query->parent_id)
      {
       $image = $request->file('profile_image');
       if($image)
       {
        $input['imagename'] = $image->getClientOriginalName();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        $query->profile_image = $input['imagename'];
       }

       $query->first_name = $request->first_name;
       //$query->parent_id = Session::get('UserID');
       $query->roll_no = $request->roll_no;
       $query->last_name = $request->last_name;
       $query->joining_date = $request->joining_date;
       $query->gender = $request->gender;
       $query->mobile_phone = $request->number;
       $query->joining_date = $request->joining_date;
       $query->birth_date = $request->birth_date;
       $query->status = '1';
       $query->save();

        return redirect()->back()->with('sucess','Data Updated');
     }
     else
     {
       return redirect('Users');
     }



    
     //$query->first_name = ;
   }


   public function BlockUser($ID)
   {
    $query = educators::where('id',$ID)->first();
    $query->status = 3;
    $query->save();
    $users = users::where('username',$query->email)->first();
    $users->status = 3;
    $users->save();
    //educators::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function BlockUser2($ID)
   {
    $query = students::where('id',$ID)->first();
    $query->status = 3;
    $query->save();
    $users = users::where('username',$query->email)->first();
    $users->status = 3;
    $users->save();
    //educators::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function EnableUser($ID)
   {
    $query = educators::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    $users = users::where('username',$query->email)->first();
    $users->status = 1;
    $users->save();
    //educators::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function EnableUser2($ID)
   {
    $query = students::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    $users = users::where('username',$query->email)->first();
    $users->status = 1;
    $users->save();
    //educators::where('id',$ID)->delete();
    return redirect()->back();
   }

  public function DeleteExamType($ID)
   {
    $query = exam_types::where('id',$ID)->delete();
    return redirect()->back();
   }

  public function DeleteExcerciseType($ID)
   {
    $query = excercise_types::where('id',$ID)->delete();
    return redirect()->back();
   }

  public function DisableExcerciseType($ID)
   {
    $query = excercise_types::where('id',$ID)->first();
    $query->status = 0;
    $query->save();
    return redirect()->back();
   }

    public function DisableExamType($ID)
   {
    $query = exam_types::where('id',$ID)->first();
    $query->status = 0;
    $query->save();
    return redirect()->back();
   }

     public function EnableExcerciseType($ID)
   {
    $query = excercise_types::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    return redirect()->back();
   }

  public function DisableQuestion($ID)
   {
    $query = questions::where('id',$ID)->first();
    $query->status = 0;
    $query->save();
    return redirect()->back();
   }

  public function EnableQuestion($ID)
   {
    $query = questions::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    return redirect()->back();
   }

  public function DisableExam($ID)
   {
    $query = courses::where('id',$ID)->first();
    $query->status = 0;
    $query->save();
    return redirect()->back();
   }

  public function EnableExam($ID)
   {
    $query = courses::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    return redirect()->back();
   }

  public function DisableSection($ID)
   {
    $query = quizes::where('id',$ID)->first();
    $query->status = 0;
    $query->save();
    return redirect()->back();
   }

  public function EnableSection($ID)
   {
    $query = quizes::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    return redirect()->back();
   }

    public function EnableExamType($ID)
   {
    $query = exam_types::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    return redirect()->back();
   }

   public function DisableExcercise($ID)
   {
    $query = topics::where('id',$ID)->first();
    $query->status = 0;
    $query->save();
    return redirect()->back();
   }

     public function EnableExcercise($ID)
   {
    $query = topics::where('id',$ID)->first();
    $query->status = 1;
    $query->save();
    return redirect()->back();
   }

   //  public function BlockUser($ID)
   // {
   //  $query = educators::where('id',$ID)->first();
   //  $query->status = 3;
   //  $query->save();
   //  $users = users::where('username',$query->email)->first();
   //  $users->status = 3;
   //  $users->save();
   //  //educators::where('id',$ID)->delete();
   //  return redirect()->back();
   // }

   public function DeleteProfessor($ID)
   {
    $query = educators::where('id',$ID)->first();
    users::where('username',$query->email)->delete();
    educators::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteStudent($ID)
   {
     $query = students::where('id',$ID)->first();
    users::where('username',$query->email)->delete();
    parents::where('id',$query->parent_id)->delete();
    students::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteCourse($ID)
   {
    courses::where('id',$ID)->delete();
    return redirect()->back();
   }


   public function DeleteTopic($ID)
   {
    topics::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteChapter($ID)
   {
    chapters::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteAssignment($ID)
   {
    assignments::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteQuiz($ID)
   {
    quizes::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteQuestion($ID)
   {
    questions::where('id',$ID)->delete();
    return redirect()->back();
   }

   public function DeleteFile($ID)
   {
    system_files::where('id',$ID)->delete();
    return redirect()->back();
   }


    ///////////////////////////////////////////////////////////////////////////

    public function home()
    {
      if(Session::get('adminController') == 2)
        {

          $query = students::limit(10)->where('parent_id',Session::get('UserID'))->get();
          $query1 = educators::where('status','=','1')->count();
          $query2 = courses::where('status','=','1')->count();
          $query3= students::where('status','=','1')->where('parent_id',Session::get('UserID'))->count();
          return view('educator/index')->with('data',$query)->with('data1',$query1)->with('data2',$query2)->with('data3',$query3);
        }
        else
        {
          $query = students::limit(10)->get();
          $query1 = educators::where('status','=','1')->count();
          $query2 = courses::where('status','=','1')->count();
          $query3= students::where('status','=','1')->count();
          return view('educator/index')->with('data',$query)->with('data1',$query1)->with('data2',$query2)->with('data3',$query3);
        }
      

    //   $query1 = parents::where('id',$query->parent_id)->first();
    // return view('educator/index')->with('data',$query)->with('data1',$query1);

    }


  public function event(){
  	return view('educator/event');
  }

    public function allprofessors()
    {
        $query = educators::all();
    	return view('educator/all_professors')->with('data',$query);
    }

    public function addprofessor()
    {
       $query = courses::all();
    	return view('educator/add_professor_bootstrap')->with('data',$query);
    }

    public function editprofessor($ID)
    {
        $query = educators::where('id',$ID)->first();
        $query1 = courses::all();
    	return view('educator/edit_professor')->with('data',$query)->with('examtype',$query1);
    }

    public function ExcerciseCategorizations()
    {
        $query = excercise_types::all();
      return view('educator/excercise_types')->with('data',$query);
    }

    public function ExamCategorizations()
    {
        $query = exam_types::all();
      return view('educator/exam_types')->with('data',$query);
    }

    public function aboutprofessor()
    {
    	return view('educator/professor_profile');
    }

    public function allstudents()
    {
        if(Session::get('adminController') == 2)
          {
            $query = students::where('parent_id',Session::get('UserID'))->get();
          }
          else
          {
            $query = students::all();
          }
       
    	return view('educator/all_students')->with('data',$query);
    }

    public function addstudents()
    {
    	return view('educator/add_student_bootstrap');
    }

    public function editstudents($ID)
    {
        $query = students::where('id',$ID)->first();
        //$query1 = parents::where('id',$query->parent_id)->first();
    	return view('educator/edit_student')->with('data',$query);
    }

    public function aboutstudent()
    {
    	return view('educator/student_profile');
    }

    public function allcourses()
    {
        $query = courses::all();
    	return view('educator/all_courses')->with('data',$query);
    }

    public function addcourses()
    {
      $query = exam_types::all();
    	return view('educator/add_course_bootstrap')->with('examtypes',$query);
    }

    public function editcourses($ID)
    {
        $query = courses::where('id',$ID)->first();
        $query1 = exam_types::all();
    	return view('educator/edit_course')->with('data',$query)->with('examtypes',$query1);
    }

    public function aboutcourses()
    {
    	return view('educator/course_details');
    }

    public function fees()
    {
    	return view('educator/fees_collection');
    }

    public function addfees()
    {
    	return view('educator/add_fees_bootstrap');
    }

    public function feereceipt()
    {
    	return view('educator/fees_receipt');
    }

    public function allchapters()
    {
        $query = chapters::all();
    	return view('educator/all_chapters')->with('data',$query);
    }

    public function addchapter()
    {
        $query = courses::all();
    	return view('educator/add_chapter')->with('data',$query);
    }

    public function editchapter($ID)
    {
        $query = chapters::where('id',$ID)->first();
    	return view('educator/edit_chapter')->with('data',$query);
    }

    public function alltopics()
    {
        $query = topics::all();
    	return view('educator/all_topics')->with('data',$query);
    }
    public function addtopic()
    {
        $query = courses::all();
        $query1 = excercise_types::all();
    	return view('educator/add_topic')->with('data',$query)->with('data1',$query1);
    }
    public function edittopic($ID)
    {
        $query = topics::where('id',$ID)->first();
    	return view('educator/edit_topic')->with('data',$query);
    }


    public function AllAssignments()
    {
        $query = assignments::all();
    	return view('educator/all_assignment')->with('data',$query);
    }

    public function  addassignments()
    {
        $query = courses::all();
        $query1 = chapters::all();
        $query2 = topics::all();
    	return view('educator/add_assignment')->with('data',$query)->with('data1',$query1)->with('data2',$query2);
    }
    public function  editassignments($ID)
    {
      $query = assignments::where('id',$ID)->first();
      return view('educator/edit_assignment')->with('data',$query);
    }

    public function  allquiz()
    {
      $query = quizes::all();
      return view('educator/all_quiz')->with('data',$query);
    }

    public function  editquiz($ID)
    {
      $query = quizes::where('id',$ID)->first();
      return view('educator/edit_quiz')->with('data',$query);
    }

    public function  addquiz()
    {
         $query = courses::all();
        $query1 = chapters::all();
        $query2 = topics::all();
      return view('educator/add_quiz')->with('data',$query)->with('data1',$query1)->with('data2',$query2);
    }

    public function  allquestion()
    {
        $query = questions::all();
        return view('educator/all_question')->with('data',$query);
    }

    public function  editquestion($ID)
    {
      $query = questions::where('id',$ID)->first();
      return view('educator/edit_question')->with('data',$query);
    }

    public function  addquestion()
    {
      $query = quizes::all();
      return view('educator/add_question')->with('data',$query);
    }

    public function ErrorReport()
    {
      echo 'WORK IN PROGRESS';
    }
}
