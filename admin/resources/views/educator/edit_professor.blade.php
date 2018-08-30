@include('educator/header')

			<!-- start page content -->

            <div class="page-content-wrapper">

                <div class="page-content">

                    <div class="page-bar">

                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Edit Partners</div>

                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{url('/Dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li><a class="parent-item" href="#">Partners</a>&nbsp;<i class="fa fa-angle-right"></i>

                                </li>

                                <li class="active">Partner</li>

                            </ol>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="card card-box">

                                <div class="card-head">

                                    <header>Basic Information</header>

                                     <button id = "panel-button"

				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right"

				                           data-upgraded = ",MaterialButton">

				                           <i class = "material-icons">more_vert</i>

				                        </button>

				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"

				                           data-mdl-for = "panel-button">

				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>

				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>

				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>

				                        </ul>

                                </div>

                                <div class="card-body" id="bar-parent">

                                    <form action="{{ url('EditProfessorSubmit') }}" method="POST" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">

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

                                        <div class="form-body">



                                        <div class="form-group row">

                                                <label class="control-label col-md-3">Patner Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" data-required="1" placeholder="Enter first name" name="first_name" value="{{ $data->first_name }}" required = "true" class="form-control input-height" /> </div>

                                            </div>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Last Name

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="last_name" data-required="1" placeholder="Enter last name" value="{{ $data->last_name }}" required = "true" class="form-control input-height" /> </div>

                                            </div> -->

                                            <input type="hidden" name="id" value="{{ $data->id }}">

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Email

                                                </label>

                                                <div class="col-md-5">

                                                    <div class="input-group">

                                                       <!--  <span class="input-group-addon">

                                                                <i class="fa fa-envelope"></i>

                                                            </span> -->

                                                        <input type="text" class="form-control input-height" name="email" value="{{ $data->email }}" readonly="" required = "true" placeholder="Email Address"> </div>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Joining Date

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

                                                <input class="form-control input-height" name="joining_date" size="16" value="{{ $data->joining_date }}" required = "true" placeholder="Joining Date" type="date" value="">

                                               <!--  <span class="input-group-addon"><span class="fa fa-calendar"></span></span> -->

                                            </div>

                                            <input type="hidden" id="dtp_input2" value="" />

                                                </div>

                                            </div>


                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Expiry Date

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

                                                 <input class="form-control input-height" name="exp_date" size="16" value="{{ $data->exp_date }}" required = "true" placeholder="Joining Date" type="date" value="">

                                            </div>

                                            <input type="hidden" id="dtp_input2" value="" />

                                                </div>

                                            </div>

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Password (Optional)

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="password" name="password" data-required="1" placeholder="Enter Password" required = "true" class="form-control input-height" /> </div>

                                            </div> -->

                                         <!--    <div class="form-group row">

                                                <label class="control-label col-md-3">Confirm Password (Optional)

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="password" name="confirm_password" data-required="1" placeholder="Re-enter your password" required = "true" class="form-control input-height" /> </div>

                                            </div> -->

                                            <div class="form-group row">

                                                 <label class="control-label col-md-3">Allowed Students

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input type="text" name="designation" data-required="1" value="{{ $data->designation }}" required = "true" class="form-control input-height" /> </div>

                                            </div>

                                           <!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Departments

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" name="department">

                                                        <option value="">Select...</option>

                                                        <option value="Category 1">Computer</option>

                                                        <option value="Category 2">Mechanical</option>

                                                        <option value="Category 3">Mathematics</option>

                                                        <option value="Category 4">Commerce</option>

                                                        <option value="Category 5">Music</option>

                                                        <option value="Category 6">Science</option>

                                                    </select>

                                                </div>

                                            </div> -->

                                     <!--        <div class="form-group row">

                                                <label class="control-label col-md-3">Gender

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <select class="form-control input-height" value="{{ old('gender') }}" required = "true" name="gender">

                                                        <option value="">Select...</option>

                                                        <option value="Male">Male</option>

                                                        <option value="Female">Female</option>

                                                    </select>

                                                </div>

                                            </div> -->

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Mobile No.

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <input name="mobile_number" value="{{ $data->mobile_phone }}" required = "true" type="number" placeholder="Mobile Number" class="form-control input-height" /> </div>

                                            </div>

                                              <div class="form-group row">

                                                <label class="control-label col-md-3">Allowed Exams

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">
                                            
                                                  <select id="dates-field2" name="allowed_exams[]" class="multiselect-ui form-control" multiple="multiple">
                                                    @foreach($examtype as $value)
                                                           <?php 
                                                              $values = explode(',', $data->allowed_exams);
                                                              $check = array_search($value->id,$values);
                                                                  if($check >= 0)
                                                                  {
                                                                    $selected = 'selected';
                                                                  }
                                                                  else
                                                                  {
                                                                    $selected = '';
                                                                  }
                                                    

                                                           ?>
                                                        <option value="{{ $value->id }}" {{ $selected }}>{{ $value->course_name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                   <!--             <div class="form-group row">

                                                <label class="control-label col-md-3">Birth Date

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input5" data-link-format="yyyy-mm-dd">

                                                <input class="form-control input-height" value="{{ $data->birth_date }}" required = "true" name="birth_date" size="16" placeholder="date of Birth" type="date" value="">

                                               
                                            </div>

                                            <input type="hidden" id="dtp_input5" value="" />

                                                </div>

                                            </div> -->

                                        	<!--  <div class="form-group row">

                                                <label class="control-label col-md-3">Address

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-5">

                                                    <textarea name="address" placeholder="address" class="form-control-textarea" rows="5" ></textarea>

                                                </div>

                                            </div> -->

                                            <div class="form-group row">

                                                <label class="control-label col-md-3">Patner Logo ( Optional )

                                                </label>

                                                <div class="compose-editor">

                                                  <input type="file" name="profile_image" class="default">

                                              </div>

                                            </div>

											<!-- <div class="form-group row">

												<label class="control-label col-md-3">Education

												</label>

												<div class="col-md-5">

													<textarea name="address" class="form-control-textarea" placeholder="Education" rows="5"></textarea>

												</div>

											</div> -->

											<div class="form-actions">

                                            <div class="row">

                                                <div class="offset-md-3 col-md-9">

                                                    <button type="submit" class="btn btn-info">Submit</button>

                                                    <button type="button" class="btn btn-default">Cancel</button>

                                                </div>

                                            	</div>

                                       		 </div>

										</div>

                                    </form>

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
