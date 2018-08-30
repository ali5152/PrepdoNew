@include('student/header')

<br><br>

      <!-- start page content -->

            <div class="page-content-wrapper">

                <div class="" style="padding: 20px;">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Topic Details &nbsp;<i class="fa fa-angle-right"></i> {{ $data->name }} </div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('/') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Topic</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="parent-item" href="#">Topic Details &nbsp;<i class="fa fa-angle-right"></i></li>
                                    
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

                                        <header>Attempt Quizes</header>

                                    </div>

                                    <div class="card-body no-padding height-9">



                                      <ul>

                                         @foreach($data2 as $value2)

                                              <li><a href="{{ url('AttemptQuiz') }}/{{ $value2->id }}"> {{ $value2->name}} ( {{ $value2->code }} ) </a></li>

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



                            <div class="profile-sidebar">

                                

                                <div class="card">

                                    <div class="card-head card-topline-aqua">

                                        <header>Topic Files</header>

                                    </div>

                                    <div class="card-body no-padding height-9">



                                      <ul>

                                         @foreach($files as $file)

                                              <li><a href="{{ url('public/uploads') }}//{{ $file->filename }}" target="_blank"> {{ $file->filename }} </a></li>

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
                                                 <h4 style="font-weight: bolder;">Description</h4>
                                                  <p>{{ $data->detail }}</p>









                                              </div>
                                            @if($data->instruction != '')
                                                  <div id="biography" >
                                      <h4 style="font-weight: bolder;">Instructions</h4>
                                                  <p>{{ $data->instruction }}</p>
                                                  <?php 

                                              $files = DB::table('system_files')->where('topic_id',$data->id)->where('define','instruction')->get();

                                              ?>
                                                 
                                                  



                                             @foreach($files as $file)

                                              <a href="{{ url('public/uploads') }}/{{ $file->filename }}"> {{ $file->filename }} </a><br>

                                             @endforeach
                                              </div>
                                              @endif
                                                
                                                 @if($data->warm_up != '')
                                                  <div id="biography" >
<h4 style="font-weight: bolder;">Warm Up</h4>
                                                  <p>{{ $data->warm_up }}</p>
                                               
                                                  <?php 

                                              $files = DB::table('system_files')->where('topic_id',$data->id)->where('define','warmup')->get();

                                              ?>



                                             @foreach($files as $file)

                                              <a href="{{ url('public/uploads') }}/{{ $file->filename }}"> {{ $file->filename }} </a><br>
                                              @endforeach
                                                  @endif
                                              









                                              </div>
                                                  @if($data->summary != '')
                                                  <div id="biography" >
<h4 style="font-weight: bolder;">Summary</h4>
                                                  <p>{{ $data->summary }}</p>
                                                  
                                                  <?php 

                                              $files = DB::table('system_files')->where('topic_id',$data->id)->where('define','summary')->get();

                                              ?>



                                             @foreach($files as $file)

                                              <a href="{{ url('public/uploads') }}/{{ $file->filename }}"> {{ $file->filename }} </a><br>
                                                  
                                                </div>
                                                @endforeach
                                                  @endif









                                             



                          </div>

                                      </div>

                                      <div class="row">

                                          <div class="offset-md-3 col-md-6">



                                              <div class="dropdown">

                                <button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="dropdown">

                                  Assignments

                                <span class="caret"></span></button>

                                <ul class="dropdown-menu">

                                  @foreach($data1 as $value1)

                                     

                                     <li><a href="{{ url('AssignmentDetails') }}/{{ $value1->id }}">{{ $value1->name }}</a></li>



                                  @endforeach

                                

                               <!--  <li><a href="#">CSS</a></li>

                                <li><a href="#">JavaScript</a></li> -->

                                </ul>

                                

                                <br><br><br>

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

