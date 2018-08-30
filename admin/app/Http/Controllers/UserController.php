<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users as Users;
use Mail;
use Session;
use Hash;

class UserController extends Controller
{
    public function resetpass()
    {
      if(isset($_POST['username']))
       {
        $username = $_POST['username'];
        $results = Users::where('username','=',$username)->first();
        if($results)
        {
          $results->resetpass = 1;
          $results->save();
          $send_email = $results->username;
          $password = $results->password;
          $username = $results->username;
          $HashPass = str_replace("/","",$password);
          Mail::send('emails.reset',['email' => $send_email,'username' => $username, 'password' => $HashPass], function ($message) use ($send_email)
           {
              $message->from('info@multanamericanschool.edu.pk', 'Multan American School');
              $message->subject('Reset Password');
              $message->to($send_email);   
           }); 
            return redirect('/')->with('login', 'We have sent you an email, Please check your email to reset your password.');
        }
        else
        {
          return redirect('/')->with('errors', 'Invalid Email, We do not have any member registered with this Email.');
        }
       }
    }

     public function resetpass_email($credentials)
      {
        $array = explode(":", $credentials);
        $HashPass = $array[1];
        //var_dump($HashPass);
        //exit();
        $Data = Users::where('username', $array[0])->where('resetpass',1)->first();
        if($Data)
        { 
          $Data->resetpass = 0;
          $Data->save();
          $send_email = $Data->username;
          $Data = $Data->password;
          $Data = str_replace("/", "", $Data);
          if($Data == $array[1])
          {
              $origin = uniqid();
              $hashed_random_password = Hash::make($origin);
              if(Users::where('username' , '=' ,$array[0])->update(['password' => $hashed_random_password]))
                 {
                    Mail::send('emails.newpass',['email' => $send_email,'password' => $origin], function ($message) use ($send_email)
                    {
                          $message->from('info@multanamericanschool.edu.pk', 'Multan American School');
                           $message->subject('New Password');
                           $message->to($send_email);
                           
                         }); 
             return redirect('/')->with('login', 'Please Check your email and Login with your new password');
          }
          else
          {
            return redirect('/');
          }
        }
        else
        {
            return redirect('/');
        }
      }
      else
      {
        return redirect('/');
      } 
    }
}

     
