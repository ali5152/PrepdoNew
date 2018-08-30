@include('student/header')
            <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="" style="padding: 120px;">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Courses</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Courses</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
            <center>
                                                  @if(session()->has('sucess'))
                               <div class="alert alert-success">
                                  {{ session()->get('sucess') }}
                                  </div>
                                    @endif
                                   
                                  <?php

                                  $count = count($errors->all());
                                  if($count > 0)
                                  {
                                    
                                    echo '<div class="alert alert-danger">';
                                    foreach ($errors->all() as $value) 
                                    {
                                      echo $value."<br>";
                                    }
                                    echo '</div>';
                                    
                                  } 
                                  ?>
                              </center>
							<div class="row">
								@foreach($data as $value)
                                 <?php
                                  $classes = array("green","yellow","pink","blue","green");
                                  $colors = $classes[array_rand($classes)];
                                 ?>
                            <div class="col-xl-3 col-md-6 col-12">

						         <div class="info-box bg-b-<?php echo $colors; ?>">

						            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                          <a href="{{ url('/SubjectDetails') }}/{{ $value->id }}">
						            <div class="info-box-content" style="color:white">
						              <span class="info-box-text">{{ $value->course_name }}</span>
						              <span class="progress-description">
						                    {{ $value->course_code }}
						                  </span>
						              <span class="progress-description">
						                    View Subject
						                  </span>
						            </div>
                                  </a>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->

						        </div>


								@endforeach


						</div>
					<!-- end widget -->



                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
 @include('student/footer')
