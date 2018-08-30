<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from www.wifistudy.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 06:09:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Online Test Series</title>
<meta name="description" content="WiFiStudy offers online test series, daily live classes, exam preparation and job updates for SSC, Banking, IBPS PO, SBI Clerk, RRB, Insurance, Railway and other exams. Take free quizzes, mock tests and get your doubts cleared at the one stop destination.">
<meta name="keywords" content="Online Test Series , Free Mock Test, Online Quiz, wifistudy">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/gif">
<link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.js')}}" async></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/nprogress.js')}}" async></script>
<link href="{{asset('assets/frontend/css/new_home_style.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/bxslider.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/globle.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/new_home_style.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">

</style>

<style media="screen">
#header
{
  background-color:white; height:80px;

}
.card-pricing.popular {
  z-index: 1;
  border: 3px solid #007bff;
}
.card-pricing .list-unstyled li {
  padding: .5rem;
  color: #357d0f;
}
.mobile{
  display: none ;
}
 .w3-bar-block{
  border:0px solid rgba(191,191,191,.4)!important;
  width: 80% !important;
}
@media screen and (max-width: 480px) {
  .mobile{
    display: inline ;
  }
  #header
  {
  display: none;
  }
}
.w3-teal, .w3-hover-teal:hover{
  background-color: #665DD0 !important;
}
.mobile ul li{
  list-style: none;
}
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: transparent;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: transparent;
}

/* Create an active/current tablink class */
.tab button.active {



}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}


.header{

background-image:{{asset('images/c1.jpg')}};
 background-repeat: no-repeat; background-position: center;background-size: cover;
}
.header .main
{

background-color: rgba(0, 0, 0, 0.9);
color:white;
}
.header .main .text{
margin-top: 80px;
}
.btn1{
 padding:10px;
 background-color: #665DD0;
 color: white;
}

@media screen and (max-width: 480px) {
.header .main
{
 height: 750px;
background-color: rgba(0, 0, 0, 0.5);
color:white;
}
}
.box{

  padding:20px;font-size: 16px; border-radius: 5px;
  box-shadow: 0px 0px 9px 9px rgba(191,191,191,.3) ;
}
</style>
</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ543F8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- mobile view k liay nav -->
<div class="mobile">


<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <br>
  <ul class="navbar-nav">
    <br>
    <li><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" style=" width:80px; margin-top:-30px; "></a></li>
    <br>
  <li class="exam_menu_header">
    <a href="{{url('/')}}">Courses<span class="glyphicon glyphicon-menu-down arrow_menu"></span></a>
  <div class="exam_groups white_box_shadow dropdown-menu">
  <div class="exam_grp_ws">
  <h2><span class="university ic_sprit"><img width="18" height="18" src="{{asset('assets/frontend/img/Banking-Insurance-ic.png')}}"></span><a href="b
    #">Banking &amp; Insurance</a><span class="arrow_menu_exam"></span></h2>
  <ul class="listing_exam_menu">
    @php

      $course = \App\VideoCoursesModel::all();


    @endphp

    @foreach($course as $name)
      <li><a href="{{url(('chapters/'.$name->id))}}">{{$name->course_name}}</a></li>


    @endforeach
  </ul>
  <br>
  </div>
  <div class="exam_grp_ws">

  </div>
  <div class="exam_grp_ws">

  </div>
  </div>
  </li>
  <br>
  <li><a href="{{url('Exam')}}">Test Ssdfdsferies</a></li><br>
    <li><a href="{{url('video-courses')}}">Video Courses</a></li>
  <!-- <li><a href="government-jobs.html">Jobs</a></li> -->
  </ul>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container" >

    <img src="{{asset('images/logo.png')}}" style="width:100px; margin-left:100px; margin-top:-50px;" alt="" >
  </div>
</div>
</div>
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<header id="header" style="position: fixed">
<div class="container">
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<!-- <div class="logo">
<a href="index.html"><img src="assets/frontend/images/logo.png" alt="Logo"></a>
</div> -->
<nav class="navbar">
<div id="navbars" class="collapse navbar-collapse">
<ul class="navbar-nav">
  <li><a href=" {{url('/')}}"><img src="{{asset('images/logo.png')}}" style=" width:80px; margin-top:-30px; "></a></li>
<li class="exam_menu_header">
  <a href="{{url('/')}}">Courses <span class="glyphicon glyphicon-menu-down arrow_menu"></span></a>
<div class="exam_groups white_box_shadow dropdown-menu">
<div class="exam_grp_ws" style="text-align: center;">
<h2><span class="university ic_sprit"><img width="18" height="18"></span><a href="{{url('/')}}">Courses Name</a><span class="arrow_menu_exam"></span></h2>
<ul class="listing_exam_menu">

  @php

        $course = \App\VideoCoursesModel::all();


  @endphp

  @foreach($course as $name)
          <li><a href="{{url('chapters',$name->id)}}">{{$name->course_name}}</a></li>


    @endforeach
</ul>
</div>
<div class="exam_grp_ws">

</div>
<div class="exam_grp_ws">

</div>
</div>
</li>
<li><a href="{{url('video-courses')}}">Video Courses</a></li>
<!-- <li><a href="government-jobs.html">Jobs</a></li> -->
</ul>
</div>
</nav>
<div class="header_act">
<div class="header_search">

<div id="searchRes" style="display:none;"></div>
</div>
<div class="myaccoubt_wrap">
<div class="my_account_mobile">

  <div class="myaccount_holder">


    @if(!\Illuminate\Support\Facades\Auth::check())

  <a data-toggle="modal" title="Log In" href="{{route('login')}}" class="login_btn">Login</a>


  @else
      <li class="dropdown">

        <a class="dropdown-toggle profile-name fa fa-user fa-user-login-1" data-toggle="dropdown" href=""> {{ Auth::user()->name }}
          <span class="fa fa-angle-down"> </span>
        </a>


        <ul class="dropdown-menu dropdown-color ">
          {{--<li><a class="dropdown-item color-black" href="{{ route('profile') }}" ><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Profile</a></li>--}}

       <!--    <li><a href="{{ route('user-profile') }}" class="dropdown-item color-black mob-color-white"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>  Profile</a></li> -->
          <li><a href="{{ route('payment') }}" class="dropdown-item color-black mob-color-white"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>  Payments</a></li>

          <li><a href="{{ route('attemptedexams') }}" class="dropdown-item color-black mob-color-white"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>  Attempted Exams</a></li>

          <li><a href="/changePassword" class="dropdown-item color-black mob-color-white"><i class="fa fa-user-secret fa-user-login-1" aria-hidden="true"></i> Change Password</a></li>

          <li><a href="{{ route('logout') }}" class="dropdown-item color-black mob-color-white"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i> Logout</a></li>
        </ul>

      </li>
  @endif


</div>
</div>
<div class="download_app">

</div>
</div>
</div>

</div>
</header>

