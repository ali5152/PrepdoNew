<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePass;
use App\users as Users;
use App\educators;
use App\students;
use App\parents;
use App\settings;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
//use App\elf_users as Users;
use Session;

class LoginController extends Controller
{
    public function login( Request $request )
    {   
     if(isset($_POST['username']))
       {
     	// var_dump($_POST);
     	// exit();
          $username = $_POST['username'];
          $pass = $_POST['pass'];
          if ($username == "admin@prepscale.com" && $pass == "queper12345") 
             {
                 //$educator = educators::where('id',$status->educator_id)->first();	
                  Session::put('email','admin@t2s.com');
                  Session::put('adminController', '1');
                  Session::put('UserID','5645168');
                  Session::put('first_name','Admin T2S');
                  Session::put('email','admin@t2s.com');
                  Session::put('profile','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZaeuEedoV90WhEg5ikb6SwJgnh0yUFYJV1E_mHHIAaxQwyJvG');

                  $_SESSION['adminController'] = 1;

                          return Redirect('Dashboard');
             }
             // else
             // {
             // 	return Redirect('AdminLogin')->with('errors' , 'Invalid Password or Username');
             // }
          $results = Users::where('username','=',$username)->first();
          if($results)
          {
            if($results->status == 3)
            {
              return Redirect()->back()->with('errors' , 'Account has been Blocked, Contact Support');
            }
          $HashPaswword = $results->password;
          if (Hash::check($pass, $HashPaswword))
             {
                  if($status = Users::where('username','=',$username)->first())
                  {
                    if($status)
                    { 
                      if($status->status != 1)
                      {
                         return Redirect()->back()->with('errors' , 'Account not Activated, <a href = "'.url('resendCode').'/'.$results->username.'" style = "color:black; text-decoration:none;"> <strong>Click Here</strong> </a> to Activate');
                      }
                      if($results->role == 10)
                      {
                        // Session::put('adminController', '2');
                        // $_SESSION['roles'] = $results->role_details;
                        // Session::put('UserID',$results->id);
                        // Session::put('first_name',$results->full_name);
                        // Session::put('roles',$results->role_details);
                        // Session::put('address',$results->address);
                        // Session::put('phone',$results->phone);
                        // Session::put('email',$results->username);

                         //$_SESSION['adminController'] = 1;

                        // return Redirect('/Dashboard');
                      }
                      else
                      {
                        //$settings = settings::where('id',1)->first(); 
                        if($status->educator_id != '' || $status->educator_id != 0)
                        {
                          $educator = educators::where('id',$status->educator_id)->first();	
                          Session::put('email',$results->username);
                          Session::put('adminController', '2');
                          Session::put('UserID',$educator->id);
                          Session::put('allowed_Students', $educator->designation);
                          Session::put('consumed', $educator->consumed);
                          Session::put('expiry',$educator->exp_date);
                          Session::put('first_name',$educator->first_name);
                          Session::put('profile',url("public/images").'/'.$educator->profile_image);
                          Session::put('email',$results->username);

                           $_SESSION['adminController'] = 2;

                          return Redirect('Dashboard');
                        }
                        // else if($status->student_id != '' || $status->student_id != 0)
                        // {
                        //   $students = students::where('id',$status->student_id)->first();	
                        //   Session::put('email',$results->username);
                        //   Session::put('adminController', '3');
                        //   Session::put('UserID',$students->id);
                        //   Session::put('first_name',$students->first_name);
                        //   Session::put('profile',url("public/images").'/'.$students->profile_image);
                        //   Session::put('email',$results->username);

                        //    $_SESSION['adminController'] = 3;

                        //   //return Redirect('StudentPortal');
                        // }
                        // else if($status->parent_id != '' || $status->parent_id != 0)
                        // {
                        //   $parent = parents::where('id',$status->parent_id)->first();	
                        //   Session::put('email',$results->username);
                        //   Session::put('adminController', '3');
                        //   Session::put('UserID',$parent->id);
                        //   Session::put('first_name',$parent->parent_name);
                        //   Session::put('profile','http://cdn.onlinewebfonts.com/svg/img_181369.png');
                        //   Session::put('email',$results->username);

                        //    $_SESSION['adminController'] = 3;

                        //   //return Redirect('ParentPortal');
                        // }
                        //echo "<center><h1>Profile Page Under Development</h1></center>";
                        
                       }
                    
                         
                    }
                    else
                    {
                         return Redirect()->back()->with('errors' , 'Account not Activated, <a href = "'.url('resendCode').'/'.$results->username.'" style = "color:black; text-decoration:none;"> <strong>Click Here</strong> </a> to Activate');
                    }
                }
                else
                {
                     return Redirect()->back()->with('errors' , 'Account not Activated, <a href = "'.url('resendCode').'/'.$results->username.'" style = "color:black; text-decoration:none;"> <strong>Click Here</strong> </a> to Activate');
                }
                 
             }
            else
            {
               return Redirect()->back()->with('errors' , 'Invalid Password');   
            }
          }
          else
          {
              return Redirect()->back()->with('errors' , 'Invalid Username');    
          } 
      }
      else
      {
         return Redirect('login');
      }
   }
  
    public function ChangePass( ChangePass $request )
  {
    
      $pass = $request->opass;
      $ID = Session::get('UserID');
      $results = Users::where('id','=',$ID)->first();
      if($results)
          {
          $HashPaswword = $results->password;
          if (Hash::check($pass, $HashPaswword))
             {
               $results->password = Hash::make($request->password_confirmation);
               $results->save();
               return redirect()->back()->with('sucess', 'Password Changed Successfully');
             }
             else
             {
               return redirect()->back()->withErrors('Current Password Incorrect');
             }
        }
        else
        {
          return redirect('/');
        }

  }
  
    public function APPLogin($username,$pass)
    {   
     if(isset($username))
       {
          if ($username == "admin@eave.io" && $pass == "queper12345") 
             {
                //session_start();
                // Session::put('adminController', '2');
                // $_SESSION['roles'] = 'on:on:on:on:on:on:on:on:on:on:on:on';
                 //Session::put('UserID','543187427');
                //return Redirect('/AdminDashboard');
                echo '1';
             }
          $results = Users::where('username','=',$username)->where('status','!=',0)->first();
          if($results)
          {
            if($results->status == 3)
            {
              echo '0';
              //return Redirect()->back()->with('errors' , 'Account has been Blocked, Contact Support');
            }
          $HashPaswword = $results->password;
          if (Hash::check($pass, $HashPaswword))
             {
                  if($status = Users::where('username','=',$username)->first())
                  {
                    if($status)
                    { 
                      if($status->status != 1)
                      {
                         echo '2';
                      }
                      if($results->role == 10)
                      {
                        echo '3';
                      }
                      else
                      {
                        echo '1';
                       }
                    
                         
                    }
                    else
                    {
                         echo '2';
                    }
                }
                else
                {
                     echo '2';
                }
                 
             }
            else
            {
               echo '4';   
            }
          }
          else
          {
              echo '4'; 
          } 
      }
      else
      {
         echo '5';
      }
   }

   public function logout()
    {
      //session_start();
      //session_destroy();
      Session::flush();

      return redirect('/');
    }




}