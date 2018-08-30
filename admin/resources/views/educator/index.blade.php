@include('educator/header')
            <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/Dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
							<div class="row">
								@if(Session::get('adminController') == 2)

								<div class="col-xl-4 col-md-6 col-12">
						            <a href="{{url('Users')}}">
						          <div class="info-box bg-b-blue" style="color:white;">
						            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Students</span>
						              <span class="info-box-number">{{$data3}}</span>
						              <div class="progress">
						              	 <?php
                                        $per = round(Session::get('consumed')/Session::get('allowed_Students') * 100,0);
						              ?>
						                <div class="progress-bar" style="width: {{$per}}%"></div>
						              </div>
						              <span class="progress-description">
						                    {{$per}}% 
						                  </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          </a>
						          <!-- /.info-box -->
						        </div>

						         <div class="col-xl-4 col-md-6 col-12">
						            <a href="{{url('AllPatners')}}">
						          <div class="info-box bg-b-green" style="color:white;">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Package Consumption</span>
						              <span class="info-box-number">{{ Session::get('consumed') }}/{{ Session::get('allowed_Students') }}</span>
						              <?php
                                        $per = round(Session::get('consumed')/Session::get('allowed_Students') * 100,0);
						              ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: {{$per}}%"></div>
						              </div>
						              <span class="progress-description">
						                    {{$per}}%
						                  </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          </a>
						          <!-- /.info-box -->
						        </div>

						          <div class="col-xl-4 col-md-6 col-12">
						            <a href="#">
						          <div class="info-box bg-b-yellow" style="color:white;">
						            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Expiry Date</span>
						              <span class="info-box-number">{{ date('F j, Y',strtotime(Session::get('expiry'))) }}</span>
						               <?php
                                        $now = time(); // or your date as well
										$your_date = strtotime(Session::get('expiry'));
										$datediff = $now - $your_date;

										$per = -(round($datediff / (60 * 60 * 24)/30 *100,2));
						              ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: {{$per}}%"></div>
						              </div>
						              <span class="progress-description">
						                    {{$per}}% - {{ -(round($datediff / (60 * 60 * 24))) }} Days left
						                  </span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          </a>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->

								@else
                                      
                                      <div class="col-xl-4 col-md-6 col-12">
						            <a href="{{url('AllPatners')}}">
						          <div class="info-box bg-b-green" style="color:white;">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Partners</span>
						              <span class="info-box-number">{{$data1}}</span>
						             <!--  <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						              <span class="progress-description">
						                    45% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          </a>
						          <!-- /.info-box -->
						        </div>


                                      <div class="col-xl-4 col-md-6 col-12">
						            <a href="{{url('AllPatners')}}">
						          <div class="info-box bg-b-blue" style="color:white;">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Users</span>
						              <span class="info-box-number">{{$data3}}</span>
						             <!--  <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						              <span class="progress-description">
						                    45% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          </a>
						          <!-- /.info-box -->
						        </div>


                                      <div class="col-xl-4 col-md-6 col-12">
						            <a href="{{url('AllPatners')}}">
						          <div class="info-box bg-b-yellow" style="color:white;">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Exams</span>
						              <span class="info-box-number">{{$data2}}</span>
						             <!--  <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						              <span class="progress-description">
						                    45% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          </a>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        
						        <!-- /.col -->
						       
						        <!-- /.col -->

								@endif
						        


						      </div>
						</div>
					<!-- end widget -->
                     <!-- chart start -->
                    <!-- <div class="row">
                    <div class="col-sm-8">
                       <div class="card card-box">
                              <div class="card-head">
                                  <header>University Survey</header>
                                  <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                 </div>
                              </div>
                              <div class="card-body no-padding height-9">
								<div class="row">
								    <canvas id="canvas1"></canvas>
								</div>
							</div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                       <div class="card card-box">
                              <div class="card-head">
                                  <header>University Survey</header>
                                  <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                 </div>
                              </div>
                              <div class="card-body no-padding height-9">
								<div class="row">
								    <canvas id="chartjs_pie"></canvas>
								</div>
							</div>
                          </div>
                        </div>
                    </div> -->
                     <!-- Chart end -->
                     <!-- start course list -->
                     <!-- <div class="row">

	                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
		                    <div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user" src="assets/img/course/course4.jpg"></div>
	                        	<div class="course-box">
	                        	<h4>PHP Development Course</h4>
		                            <div class="text-muted"><span class="m-r-10">April 23</span>
		                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
		                            </div>
		                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
		                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
		                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
		                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
	                        	</div>
	                        </div>
                    	</div>
			        </div> -->
			        <!-- End course list -->


                     <!-- start new student list -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>New Users List</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>

														<th>Name</th>
														<th>Email</th>
														<th>Associated Patner</th>
														<th>Created On</th>
														<th>Status</th>
														<th>Action</th>

													</tr>
												</thead>
												<tbody>
													@foreach($data as $query)
													<?php 
                                                     
                                                     $educator = DB::table('educators')->where('id',$query->parent_id)->first();
                                                     
													?>
													<tr>
														<td>{{$query->first_name}}</td>
														<td>{{$query->email }}</td>
														@if($educator)
                                                            <td>{{$educator->first_name }}</td>
														@else
                                                           <td>Self</td>
														@endif
                            <td>{{ $query->created_at }}</td>
                             <td>@if($query->status == 1) <font color="green"> Active </font> @elseif($query->status == 3) <font color="red"> Blocked </font> @else  <font color="red"> Non Active </font> @endif</td>
														<td>@if(Session::get('adminController') == 2)
                 
                 <a href="{{ url('EditUser') }}/{{ $query->id }}" class="btn btn-primary btn-xs">

				<i class="fa fa-pencil"></i>

				</a>

				<a href="{{ url('DeleteUser') }}/{{ $query->id }}"><button class="btn btn-default btn-xs">

				<i class="fa fa-trash-o "></i>

				</button></a>

                @endif
                               @if($query->status == 1)
                
                 	<a href="{{ url('BlockUser2') }}/{{ $query->id }}"><button class="btn btn-danger btn-xs">

				<i class="fa fa-ban "></i>
				</td>

			</tr>  

               @else

                 <a href="{{ url('EnableUser2') }}/{{ $query->id }}"><button class="btn btn-success btn-xs">

				<i class="fa fa-check "></i>

				</button></a>   

               @endif



                          </td>


														<!-- <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td> -->
													</tr>

                          @endforeach
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end new student list -->
                </div>
            </div>
            
        </div>
        <!-- end page container -->
 @include('educator/footer')
