<!DOCTYPE html>

<html lang="en">

<!-- BEGIN HEAD -->





<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta name="description" content="Multan American School" />

    <meta name="author" content="SmartUniversity" />

    <title>Student Portal</title>

    <!-- google font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />

	<!-- icons -->

    <link href="{{ url('/') }}/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('/') }}/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="{{ url('/') }}/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />

	<!--bootstrap -->

	<link href="{{ url('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<link href="{{ url('/') }}/assets/plugins/summernote/summernote.css" rel="stylesheet">

    <!-- Material Design Lite CSS -->

	<link rel="stylesheet" href="{{ url('/') }}/assets/plugins/material/material.min.css">

	<link rel="stylesheet" href="{{ url('/') }}/assets/css/material_style.css">

	<!-- inbox style -->

    <link href="{{ url('/') }}/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />

	<!-- Theme Styles -->

    <link href="{{ url('/') }}/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />

    <link href="{{ url('/') }}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('/') }}/assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('/') }}/assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />

	<!-- favicon -->

    <link rel="shortcut icon" href="assets/img/logo.jpg" />

 </head>

 <!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

    <div class="page-wrapper">



        <!-- <div class="page-header navbar navbar-fixed-top">

            <div class="page-header-inner ">



                <div class="page-logo">

                    <a href="{{url('/')}}">



                    <span class="logo-default" style="font-size: 14px;">Multan American School</span> </a>

                </div>









                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">

                    <span></span>

                </a>





            </div>

        </div> -->

        <!-- end header -->



        <!-- start header -->

 <div class="page-header navbar navbar-fixed-top">

     <div class="page-header-inner " style="height: 70px;">

         <!-- logo start -->

         <div class="page-logo" style="height: 70px;">
               <a href="{{url('Dashboard')}}">
             

             <!-- <span class="logo-icon material-icons fa-rotate-45"></span> -->

             <span class="logo-default" style="font-size: 14px;"><img src="{{ Session::get('profile') }}" style="height:50px; width: 50px; border-radius:80px; color: white;" />&nbsp;&nbsp;&nbsp;<font color="white"><?php echo substr(Session::get('first_name'),0,10) ?></font></span>

            </a>

         </div>

         <!-- logo end -->

 <ul class="nav navbar-nav navbar-left in">

   <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>

 </ul>

          <!-- <form class="search-form-opened" action="#" method="GET">

             <div class="input-group">

                 <input type="text" class="form-control" placeholder="Search..." name="query">

                 <span class="input-group-btn">

                   <a href="javascript:;" class="btn submit">

                      <i class="icon-magnifier"></i>

                    </a>

                 </span>

             </div>

         </form> -->

         <!-- start mobile menu -->

         <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">

             <span></span>

         </a>

        <!-- end mobile menu -->

         <!-- start header menu -->

         <div class="top-menu">



               <!-- <li><a href="" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li> -->



                 <!-- end message dropdown -->

     <!-- start manage user dropdown -->



                 <!-- end manage user dropdown -->

<!--                  <div class="dropdown dropdown-quick-sidebar-toggler">

                   <div class="dropdown show" style="padding:10px;">

      <a class="btn  dropdown-toggle" style="padding:5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <li class="fa fa-cog" style="color:rgb(20,20,20)"></li>

      </a>



      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding:10px;">

        @if(Session::get('adminController') == 2)

        <a class="dropdown-item" href="{{url('ShowQuizes')}}">Attempted Quizes</a>

        @endif

        <a class="dropdown-item" href="{{url('ChangePass')}}">Change Password</a>

        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>





      </div>

    </div>

  </div> -->



         </div>

     </div>

 </div>

 <!-- end header -->

