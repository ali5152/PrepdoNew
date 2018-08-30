@include('educator/header')

			<!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Partners List</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('/Dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Partners</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Partners List</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="tabbable-line">

                                                            <!-- <ul class="nav nav-tabs">

                                    <li class="active">

                                        <a href="#tab1" data-toggle="tab"> List View </a>

                                    </li>

                                    <li>

                                        <a href="#tab2" data-toggle="tab"> Grid View </a>

                                    </li>

                                </ul> -->

                              <!--   <ul class="nav customtab nav-tabs" role="tablist">

	                                <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>

	                                <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>

	                            </ul> -->

                                <div class="tab-content">

                                    <div class="tab-pane active fontawesome-demo" id="tab1">

                                        <div class="row">

					                        <div class="col-md-12">

					                            <div class="card card-box">

					                                <div class="card-head">

					                                    <header>All Partners</header>

					                                    <div class="tools">

					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>

						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>

					                                    </div>

					                                </div>

					                                <div class="card-body ">

					                                    <div class="row">

					                                        <div class="col-md-6 col-sm-6 col-6">

					                                            <div class="btn-group">

					                                                <a href="{{url('AddPartners')}}" id="addRow" class="btn btn-info">

					                                                    Add New <i class="fa fa-plus"></i>

					                                                </a>

					                                            </div>

					                                        </div>

<!-- 					                                        <div class="col-md-6 col-sm-6 col-6">

					                                            <div class="btn-group pull-right">

					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools

					                                                    <i class="fa fa-angle-down"></i>

					                                                </a>

					                                                <ul class="dropdown-menu pull-right">

					                                                    <li>

					                                                        <a href="javascript:;">

					                                                            <i class="fa fa-print"></i> Print </a>

					                                                    </li>

					                                                    <li>

					                                                        <a href="javascript:;">

					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>

					                                                    </li>

					                                                    <li>

					                                                        <a href="javascript:;">

					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>

					                                                    </li>

					                                                </ul>

					                                            </div>

					                                        </div> -->

					                                    </div>

					                                    <!-- TABLE HERE -->

					                                    <div class="table-scrollable">



                         <table id="myTable" class="display" style="width:100%">

        <thead>

            <tr>

                <th>Profile</th>

                <th>Name</th>

                <th>Email</th>

                <th>Allowed Students</th>

                <th>Consumed</th>

                <th>Mobile</th>

                <th>Status</th>

                <th>Action</th>

            </tr>

        </thead>

          <tbody>

          	@foreach($data as $value)
          	<tr>

              <td><img src="{{ url('public/images') }}/{{ $value->profile_image }}" width="30" height="30"></td>

              <td>{{ $value->first_name }} {{ $value->last_name }}</td>

              <td>{{ $value->email }}</td>

              <td>{{ $value->designation }}</td>

              <td>0</td>

              <td>{{ $value->mobile_phone }}</td>

              <td>@if($value->status == 1) <font color="green"> Active </font> @elseif($value->status == 3) <font color="red"> Blocked </font> @else  <font color="red"> Non Active </font> @endif</td>

				<td><a href="{{ url('EditPatner') }}/{{ $value->id }}" class="btn btn-primary btn-xs">

				<i class="fa fa-pencil"></i>

				</a>

				<a href="{{ url('DeletePatner') }}/{{ $value->id }}"><button class="btn btn-default btn-xs">

				<i class="fa fa-trash-o "></i>

				</button></a>
                  @if($value->status == 1)
                
                 <a href="{{ url('BlockUser') }}/{{ $value->id }}"><button class="btn btn-danger btn-xs">

				<i class="fa fa-ban "></i>

				</button></a>  

               @else

                 <a href="{{ url('EnableUser') }}/{{ $value->id }}"><button class="btn btn-success btn-xs">

				<i class="fa fa-check "></i>

				</button></a>   

               @endif
               
                


			</td>

			</tr>

          	@endforeach

          </tbody>

        <tfoot>

            <tr>

                <th>Profile</th>

                <th>Name</th>

                <th>Email</th>

                <th>Allowed Students</th>

                <th>Consumed</th>

                <th>Mobile</th>

                <th>Status</th>

                <th>Action</th>

            </tr>

        </tfoot>

    </table>



					                                    </div>

					                                </div>

					                            </div>

					                        </div>

					                    </div>

                                    </div>

                                    {{-- <div class="tab-pane" id="tab2">

                                        <div class="row">

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof10.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Pooja Patel </div>

					                                            <div class="name-center"> Mathematics </div>

					                                        </div>

				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                            <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof1.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Rajesh </div>

					                                            <div class="name-center"> Science </div>

					                                        </div>

				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof2.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Sarah Smith </div>

					                                            <div class="name-center"> Computer </div>

					                                        </div>

				                                                <p>456, Estern evenue, Courtage area, <br />New York</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

                    					</div>

                    					<div class="row">

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof3.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">John Deo </div>

					                                            <div class="name-center"> Engineering </div>

					                                        </div>

				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof4.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Jay Soni </div>

					                                            <div class="name-center"> Music </div>

					                                        </div>

				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof5.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Jacob Ryan </div>

					                                            <div class="name-center"> Commerce </div>

					                                        </div>

				                                                <p>456, Estern evenue, Courtage area, <br />New York</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

                    					</div>

                    					<div class="row">

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof6.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Megha Trivedi </div>

					                                            <div class="name-center"> Mechanical </div>

					                                        </div>

				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof1.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Rajesh </div>

					                                            <div class="name-center"> Science </div>

					                                        </div>

				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof2.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Sarah Smith </div>

					                                            <div class="name-center"> Computer </div>

					                                        </div>

				                                                <p>456, Estern evenue, Courtage area, <br />New York</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

                    					</div>

                    					<div class="row">

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof10.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Pooja Patel </div>

					                                            <div class="name-center"> Mathematics </div>

					                                        </div>

				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof1.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">Rajesh </div>

					                                            <div class="name-center"> Science </div>

					                                        </div>

				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

					                        <div class="col-md-4">

				                                <div class="card card-box">

				                                    <div class="card-body no-padding ">

				                                    	<div class="doctor-profile">

				                                                <img src="assets/img/prof/prof3.jpg" class="doctor-pic" alt="">

					                                        <div class="profile-usertitle">

					                                            <div class="doctor-name">John Deo </div>

					                                            <div class="name-center"> Engineering </div>

					                                        </div>

				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>

				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>

					                                        <div class="profile-userbuttons">

					                                             <a href="professor_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>

					                                        </div>

				                                        </div>

				                                    </div>

				                                </div>

					                        </div>

                    					</div>

                                    </div> --}}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- end page content -->



        </div>

        <!-- end page container -->

@include('educator/footer')
