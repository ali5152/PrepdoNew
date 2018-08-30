@include('student/header')

<br><br>

      <!-- start page content -->

            <div class="page-content-wrapper">

                <div class="" style="padding: 20px;">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Assignment Details &nbsp;<i class="fa fa-angle-right"></i> {{ $data->name }} </div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('/') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Assignment</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="parent-item" href="#">Assignment Details &nbsp;<i class="fa fa-angle-right"></i></li>

                                <li class="active">{{ $data->name }}</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <!-- BEGIN PROFILE SIDEBAR -->

                            <div class="profile-sidebar">

                                

                                <div class="card">

                                    <div class="card-head card-topline-aqua">

                                        <header>Assignment Files</header>

                                    </div>

                                    <div class="card-body no-padding height-9">



                                      <ul>

                                         @foreach($files as $file)

                                              <li><a href="{{ url('public/uploads') }}/{{ $file->filename }}" target="_blank"> {{ $file->filename }} </a></li>

                                             @endforeach

                                        <!--   <li>Introduction to Computer and Internet.</li>

                                          <li>Microsoft Application Tools such MS Word, MS Excel, MS PowerPoint.</li>

                                          <li>Computer Organizations and Operating Systems.</li>

                                          <li>Programming in C.</li>

                                          <li>Object Oriented Programming Languages such as C++/Java.</li>

                                          <li>RDBMS and Data Management</li>

                                          <li>Web Technologies such as creation of dynamic website.</li> -->

                                      </ul>

                                    </div>

                                </div>

                            </div>

                            <!-- END BEGIN PROFILE SIDEBAR -->

                            <!-- BEGIN PROFILE CONTENT -->

                            <div class="profile-content">

                                <div class="row">

                                     <div class="card">

                                         <div class="card-topline-aqua">

                                             <header></header>

                                         </div>

                      <div class="white-box">

                                      <!-- Nav tabs -->

                                      <!-- Tab panes -->

                                      <div class="tab-content">

                                          <div class="tab-pane active fontawesome-demo">

                              <div id="biography" >

                                                  <p>{{ $data->detail }}</p>









                                              </div>



                          </div>

                                      </div>



                                  </div>

                                         </div>

                                     </div>

                                </div>

                                <!-- END PROFILE CONTENT -->

                            </div>

                        </div>

                    </div>

                <!-- end page content -->

          

            </div>

            <!-- end page container -->

            @include('student/footer')

