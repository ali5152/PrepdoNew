<!DOCTYPE html>

<html lang="en">
<!-- BEGIN HEAD -->
<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta name="description" content="Multan American School" />

    <meta name="author" content="SmartUniversity" />

    <title>PrepScale</title>

    <!-- google font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />

	<!-- icons -->

    <link href="{{ url('/') }}/assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('/') }}/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="{{ url('/') }}/assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />

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

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

 </head>

 <!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

    <div class="page-wrapper">

        <!-- start header -->

        <div class="page-header navbar navbar-fixed-top">

            <div class="page-header-inner " style="background-color:#6673FC !important;">

                <!-- logo start -->

                <div class="page-logo">

                    <a href="{{url('Dashboard')}}">

                    <!-- <span class="logo-icon material-icons fa-rotate-45"></span> -->

                    <span class="logo-default" style="margin-left: -20px;"><img src="{{url('assets/img')}}/logo.png" width="200" height="40"></span> </a>

                </div>

                <!-- logo end -->

				<ul class="nav navbar-nav navbar-left in">

					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu" style="color:white;"></i></a></li>

				</ul>

<!--                  <form class="search-form-opened" action="#" method="GET"  style="border:1px solid white;">

                    <div class="input-group" >

                        <input type="text" class="form-control" placeholder="Search..." name="query" style="color:white;">

                        <span class="input-group-btn">

                          <a href="javascript:;" class="btn submit">

                             <i class="icon-magnifier" style="color:white;"></i>

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

                    <ul class="nav navbar-nav pull-right">

                    	<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>



                        <!-- end message dropdown -->

 						<!-- start manage user dropdown -->
                        <!-- end manage user dropdown -->
                    <!--     <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">more_vert</i>
	                        </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="{{ Session::get('profile') }}" class="img-circle user-img-circle" alt="User Image" style="height: 80px;" />
                                     <!--  <img src="{{ url('/') }}/assets/img/adminpic.png" class="img-circle user-img-circle" alt="User Image" style="height: 80px;" /> -->
	                                </div>
	                                <div class="pull-left info">
	                                    <p>
                                        {{ Session::get('first_name') }}
                                        <!-- T2S -->
                                      </p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>

	                        @if(Session::get('adminController') == '2')

	                         <li class="nav-item start active open">
	                            <a href="{{ url('Dashboard') }}" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
	                            </a>
	                        </li>

	                         <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Users</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                               
	                                <li class="nav-item">
	                                    <a href="{{ url('AddUsers') }}" class="nav-link "> <span class="title">Add Users </span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
	                                    <a href="{{url('Users')}}" class="nav-link "> <span class="title">All Users</span>
	                                    </a>
	                                </li>
	                                <!-- <li class="nav-item">
	                                    <a href="{{url('EditStudents')}}" class="nav-link "> <span class="title">Edit Student</span>
	                                    </a>
	                                </li> -->
	                               <!--  <li class="nav-item">
	                                    <a href="{{url('AboutStudent')}}" class="nav-link "> <span class="title">About Student</span>
	                                    </a>
	                                </li> -->
	                            </ul>
	                        </li>

	                        <li class="nav-item">

	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">settings</i>

	                                <span class="title">Settings</span> <span class="arrow"></span>

	                            </a>

	                            <ul class="sub-menu">

	                                <li class="nav-item">

	                                    <a href="{{url('ChangePass')}}" class="nav-link "> <span class="title">Change Password</span>

	                                    </a>

	                                </li>

	                                <!-- <li class="nav-item">

	                                    <a href="{{url('ExamCategorizations')}}" class="nav-link "> <span class="title">Exams Categories</span>

	                                    </a>

	                                </li> -->



	                                <li class="nav-item">

										<a href="{{url('ErrorReport')}}" class="nav-link "> <span class="title">Bug/Error Report</span></a>

	                                </li>

	                            </ul>

	                        </li>

	                        <li class="nav-item">

	                              <a href="{{ url('logout') }}"><i class="icon-logout"></i> Log Out </a>

	                         </li>
                            
                            @else
                             
                             <li class="nav-item start active open">
	                            <a href="{{ url('Dashboard') }}" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
	                            </a>
	                        </li>
	                       <!--  <li class="nav-item">
	                            <a href="{{url('Event')}}" class="nav-link nav-toggle"> <i class="material-icons">event</i>
	                                <span class="title">Event Management</span>
	                            </a>
	                        </li> -->
	                        <!-- <li class="nav-item">
	                            <a href="" class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Partners </span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('AllPartners')}}" class="nav-link "> <span class="title">All Partners</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{url('AddPartners')}}" class="nav-link "> <span class="title">Add Partners </span>
	                                    </a>
	                                </li>
	                              
	                            </ul>
	                        </li> -->
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Users</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('Users')}}" class="nav-link "> <span class="title">All Users</span>
	                                    </a>
	                                </li>
	                               <!--  <li class="nav-item">
	                                    <a href="{{ url('AddUsers') }}" class="nav-link "> <span class="title">Add Users </span>
	                                    </a>
	                                </li> -->
	                                <!-- <li class="nav-item">
	                                    <a href="{{url('EditStudents')}}" class="nav-link "> <span class="title">Edit Student</span>
	                                    </a>
	                                </li> -->
	                               <!--  <li class="nav-item">
	                                    <a href="{{url('AboutStudent')}}" class="nav-link "> <span class="title">About Student</span>
	                                    </a>
	                                </li> -->
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>

	                                <span class="title">Exams</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('AllExams')}}" class="nav-link "> <span class="title">All Exams</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{url('AddExam')}}" class="nav-link "> <span class="title">Add Exams</span>
	                                    </a>
	                                </li>
	                                <!-- <li class="nav-item">
	                                    <a href="{{url('EditCourses')}}" class="nav-link "> <span class="title">Edit Course</span>
	                                    </a>
	                                </li> -->
	                            </ul>
	                        </li>
	                              <!-- <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Chapters</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('AllChapters')}}" class="nav-link "> <span class="title">All Chapter</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{url('AddChapter')}}" class="nav-link "> <span class="title">Add Chapter</span>
	                                    </a>
	                                </li> -->
	                               <!--  <li class="nav-item">
	                                    <a href="{{url('EditChapter')}}" class="nav-link "> <span class="title">Edit Chapter</span>
	                                    </a>
	                                </li> -->
	                            <!-- </ul>
	                        </li> -->
	                              <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Exercises </span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('AllExercise')}}" class="nav-link "> <span class="title">All Exercises </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{url('AddExercise')}}" class="nav-link "> <span class="title">Add Exercise </span>
	                                    </a>
	                                </li>
	                                <!-- <li class="nav-item">
	                                    <a href="{{url('EditTopic')}}" class="nav-link "> <span class="title">Edit Exercise</span>
	                                    </a>
	                                </li> -->
	                            </ul>
	                        </li>







	                        <!-- <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Assignments</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('AllAssignments')}}" class="nav-link "> <span class="title">All Assignment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{url('AddAssignment')}}" class="nav-link "> <span class="title">Add Assignment</span>
	                                    </a>
	                                </li> -->
	                                <!-- <li class="nav-item">
	                                    <a href="{{url('EditAssignment')}}" class="nav-link "> <span class="title">Edit Assignment</span>
	                                    </a>
	                                </li> -->
	                            <!-- </ul>
	                        </li> -->
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Sections</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{url('AllSections')}}" class="nav-link "> <span class="title">All Sections</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{url('AddSection')}}" class="nav-link "> <span class="title">Add Section</span>
	                                    </a>
	                                </li>
	                             <!--    <li class="nav-item">
	                                    <a href="{{url('EditQuiz')}}" class="nav-link "> <span class="title">Edit Quiz</span>
	                                    </a>
	                                </li> -->
	                            </ul>
	                        </li>







	                        <li class="nav-item">

	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>

	                                <span class="title">Questions</span> <span class="arrow"></span>



	                            </a>

	                            <ul class="sub-menu">

	                                <li class="nav-item">

	                                    <a href="{{url('AllQuestion')}}" class="nav-link "> <span class="title">All Question</span>

	                                    </a>

	                                </li>



	                                <li class="nav-item">

	                                    <a href="{{url('AddQuestion')}}" class="nav-link "> <span class="title">Add Question</span>

	                                    </a>

	                                </li>

	                               <!--  <li class="nav-item">

	                                    <a href="{{url('EditQuestion')}}" class="nav-link "> <span class="title">Edit Question</span>

	                                    </a>

	                                </li> -->



	                            </ul>







	                        </li>



	                        <li class="nav-item">

	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">settings</i>

	                                <span class="title">Settings</span> <span class="arrow"></span>

	                            </a>

	                            <ul class="sub-menu">

	                                <li class="nav-item">

	                                    <a href="{{url('ChangePass')}}" class="nav-link "> <span class="title">Change Password</span>

	                                    </a>

	                                </li>

	                                <li class="nav-item">

	                                    <a href="{{url('ExamCategorizations')}}" class="nav-link "> <span class="title">Exams Categories</span>

	                                    </a>

	                                </li>



	                                <li class="nav-item">

										<a href="{{url('ExcerciseCategorizations')}}" class="nav-link "> <span class="title">Exercises Types</span></a>

	                                </li>

	                            </ul>

	                        </li>

	                        <li class="nav-item">

	                              <a href="{{ url('logout') }}"><i class="icon-logout"></i> Log Out </a>

	                         </li>

	                        @endif
	                        

	                    </ul>

	                </div>

                </div>

            </div>
